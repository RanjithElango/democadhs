@extends('layout.layout')
@section('title', 'Covid Screening - ')
@section('content')
<style>
    .alert-success{
        top: 140px;
        margin: auto;
    }
     .select2-container, .select2-selection, .select2-selection__rendered, .select2-selection__arrow {
    margin-bottom: 0px;
  }
    </style>
@if(session('success'))
    <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
    </div>
@endif
<section class="covid-survey">
    <div class="container">
        <h1 class="covid-survey-title">
            Covid-19 Screening Survey
        </h1>
        <div data-aos="fade-up">
            <div aria-live="polite" aria-atomic="true" class=" toast-section d-flex justify-content-center align-items-center" style="min-height: 50px;width: 100%;margin: 12px 0;">
                <!-- Then put toasts within -->
                <div class="toast col-lg-6 col-12" role="alert" aria-live="assertive" aria-atomic="true" style="
                background-color: #f7f9f7;">
                <div class="toast-body">Note: <br> YOU ANSWERED YES TO ANY QUESTION, YOU WOULD HAVE TO RESCHEDULE YOUR APPOINTMENT</div>
                </div>
            </div>
            <div class="survey-form col-lg-6 col-12">

                <form id="covidForm" action="{{route('covid.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label for="fullName">First Name</label>
                            <input type="text" id="fullname" name="fullName" placeholder="Fullname" class="form-control text-box">
                            <div id="fullnameError" class="error-message"></div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastname" name="lastName" placeholder="Lastname" class="form-control text-box">
                            <div id="lastnameError" class="error-message"></div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="birthday">Birthday</label>
                            <input type="date" id="birthday" name="birthday" placeholder="DD-MM-YYYY" class="form-control text-box date">
                            <div id="birthdayError" class="error-message"></div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="categories">Symptoms</label>
                            <select name="categories[]" id="categories" class="form-control" multiple>
                                <option value="Fever or chills">Fever or chills</option>
                                <option value="Cough">Cough</option>
                                <option value="Shortness of breath or difficulty breathing">Shortness of breath or difficulty breathing</option>
                                <option value="Fatigue">Fatigue</option>
                                <option value="Muscle or body aches">Muscle or body aches</option>
                                <option value="Headache">Headache</option>
                                <option value="New loss of taste or smell">New loss of taste or smell</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Congestion or runny nose">Congestion or runny nose</option>
                                <option value="Nausea or vomiting">Nausea or vomiting</option>
                                <option value="Diarrhea">Diarrhea</option>
                            </select>
                            <div id="categoryError" class="error-message"></div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="physical-contact">Within the past 14 days, have you been in close physical contact (6 feet or closer for a cumulative total of 15 minutes) with:</label>
                            <ul class="physical-contact-list">
                                <li>
                                    <span>Anyone who is known to have laboratory-confirmed COVID-19?</span>
                                </li>
                                <li>
                                    <span>Anyone who has any symptoms consistent with COVID-19?</span>
                                </li>
                            </ul>
                            <select id="physical-contact" name="physical_contact"  class="select-control col-md-6 select2">
                                <option value=''>Select Option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <div id="physicalContactError" class="error-message"></div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="isolate-detail">Are you isolating or quarantining because you may have been exposed to a person with COVID-19 or are worried that you may be sick with COVID-19?</label>
                            <select id="isolate-detail" name="isolate_detail"  class="col-md-6 select2">
                                <option value=''>Select Option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <div id="isolateDetailError" class="error-message"></div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="test-result" class="col-md-12">Are you currently waiting on the results of a COVID-19 test?</label>
                            <select id="test-result" name="test_result"  class="col-md-6  select2">
                                <option value=''>Select Option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <div id="testResultError" class="error-message"></div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn submit-btn">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('fullname').addEventListener('input', function() {
        document.getElementById('fullnameError').innerText = '';
    });

    document.getElementById('lastname').addEventListener('input', function() {
        document.getElementById('lastnameError').innerText = '';
    });

    document.getElementById('birthday').addEventListener('input', function() {
        document.getElementById('birthdayError').innerText = '';
    });

    document.getElementById('categories').addEventListener('input', function() {
        document.getElementById('categoryError').innerText = '';
    });

    document.getElementById('physical-contact').addEventListener('change', function() {
        document.getElementById('physicalContactError').innerText = '';
    });

    document.getElementById('isolate-detail').addEventListener('change', function() {
        document.getElementById('isolateDetailError').innerText = '';
    });

    document.getElementById('test-result').addEventListener('change', function() {
        document.getElementById('testResultError').innerText = '';
    });

    document.getElementById('covidForm').addEventListener('submit', function(event) {
        var fullname = document.getElementById('fullname').value;
        var lastname = document.getElementById('lastname').value;
        var birthday = document.getElementById('birthday').value;
        var categories = document.getElementById('categories').value;
        var physicalContact = document.getElementById('physical-contact').value;
        var isolateDetail = document.getElementById('isolate-detail').value;
        var testResult = document.getElementById('test-result').value;

        var fullnameError = document.getElementById('fullnameError');
        var lastnameError = document.getElementById('lastnameError');
        var birthdayError = document.getElementById('birthdayError');
        var categoryError = document.getElementById('categoryError');
        var physicalContactError = document.getElementById('physicalContactError');
        var isolateDetailError = document.getElementById('isolateDetailError');
        var testResultError = document.getElementById('testResultError');
        var hasError = false;

        // Validation for First Name
        if (fullname.trim() === '') {
            fullnameError.innerText = 'Please enter your first name';
            hasError = true;
        }

        // Validation for Last Name
        if (lastname.trim() === '') {
            lastnameError.innerText = 'Please enter your last name';
            hasError = true;
        }

        // Validation for Birthday
        if (birthday.trim() === '') {
            birthdayError.innerText = 'Please enter your birthday';
            hasError = true;
        }

        if (categories === '') {
            categoryError.innerText = 'Please select an option';
            hasError = true;
        }

        // Validation for Physical Contact
        if (physicalContact === '') {
            physicalContactError.innerText = 'Please select an option';
            hasError = true;
        }

        if (isolateDetail === '') {
            isolateDetailError.innerText = 'Please select an option';
            hasError = true;
        }

        if ( testResult === '') {
            testResultError.innerText = 'Please select an option';
            hasError = true;
        }

        if (hasError) {
            event.preventDefault();
        }
    });
</script>


@endsection
