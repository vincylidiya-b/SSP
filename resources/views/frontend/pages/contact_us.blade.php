@extends('frontend.layouts.subpage')
@section('title', 'Contact Us')
@section('description', 'Get in touch with SmartSchool Plus for enquiries, support, or to schedule a free demo of our comprehensive school management software.')
@section('keywords', 'Contact SmartSchool Plus, school software support, enquiry, free demo, school management system contact')
@section('content')

    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <span class="title">Contact Us</span>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="{{ url('/') }}">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Contact Us</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
            <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right"
                data-aos-delay="300">
            <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </section>
    </main>
    <!-- breadcrumb-area-end -->
    <!-- Success Message -->
    <div id="success-message" style="color: green; display: none;"></div>
    <!-- contact-area -->
    <main class="main-area fix">
        <div class="container">
    <div class="text-center py-5">
        <h2 style="font-size:42px; font-weight:700; color:#0c0c44;">
            Start Your Smart School Journey Today
        </h2>

        <p style="font-size:18px; color:#666;">
            Connect with SmartSchool Plus to simplify school management, improve communication, and transform your institution digitally.
        </p>
    </div>
</div>

        <section class="contact-area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                    </div>

                    <div class="col-lg-8">
                        <div class="contact-form-wrap" id="contact-form-wrap">
                            <h4 class="title">Send Us Message</h4>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form id="enquiry-form" action="{{ route('store') }}" method="POST">
                                @csrf
                                <div class="form-grp">
                                    <input name="school_name" placeholder="School Name *" maxlength="100" required>
                                </div>
                                <div class="form-grp">
                                    <input name="contact_person" placeholder="Contact Person *" maxlength="100" required>
                                </div>
                                <div class="form-grp">
                                    <input id="phone" name="contact_number" placeholder="Contact Number (Whatsapp) *"
                                        maxlength="20" required>
                                </div>
                                <div class="form-grp">
                                    <input name="email" type="email" placeholder="E-mail *" maxlength="100" required>
                                </div>
                                <div class="form-grp">
                                    <textarea name="address" placeholder="Address *" maxlength="255" required></textarea>
                                </div>
                                <div class="form-grp">
                                    <input name="city" placeholder="City *" maxlength="30" required>
                                </div>
                                <div class="form-grp">
                                    <textarea name="message" placeholder="Message *" maxlength="255" required></textarea>
                                </div>
                                <input type="hidden" id="full_phone" name="full_phone_number">
                                {{-- <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response"> --}}

                                <button type="submit" name="submit" class=" btn-two arrow-btn">Submit Now</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
                <!-- contact-map -->
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62303.04238913424!2d78.59153687843445!3d12.586196219702504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3badaaea950786f3%3A0x5f3b489cca9a30a2!2sBosco%20Soft%20Technologies%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1727291490855!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- contact-map-end -->
            </div>
        </section>
    @endsection
    @section('scripts')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var input = document.querySelector("#phone");
                var enquiryForm = document.querySelector("#enquiry-form");
                var fullPhone = document.querySelector("#full_phone");

                if (input) {
                    var iti = window.intlTelInput(input, {
                        initialCountry: "IN", // Default to India
                        separateDialCode: true, // Shows the dial code separately (like +91)
                        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
                    });

                    if (enquiryForm) {
                        enquiryForm.addEventListener("submit", function(e) {
                            e.preventDefault(); // Prevent the default form submission

                            var submitButton = this.querySelector("button[type=submit]");
                            if (submitButton) submitButton.disabled = true; // Disable the submit button to prevent multiple submissions

                            var dialCode = iti.getSelectedCountryData().dialCode; // Get the dial code separately
                            var phoneNumber = input.value.trim(); // Get the raw phone number
                            var formattedNumber = "(+" + dialCode + ") " + phoneNumber; // Format as (+91) 1234567890
                            
                            if (fullPhone) {
                                fullPhone.value = formattedNumber; // Set the formatted number in the hidden input
                            }

                            // Execute reCAPTCHA v3
                            grecaptcha.ready(function() {
                                grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'submit'}).then(function(token) {
                                    // Add reCAPTCHA token to form data
                                    var formData = new FormData(enquiryForm);
                                    formData.append('recaptcha_token', token);

                                    // Send the form data using AJAX
                                    fetch(enquiryForm.action, {
                                            method: 'POST',
                                            body: formData,
                                            headers: {
                                                'X-Requested-With': 'XMLHttpRequest', // Set this header to indicate an AJAX request
                                            }
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.success) {
                                                // Trigger SweetAlert for success message
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'Form Submitted',
                                                    text: data.message,
                                                    confirmButtonText: 'OK'
                                                });
                                                enquiryForm.reset(); // Reset the form after submission
                                            } else {
                                                // Show error message
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Submission Failed',
                                                    text: data.message || 'Please try again.',
                                                    confirmButtonText: 'OK'
                                                });
                                            }
                                        })
                                        .catch(error => {
                                            console.error('Error:', error);
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Error',
                                                text: 'An error occurred. Please try again.',
                                                confirmButtonText: 'OK'
                                            });
                                        })
                                        .finally(() => {
                                            if (submitButton) submitButton.disabled = false; // Re-enable the submit button after the request completes
                                        });
                                });
                            });
                        });
                    }
                }
            });
        </script>
    @endsection
