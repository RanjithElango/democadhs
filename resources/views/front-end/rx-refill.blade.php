@extends('layout.layout')
@section('title', 'RX Refill - ')
@section('content')

<section class="rx-refill-section">
    <div class="container">
        <div class="rx-refill-content">
            <div class="row">
              <div class="col-lg-5 col-12">
                 <div class="rx-refill-image-section">
                    <h1 class="rx-refill-title">
                        Prescription Refill Request
                    </h1>
                    <p class="rx-refill-text">
                        Please submit your patient information and we will fulfill your prescription request as soon as possible.                        </p>
                    <div class="rx-refill-image">
                    <img src="./images/Rx-refill-image.png">
                </div>
                 </div>
              </div>
              <div class="col-lg-7 col-12">
                @if(session('success'))
                    <div class="alert alert-success col-lg-6" role="alert">
                        {{ session('success') }}
                    </div>
                 @endif
                <div class="rx-refill-form">
                    <form id="rxRefillForm" action="{{route('rxrefill.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <label for="firstname">First Name</label>
                                <input type="text" id="firstname" name="fullName" placeholder="Fullname" class="form-control text-box">
                                <div id="firstnameError" class="error-message"></div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="lastname">Last Name</label>
                                <input type="text" id="lastname" name="lastName" placeholder="Lastname" class="form-control text-box">
                                <div id="lastnameError" class="error-message"></div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="birthday">Date of Birth</label>
                                <input type="date" id="birthday" name="birthday" placeholder="DD-MM-YYYY" class="form-control text-box date">
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="pharmacy_name">Pharmacy Name</label>
                                <input type="text" id="pharmacy_name" name="pharmacy_name" placeholder="Pharmacy Name" class="form-control text-box">
                                <div id="pharmacyNameError" class="error-message"></div>
                            </div>
                            <div class="">
                                <label for="pharmacy_address">Pharmacy Address</label>
                                <div class="col-md-12 mb-4">
                                    <label for="country">Country</label>
                                    <select id="country" name="country" class="col-md-6 select2 text-box">
                                        <option value=''>Select Country</option>
                                        @foreach ($countries as $country)
                                            @if ($country == "United States")
                                                <option value="{{ $country }}" selected>{{ $country }}</option>
                                            @else
                                                <option value="{{ $country }}">{{ $country }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label for="address1">Address Line 1</label>
                                    <input type="text" id="address1" name="address_first" class="form-control text-box">
                                    <div id="address1Error" class="error-message"></div>
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label for="address2">Address Line 2</label>
                                    <input type="text" id="address2" name="address_second" class="form-control text-box">
                                </div>

                                <div class="row">
                                <div class="col-md-4 mb-4">
                                    <label for="city">City</label>
                                    <input type="text" id="city" name="city" class="form-control text-box">
                                    <div id="cityError" class="error-message"></div>
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" class="form-control text-box">
                                    <div id="stateError" class="error-message"></div>
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label for="zip">Zip Code</label>
                                    <input type="text" id="zip" name="zip" class="form-control text-box">
                                    <div id="zipError" class="error-message"></div>
                                </div>
                                </div>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="medication">Medication for Refill</label>
                                <textarea id="medication" name="medication" placeholder="Medication for Refill" class="form-control text-box" rows="4"></textarea>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="supplies">Supplies for Refill</label>
                                <textarea id="supplies" name="supplies" placeholder="Supplies for Refill" class="form-control text-box" rows="4"></textarea>
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
    document.getElementById('rxRefillForm').addEventListener('submit', function(event) {
        var firstname = document.getElementById('firstname').value.trim();
        var lastname = document.getElementById('lastname').value.trim();
        var pharmacyName = document.getElementById('pharmacy_name').value.trim();
        var address1 = document.getElementById('address1').value.trim();
        var city = document.getElementById('city').value.trim();
        var state = document.getElementById('state').value.trim();
        var zip = document.getElementById('zip').value.trim();

        var isValid = true;

        if (firstname === '') {
            document.getElementById('firstnameError').innerText = 'First Name is required';
            isValid = false;
        } else {
            document.getElementById('firstnameError').innerText = '';
        }

        if (lastname === '') {
            document.getElementById('lastnameError').innerText = 'Last Name is required';
            isValid = false;
        } else {
            document.getElementById('lastnameError').innerText = '';
        }

        if (pharmacyName === '') {
            document.getElementById('pharmacyNameError').innerText = 'Pharmacy Name is required';
            isValid = false;
        } else {
            document.getElementById('pharmacyNameError').innerText = '';
        }

        if (address1 === '') {
            document.getElementById('address1Error').innerText = 'Address Line 1 is required';
            isValid = false;
        } else {
            document.getElementById('address1Error').innerText = '';
        }

        if (city === '') {
            document.getElementById('cityError').innerText = 'City is required';
            isValid = false;
        } else {
            document.getElementById('cityError').innerText = '';
        }

        if (state === '') {
            document.getElementById('stateError').innerText = 'State is required';
            isValid = false;
        } else {
            document.getElementById('stateError').innerText = '';
        }

        if (zip === '') {
            document.getElementById('zipError').innerText = 'Zip Code is required';
            isValid = false;
        } else {
            document.getElementById('zipError').innerText = '';
        }

        // Clear error messages on input
        document.getElementById('firstname').addEventListener('input', function() {
            document.getElementById('firstnameError').innerText = '';
        });
        document.getElementById('lastname').addEventListener('input', function() {
            document.getElementById('lastnameError').innerText = '';
        });
        document.getElementById('pharmacy_name').addEventListener('input', function() {
            document.getElementById('pharmacyNameError').innerText = '';
        });
        document.getElementById('address1').addEventListener('input', function() {
            document.getElementById('address1Error').innerText = '';
        });
        document.getElementById('city').addEventListener('input', function() {
            document.getElementById('cityError').innerText = '';
        });
        document.getElementById('state').addEventListener('input', function() {
            document.getElementById('stateError').innerText = '';
        });
        document.getElementById('zip').addEventListener('input', function() {
            document.getElementById('zipError').innerText = '';
        });

        if (!isValid) {
            event.preventDefault();
        }
    });
</script>

@endsection
