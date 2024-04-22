<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')CADHS</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
    <!-- --icon-- -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- --slick-- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <!-- ---map--- -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- --select2-- -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
     <!-- --slick-- -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


   <link rel="stylesheet" href="{{ asset('css/cadhs-styles.css') }}">
   <style>
    .navbar .nav-item .dropdown .dropdown-menu .dropdown-item:hover {
    background-color: #a0d837;
    color: white;
    }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><img src="./images/Logo-CADHS.svg" class="logo" alt="Logo"></a>

            <button class="custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link {{ (url()->current() == route('covid-screen')) ? 'active' : 'none' }}" href="{{ route('covid-screen') }}">COVID Screening</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link {{ (url()->current() == route('doctor')|| request()->routeIs('cv')) ? 'active' : 'none' }}" href="{{ route('doctor') }}">Your Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link {{ (url()->current() == route('special-service')|| url()->current() == route('diabetes')|| url()->current() == route('thyroid')|| url()->current() == route('pcos')|| url()->current() == route('adrenal')|| url()->current() == route('menopause')|| url()->current() == route('ostoporosis')|| url()->current() == route('pituitary')|| url()->current() == route('testostrone')|| url()->current() == route('transgender')) ? 'active' : 'none' }}" href="{{ route('special-service') }}">Speciality Services</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown" onmouseover="openDropdown()" onmouseout="closeDropdown()">
                            <a class="nav-link custom-nav-link dropdown-toggle {{ (url()->current() == route('lab-request') || url()->current() == route('rx-refill') || url()->current() == route('patient-support')) ? 'active' : '' }}" href="#" id="dropdownMenuLink" aria-expanded="false">
                                Lab/Rx Request <i class="fas fa-chevron-down arrow-icon" id="dropdownArrow"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" id="dropdownMenu">
                                <li>
                                    <a class="dropdown-item {{ (url()->current() == route('lab-request')) ? 'active' : '' }}" href="{{ route('lab-request') }}">Lab Request</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ (url()->current() == route('rx-refill')) ? 'active' : '' }}" href="{{ route('rx-refill') }}">Rx Refill</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ (url()->current() == route('patient-support')) ? 'active' : '' }}" href="{{ route('patient-support') }}">Patient Support Links</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item d-none">
                        <a class="nav-link custom-nav-link" href="{{ route('forms') }}">New Location</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link custom-nav-link">Contact Us</a>
                    </li>
                </ul>
                        <a href="{{ route('login') }}"><button class="btn login-btn d-none">Login</button></a>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <section id="contact" class="contact">
        <div class="container">
        <div data-aos="fade-up">
            <div class="contact-content">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="contact-head">
                            <h1 class="contact-title" style="margin-bottom: 50px">
                                CONTACT US
                            </h1>
                            <p class="contact-subtitle d-none">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla venenatis tempus orci ut lacinia. Sed tempor hendrerit fermen Pellentesque ac diam commodo.
                            </p>
                        </div>
                        <ul class="contact-grids">
                            <li class="contact-grid-item ">
                                <a href="mailto:Reception@cadhs.net" style=" padding: 60px 18px">
                                        <img src="./images/mailicon.svg" class="contact-icon">
                                        <span class="item-title">
                                          Reception@cadhs.net


                                        </span>
                                </a>
                            </li>
                            <li class="contact-grid-item ">
                             <a href="tel:6268215300" style=" padding: 60px 18px">
                                    <img src="./images/call-icon.svg" class="contact-icon">
                                    <span class="item-title">
                                        (626) 821-5300

                                    </span>
                            </a>
                            </li>
                            <li class="contact-grid-item ">
                            <a href="" style=" padding: 60px 18px">
                                    <img src="./images/fax.svg" class="contact-icon">
                                    <span class="item-title">
                                        (626) 821-0993
                                    </span>
                            </a>
                            </li>
                            <li class="contact-grid-item ">
                            <a href="" style=" padding: 60px 18px">
                                    <img src="./images/apartment.svg" class="contact-icon">
                                    <span class="item-title-address">
                                        228 East Foothill Blvd Arcadia,
                                        CA 91006
                                    </span>
                            </a>
                            </li>
                        </ul>
                        <div class="button-date-day">
                            <button class=" btn date-btn">
                                <img src="./images/date.svg" class="cadh-icon">
                                <span>
                                    Monday–Friday, 8am–5pm
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">

                        <div class="message-form">
                            <div class="logo-cadh">
                                <img src="./images/Logo-CADHS.svg">
                            </div>
                            <form action="{{route('contact.store')}}" method="POST" onsubmit="return validateContactForm()">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="fullName">First Name</label>
                                        <input type="text" id="fullName" name="fullName" class="form-control text-box">
                                        <div id="frstnameError" class="error" style="color: #f28484"></div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" id="lastName" name="lastName" class="form-control text-box">
                                        <div id="lstnameError" class="error" style="color: #f28484"></div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control text-box">
                                        <div id="mailError" class="error" style="color: #f28484"></div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="message">Message</label>
                                        <textarea id="messages" name="messages" rows="4" class="form-control message-box"></textarea>
                                        <div id="psswordError" class="error" style="color: #f28484"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn send-btn">Send Message</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-aos="fade-up">
          <div id="map"></div>
        </div>
          <div class="copy-rights d-flex justify-content-between">
            <p class="copy-text">
                © 2024 cadhs.net. Copyright and rights reserved
            </p>
            <div class="terms-privacy">
                <a href="">
                  Terms and Conditions
                </a>
            <img src="./images/dot.svg" >
            <a href="">
                Privacy
              </a>
            </div>
          </div>
        </div>
    </section>

    <script>
        // Function to validate the contact form
        function validateContactForm() {
            var firstname = document.getElementById('fullName').value;
            var lastname = document.getElementById('lastName').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('messages').value;
            var firstError = document.getElementById('frstnameError');
            var lastError = document.getElementById('lstnameError');
            var emailError = document.getElementById('mailError');
            var passwordError = document.getElementById('psswordError');
            var isValid = true;

            // Reset previous error messages
            firstError.innerHTML = '';
            lastError.innerHTML = '';
            emailError.innerHTML = '';
            passwordError.innerHTML = '';

            if (firstname.trim() === '') {
                firstError.innerHTML = 'Please enter your First Name';
                isValid = false;
            }

            if (lastname.trim() === '') {
                lastError.innerHTML = 'Please enter your Last Name';
                isValid = false;
            }

            if (email.trim() === '') {
                emailError.innerHTML = 'Please enter your email';
                isValid = false;
            }

            if (password.trim() === '') {
                passwordError.innerHTML = 'Please enter your Message';
                isValid = false;
            }

            return isValid;
        }

        // Event listeners to remove error messages when typing
        document.getElementById('fullName').addEventListener('input', function() {
            document.getElementById('frstnameError').innerHTML = '';
        });

        document.getElementById('lastName').addEventListener('input', function() {
            document.getElementById('lstnameError').innerHTML = '';
        });

        document.getElementById('email').addEventListener('input', function() {
            document.getElementById('mailError').innerHTML = '';
        });

        document.getElementById('messages').addEventListener('input', function() {
            document.getElementById('psswordError').innerHTML = '';
        });
    </script>



    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- --select2-- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!-- ---flatpickr-calendar--- -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- --map-- -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
