@extends('layout.layout')
@section('title', 'Forms - ')
@section('content')

<section class="forms-section">
    <div class="container">
        <div class="appointment-main">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <div class="appointment-content">
                        <h1 class="appointment-title">
                            BOOK AN APPOINTMENT.
                        </h1>
                        <p class="appointment-text">
                            It all begins with an idea. Maybe you want to launch a business. Maybe you want to turn a hobby into something more. Or maybe you have a creative project to share with the world. Whatever it is, the way you tell your story online can make all the difference.
                        </p>
                        <a href="#" id="checkCodeButton"><button class="check-code-btn">Check Code Balance</button></a>
                        <a href="#" id="selectAppointmentButton" style="display: none;"><button class="check-code-btn">Select Appointment</button></a>
                    </div>
                </div>
                <div class="col-lg-7 col-12 select-appointment-details">
                    <div class="appointment-details" id="appointmentDetails">
                        <h1 class="appointment-select-title">
                        Select Appointment
                        </h1>
                        <div class="appointment-cards">
                            <div class="card">
                            <div class="card-body">
                                <div class="appointment-card-head">
                                <div>
                                    <h5 class="appointment-service-title">Example Service</h5>
                                    <span class="appointment-service-time">1 Hour</span>
                                </div>
                                <button class="book-btn" onclick="showCalendar()">Book</button>
                                </div>
                                <span class="appointment-card-text">
                                    Description of your service
                                </span>
                            </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="appointment-card-head">
                                    <div>
                                        <h5 class="appointment-service-title">Example Service</h5>
                                        <span class="appointment-service-time">30 Minutes</span>
                                    </div>
                                    <button class="book-btn" onclick="showCalendar()">Book</button>
                                    </div>
                                    <span class="appointment-card-text">
                                        Description of your service
                                    </span>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="appointment-card-head">
                                    <div>
                                        <h5 class="appointment-service-title">Example Service</h5>
                                        <span class="appointment-service-time">1 Hour</span>
                                    </div>
                                    <button class="book-btn" onclick="showCalendar()">Book</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="calendar-details" id="calendarDetails">
                            <div class="d-flex calendar-title">
                                <span class="content-back" onclick="goBack()"><i class="fa-solid fa-chevron-left arrow"></i></span>
                                <h1 class="appointment-select-title">Select Calendar</h1>
                            </div>
                            <!-- <div class="calendar-cards">
                                <div class="card">
                                <div class="card-body">
                                        <h5 class="calendar-service-title">Any Available</h5>
                                        <button class="book-btn">Select</button>
                                </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="calendar-service-title">Joaquin</h5>
                                        <button class="book-btn">Select</button>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="calendar-service-title">Stella</h5>
                                        <button class="book-btn">Select</button>
                                    </div>
                                </div>
                            </div> -->
                    </div>

                    <div class="check-code-details" id="checkCodeDetails" style="display: none;">
                        <h1 class="check-code-title">
                            Check Code Balance
                        </h1>
                        <div class="code-balance-details">
                            <div class="code-balance-head">
                                <h3 class="code-balance-title active" onclick="showCheckByCode(this)">Check by Code</h3>
                                <h3 class="code-balance-title" onclick="showCheckByMail(this)">Check by Mail</h3>
                            </div>
                            <div class="code-balance-content">
                                <div class="code" id="checkByCode">
                                    <p class="code-balance-text">Enter a redeemable code below to find out the balance for packages, gifts, and subscriptions</p>
                                    <label for="code">Code</label>
                                    <input type="text" id="code" name="code" placeholder="Enter Code" class="form-control text-box" required="">
                                    <button class="submit-btn" id="codeSubmitButton" style="display: none;">Submit</button>
                                </div>
                                <div class="mail" id="checkByMail">
                                    <p class="code-balance-text">Enter an email address below and we’ll email you the balance for your packages, gifts, or subscriptions</p>
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Enter Email"  class="form-control text-box" required="">
                                <button class="submit-btn" id="emailSubmitButton" style="display: none;">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
