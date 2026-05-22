<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Enquiry - Smartschool Plus</title>
    <meta name="description" content="Send an enquiry to SmartSchool Plus for school management software demo, pricing, or other queries.">
    <meta name="keywords" content="SmartSchool enquiry, school software demo request, contact SmartSchool, education ERP pricing">
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/smsp-favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon-skillgro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon-skillgro-new.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tg-cursor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
    <!-- main-area -->
    <main class="main-area fix">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <section class="contact-area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-form-wrap">
                            <h1 class="title" style="font-size: 24px;">Send Us Message</h1>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form id="contact-form" action="{{ route('store') }}" method="POST">
                               @csrf
                                <div class="form-grp">
                                    <input name="school_name" placeholder="School Name *" maxlength="100" required>
                                </div>
                                <div class="form-grp">
                                    <input name="contact_person" placeholder="Contact Person *" maxlength="100"
                                        required>
                                </div>
                                <div class="form-grp">
                                    <input id="phone" name="contact_number"
                                        placeholder="Contact Number (Whatsapp) *" maxlength="20" required>
                                </div>
                                <div class="form-grp">
                                    <input name="email" type="email" placeholder="E-mail *" maxlength="100"
                                        required>
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
                                <button type="submit" name="submit" class="btn btn-two arrow-btn">Submit Now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- contact-map-end -->
            </div>
        </section>
    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <footer class="footer__area footer__area-two">
    </footer>
    <!-- footer-area-end -->
    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/tween-max.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/js/tg-cursor.min.js') }}"></script>
    <script src="{{ asset('assets/js/vivus.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/svg-inject.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/js/plyr.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>

    {{-- For Country Code --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LdiU08sAAAAAGXR_FpHTbhBoNq2bydsjTmy9v4o"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            SVGInject(document.querySelectorAll("img.injectable"));
        });

        var input = document.querySelector("#phone");
        var iti = window.intlTelInput(input, {
            initialCountry: "IN", // Default to India
            separateDialCode: true, // Shows the dial code separately (like +91)
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
        });

        document.querySelector("#contact-form").addEventListener("submit", function(e) {
            e.preventDefault(); // Prevent default form submission

            var submitButton = this.querySelector("button[type=submit]");
            submitButton.disabled = true; // Disable submit button

            var dialCode = iti.getSelectedCountryData().dialCode;
            var phoneNumber = input.value.trim();
            var formattedNumber = "(+" + dialCode + ") " + phoneNumber;
            document.querySelector("#full_phone").value = formattedNumber;

            // Execute reCAPTCHA v3
            grecaptcha.ready(function() {
                grecaptcha.execute('6LdiU08sAAAAAGXR_FpHTbhBoNq2bydsjTmy9v4o', {action: 'submit'}).then(function(token) {
                    // Create form data
                    var formData = new FormData(document.querySelector("#contact-form"));
                    formData.append('recaptcha_token', token);
                    formData.append('_token', '{{ csrf_token() }}');

                    // Send form via AJAX
                    fetch('{{ route("store") }}', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Form Submitted',
                                    text: data.message,
                                    confirmButtonText: 'OK'
                                });
                                document.querySelector("#contact-form").reset();
                            } else {
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
                            submitButton.disabled = false;
                        });
                });
            });
        });
    </script>
</body>

</html>
