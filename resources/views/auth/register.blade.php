@extends('layout.layout')
@section('title', 'Register - ')
@section('content')
<style>
    .error{
        color:red;
    }
    </style>
<section class="sign-up-section">
    <div class="container">
       <div class="sign-up-form-content">
            <div class="row ">
                <div class="sign-up-detail">
                    <div class="sign-up-image">
                        <img src="./images/sign-up.png">
                    </div>
                    <form action="#" method="POST" class='sign_up_forms' onsubmit="return validateSignUpForm()">
                        <h4 class="mb-4 form-head">Sign up for an Account</h4>
                        <p class="mb-4 form-sub-head">Sign up for a scheduling account to save your information for faster booking</p>

                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" placeholder="name@example.com" id="signup_email_address"
                                name="email">
                            <label>Email address</label>
                            <div id="signup_emailError" class="error"></div>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" placeholder="Password" id="signup_password" name="password">
                            <label for="signup_password">Password</label>
                            <span class="toggle-password" onclick="togglePasswordVisibility('signup_password')">
                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                            </span>
                            <div id="signup_passwordError" class="error"></div>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" placeholder="Confirm Password" id="confirmPassword" name="confirmPassword">
                            <label for="confirmPassword">Confirm Password</label>
                            <span class="toggle-password" onclick="togglePasswordVisibility('confirmPassword')">
                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                            </span>
                            <div id="confirmPasswordError" class="error"></div>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="agreeCheckbox" name="agreeCheckbox">
                            <label class="form-check-label" for="agreeCheckbox">
                                I AGREE TO THE TERMS OF SERVICE AND ACKNOWLEDGE THAT I UNDERSTAND THE PRIVACY POLICY
                            </label>
                            <div id="agreeCheckboxError" class="error"></div>
                        </div>

                        <button type="submit" class="submit-btn btn btn-primary">Sign Up</button>
                    </form>
                </div>
            </div>
       </div>
    </div>
</section>

<script>
    function validateSignUpForm() {
    var email = document.getElementById('signup_email_address').value;
    var password = document.getElementById('signup_password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    var agreeCheckbox = document.getElementById('agreeCheckbox').checked;
    var emailError = document.getElementById('signup_emailError');
    var passwordError = document.getElementById('signup_passwordError');
    var confirmPasswordError = document.getElementById('confirmPasswordError');
    var agreeCheckboxError = document.getElementById('agreeCheckboxError');
    var isValid = true;

    // Reset previous error messages
    emailError.innerHTML = '';
    passwordError.innerHTML = '';
    confirmPasswordError.innerHTML = '';
    agreeCheckboxError.innerHTML = '';

    if (email.trim() === '') {
        emailError.innerHTML = 'Please enter your email';
        isValid = false;
    }

    if (password.trim() === '') {
        passwordError.innerHTML = 'Please enter your password';
        isValid = false;
    }

    if (confirmPassword.trim() === '') {
        confirmPasswordError.innerHTML = 'Please confirm your password';
        isValid = false;
    } else if (password !== confirmPassword) {
        confirmPasswordError.innerHTML = 'Passwords do not match';
        isValid = false;
    }

    if (!agreeCheckbox) {
        agreeCheckboxError.innerHTML = 'Please agree to the terms of service and privacy policy';
        isValid = false;
    }

    return isValid;
  }
</script>

@endsection
