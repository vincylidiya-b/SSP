<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Anhskohbo\NoCaptcha\Facades\NoCaptcha;
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
        // $request->validate([
        //     // Your validation rules
        //     'recaptcha_response' => 'required',
        // ]);

        // $client = new Client();
        // $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
        //     'form_params' => [
        //         'secret' => env('RECAPTCHA_SECRET_KEY'),
        //         'response' => $request->input('recaptcha_response'),
        //         'remoteip' => $request->ip(),
        //     ],
        // ]);

        // $result = json_decode($response->getBody());

        // if (!$result->success || $result->score < 0.5) {
        //     return redirect()->back()->withErrors(['recaptcha' => 'reCAPTCHA validation failed.']);
        // }

        Enquiry::create([
            'school_name' => $request['school_name'],
            'contact_person' => $request['contact_person'],
            'contact_number' => $request['full_phone_number'], // Store the full Contact Number with the country code
            'email' => $request['email'],
            'address' => $request['address'],
            'city' => $request['city'],
            'message' => $request['message'],
        ]);

        return response()->json(['success' => true, 'message' => 'Your form has been submitted successfully.']);
    }

}