<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail; // Make sure to create this Mailable

use GuzzleHttp\Client;

class FormController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('frontend.pages.enquiry');
    }

    public function store(Request $request)
    {
        // Validate form fields
        $request->validate([
            'school_name' => 'required|max:100',
            'contact_person' => 'required|max:100',
            'full_phone_number' => 'required|max:20',
            'email' => 'required|email|max:100',
            'address' => 'required|max:255',
            'city' => 'required|max:30',
            'message' => 'required|max:255',
            'recaptcha_token' => 'required', // reCAPTCHA v3 token
        ]);

        // Verify reCAPTCHA v3 token
        $recaptchaToken = $request->input('recaptcha_token');
        $recaptchaSecret = env('RECAPTCHA_SECRET_KEY');
        
        $client = new Client();
        try {
            $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => [
                    'secret' => $recaptchaSecret,
                    'response' => $recaptchaToken,
                    'remoteip' => $request->ip()
                ]
            ]);
            
            $body = json_decode($response->getBody());
            
            // Log reCAPTCHA response for debugging
            \Log::info('reCAPTCHA response: ' . json_encode($body));
            
            // Check if reCAPTCHA verification was successful
            if (!$body->success) {
                return response()->json([
                    'success' => false,
                    'message' => 'reCAPTCHA verification failed. Please try again.'
                ], 422);
            }

            // Verify action and score
            // Threshold set to 0.4 as per requirements
            if ($body->score < 0.4 || $body->action !== 'submit') {
                \Log::warning('reCAPTCHA low score or invalid action', [
                    'score' => $body->score,
                    'action' => $body->action
                ]);
                return response()->json([
                    'success' => false,
                    'message' => 'Anti-spam verification failed. Please try again.'
                ], 422);
            }
        } catch (\Exception $e) {
            \Log::error('reCAPTCHA verification error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'reCAPTCHA verification error. Please try again later.'
            ], 422);
        }

        // Save enquiry to database
        $enquiry = Enquiry::create([
            'school_name' => $request['school_name'],
            'contact_person' => $request['contact_person'],
            'contact_number' => $request['full_phone_number'],
            'email' => $request['email'],
            'address' => $request['address'],
            'city' => $request['city'],
            'message' => $request['message'],
        ]);

        // Send email to admin
        try {
            Mail::to(env('MAIL_ADMIN'))->send(new ContactMail($enquiry));
        } catch (\Exception $e) {
            // Optional: Log email sending failure
            \Log::error('Email sending failed: '.$e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Your form has been submitted successfully.'
        ]);
    }
}
