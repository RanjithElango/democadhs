@extends('layout.layout')
@section('title', 'Login - ')
@section('content')
<style>
    .error{
        color:red;
    }
    </style>
    <section class="login-section">
        <div class="container">
           <div class="login-form-content">
                <div class="row">
                    <div class=" login-detail">
                        <div class="login-image">
                            <img src="./images/login.png">
                        </div>
                        <form action="#" method="POST" class='login_forms' onsubmit="return validateLoginForm()">
                            <h4 class="mb-4 form-head">Login Into Your Account</h4>

                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" placeholder="name@example.com" id="login_email_address"
                                    name="email">
                                <label>Email address</label>
                                <div id="login_emailError" class="error"></div>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" placeholder="Password" id="login_password" name="password">
                                <label for="login_password">Password</label>
                                <span class="toggle-password" onclick="togglePasswordVisibility('login_password')">
                                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                </span>
                                <div id="login_passwordError" class="error"></div>
                            </div>

                            <div class="row password-text mb-4">
                                <div class="col text-end ">
                                    <a href="" class="forget-pwd">Forgot password?</a>
                                </div>
                            </div>

                            <button type="submit" class="submit-btn btn btn-primary mb-4">Login</button>

                            <div class="text-center register-text">
                                <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>
@endsection
