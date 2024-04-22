@extends('layout.layout')
@section('title', 'Lab Request - ')
@section('content')
<style>
     .select2-container, .select2-selection, .select2-selection__rendered, .select2-selection__arrow {
    margin-bottom: 0px;
  }
</style>
<section class="lab-request-section">
    <div class="container">
        <div class="lab-request-content">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <div class="lab-form-image-section">
                        <h1 class="lab-form-title">
                            Lab Form Request
                        </h1>
                        <p class="lab-form-text">
                            Please submit your patient information and we will send you forms for lab testing.
                        </p>

                        <div class="lab-form-image">
                        <img src="./images/lab-form-request-image.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    @if(session('success'))
                        <div class="alert alert-success col-lg-6" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="lab-request-form">
                        <form action="{{route('labrequest.store')}}" method="POST" onsubmit="return validateLabForm()">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label for="fullName">First Name</label>
                                    <input type="text" id="firstname" name="fullName" placeholder="Fullname" class="form-control text-box" >
                                    <div id="firstnameError" class="error-message"></div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" id="lastname" name="lastName" placeholder="Lastname" class="form-control text-box" >
                                    <div id="lastnameError" class="error-message"></div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="test-result" class="col-md-12">Delivery Option</label>
                                    <select id="test-result" name="test_result"  class="col-md-6 select2 text-box">
                                        <option value=''>Select Option</option>
                                        <option value="Email">Email</option>
                                        <option value="Post">Post</option>
                                    </select>
                                    <div id="deliveryError" class="error-message"></div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="birthday">Date of Birth</label>
                                    <input type="date" id="birthday" name="birthday"  placeholder="DD-MM-YYYY" class="form-control text-box date" >
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="lab_choice">Lab Choice</label>
                                    <input type="text" id="lab_choice" name="lab_choice" placeholder="E.g Quest Diagnostics" class="form-control text-box" >
                                    <div id="labError" class="error-message"></div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="email">Email</label>
                                    <input type="email" id="mail" name="email" placeholder="Email"  class="form-control text-box" >
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="phone">Phone</label>
                                    <input type="tel" id="phone" name="phone" placeholder="Phone"  class="form-control text-box" >
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn send-btn">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function validateLabForm() {
        var firstname = document.getElementById('firstname').value;
        var lastname = document.getElementById('lastname').value;
        var deliveryOption = document.getElementById('test-result').value;
        var labChoice = document.getElementById('lab_choice').value;
        var firstError = document.getElementById('firstnameError');
        var lastError = document.getElementById('lastnameError');
        var deliveryError = document.getElementById('deliveryError');
        var labError = document.getElementById('labError');
        var isValid = true;

        // Reset previous error messages
        firstError.innerHTML = '';
        lastError.innerHTML = '';
        labError.innerHTML = '';
        deliveryError.innerHTML = '';

        if (firstname.trim() === '') {
            firstError.innerHTML = 'Please enter your First Name';
            isValid = false;
        }

        if (lastname.trim() === '') {
            lastError.innerHTML = 'Please enter your Last Name';
            isValid = false;
        }

        if (labChoice.trim() === '') {
            labError.innerHTML = 'Please enter your Lab Choice';
            isValid = false;
        }

        if (deliveryOption === '') {
            deliveryError.innerHTML = 'Please select Delivery Option';
            isValid = false;
        }

        return isValid;
    }

    // Event listeners to remove error messages when typing
    document.getElementById('firstname').addEventListener('input', function() {
        document.getElementById('firstnameError').innerHTML = '';
    });

    document.getElementById('lastname').addEventListener('input', function() {
        document.getElementById('lastnameError').innerHTML = '';
    });

    document.getElementById('lab_choice').addEventListener('input', function() {
        document.getElementById('labError').innerHTML = '';
    });

    document.getElementById('test-result').addEventListener('input', function() {
        document.getElementById('deliveryError').innerHTML = '';
    });
</script>


@endsection
