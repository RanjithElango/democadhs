@extends('layout.layout')
@section('content')

<section class="hero hero-banner">
    <div data-aos="zoom-in" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 align-self-center">
                    <div class="hero-content details">
                        <h1 class="hero-title m-0" style="margin-bottom: 50px !important">
                            We Are Always Ensure Best Medical Care
                        </h1>
                        <p class="hero-text d-none">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla venenatis tempus orci ut lacinia. Sed tempor hendrerit fermen Pellentesque ac diam commodo.
                        </p>
                        <div class="hero-buttons">
                            <a href="{{ route('lab-request') }}">
                                <button class="lab-form-btn">
                                    <img src="./images/note.svg" class="cadh-icon">
                                    <span>
                                        Lab Form Request
                                    </span>
                                </button>
                                </a>
                                <a href="{{ route('doctor') }}">
                                <button class="meet-btn">
                                    <img src="./images/user.svg" class="cadh-icon">
                                    <span>
                                        Meet Dr. Gaw Gonzalo
                                    </span>
                                </button>
                                </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 banner-image-content">
                    <div class="hero-banner-image">
                    <img  class="banner-doctor-img" src="./images/Doctor-photo.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="insurance-section">
    <div data-aos="fade-up" data-aos-duration="800">
            <div class="container">
                <div class="ins-content">
                    <h1 class="m-0" style="margin-bottom: 40px !important">
                        PPO INSURANCE ACCEPTED
                    </h1>
                    <p class="d-none">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla venenatis tempus orci ut lacinia. Sed tempor hendrerit fermen Pellentesque ac diam commodo.
                    </p>
                </div>
            </div>
    </div>
            <div class="client-details">
                <div id="gallery">
                    <img src="./images/logo_aetna.svg">
                    <img src="./images/logo_blue-california.svg">
                    <img src="./images/logo_health-net.svg">
                    <img src="./images/logo_united-healthcare.svg">
                    <img src="./images/logo_medicare.svg">
                    <img src="./images/logo_anthem-blue-cross.svg">
                    <img src="./images/logo_cigna.svg">
                </div>
            </div>
</section>

<section class="speciality-section">
    <div data-aos="fade-up"  data-aos-duration="800" >
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="speciality-content">
                            <h1 class="speciality-title m-0" style="margin-bottom: 40px !important">
                                Our Speciality Services Your Health
                            </h1>
                            <p class="speciality-text d-none">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla venenatis tempus orci ut lacinia. Sed tempor hendrerit fermen Pellentesque ac diam commodo.
                            </p>
                            <ul class="speciality-list">
                                <a href="#">
                                    <li class="list-item">
                                        <img src="./images/special-list-icon.svg" class="cadh-icon">
                                        <span>
                                            Diabetes & Weight Management
                                        </span>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-item">
                                        <img src="./images/special-list-icon.svg" class="cadh-icon">
                                        <span>
                                            Thyroid Disorders & Thyroid Cancer
                                        </span>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-item">
                                        <img src="./images/special-list-icon.svg" class="cadh-icon">
                                        <span>
                                            Polycystic Ovary Syndrome (PCOS)
                                        </span>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-item">
                                        <img src="./images/special-list-icon.svg" class="cadh-icon">
                                        <span>
                                            Osteoporosis & Parathyroid Disorder
                                        </span>
                                    </li>
                                </a>
                            </ul>
                            <a href="{{ route('special-service') }}" class="special-link">
                            <button class="btn read-btn">
                            <span> Read More</span>
                            <i class="bi bi-arrow-right arrow"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="speciality-image d-flex justify-content-center align-items-baseline">
                        <img src="./images/girl.png" class="special-girl-image">
                        <img src="./images/fruit.png"  class="special-fruit-image">
                            <button class="speciality-btn">
                                20+ Speciality Services
                            </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div data-aos="fade-up"  data-aos-duration="800" >
    <section class="testimonials">
        <div class="container">
            <div class="testimonial-header">
                <h1 style="margin-bottom: 40px">
                    WHAT OUR PATIENTS SAY ABOUT US
                </h1>
                <p class="d-none">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla venenatis tempus orci ut lacinia. Sed tempor hendrerit fermen Pellentesque ac diam commodo.
                </p>
            </div>
            <div data-aos="fade-up"  data-aos-duration="800" >
                <div class="testimonial-content">
                    <div class="row">
                        <div class="slider-container">
                            <div class="col-4">
                                <div class="card" >
                                    <div class="card-body">
                                    <img src="./images/Image Placeholder 2.png" class="customer-image">
                                    <h5 class="card-title">
                                        “One of a kind service”
                                    </h5>
                                    <p class="card-text">Dr. Gaw-Gonzalo was awesome!She talked to me for over an hour just to get to know me and see what can be done to help. I loved her office, very clean and her staff is very friendly! It was easy to make an appointment and I was seen right away.</p>
                                    <p class="customer-name">
                                        Sophie Moore
                                    </p>
                                    <p class="customer-place">
                                        California
                                    </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" >
                                    <div class="card-body">
                                        <img src="./images/Image Placeholder.png" class="customer-image">
                                        <h5 class="card-title">
                                            “An amazing service”
                                        </h5>
                                        <p class="card-text">I was referred to visit Dr. Gaw Gonzalo. She really spend time on my medical history, which other doctors shortcut on this. I can tell the difference. She really take good care of her patients. I highly recommend this doctor</p>
                                        <p class="customer-name">
                                            Vanessa Lewis
                                        </p>
                                        <p class="customer-place">
                                            California
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" >
                                    <div class="card-body">
                                    <img src="./images/Image Placeholder 3.png" class="customer-image">
                                    <h5 class="card-title">
                                        “The best service”
                                    </h5>
                                    <p class="card-text">
                                        “Dr. Gonzalo is an excellent Dr. My daughter and I have been seeing her for our thyroid problems. I never feel like I'm rushed and I always feels like she really cares about me. I would highly recommend her!”</p>
                                    <p class="customer-name">
                                        Andy Smith
                                    </p>
                                    <p class="customer-place">
                                        California
                                    </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" >
                                    <div class="card-body">
                                        <img src="./images/Image Placeholder.png" class="customer-image">
                                        <h5 class="card-title">
                                            “An amazing service”
                                        </h5>
                                        <p class="card-text">
                                            “Blessed to have met her, and I hope that she sticks around for the long run, I think you(the reader) can agree, it's never a fun process finding a good treasured doctor who cares for you and wants the best for you.”</p>
                                        <p class="customer-name">
                                            Vanessa Lewis
                                        </p>
                                        <p class="customer-place">
                                            California
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test-button d-none">
                    <button class="test-read-btn">
                        <span> Read More</span>
                        <i class="bi bi-arrow-right arrow"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
