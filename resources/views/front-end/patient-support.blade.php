@extends('layout.layout')
@section('title', 'Patient Support - ')
@section('content')

<section class="patient-support-section">
    <div class="container">
        <main class="patient-support-content">
            <h1 class="patient-support-title">Patient Support</h1>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card support-card">
                    <div class="card-body support-card-body">
                        <figure class="card-img">
                            <img src="./images/support-link-image.jpeg" alt="">
                        </figure>
                        <h5 class="support-card-title">Support Links</h5>
                        <ul id="links">
                            <li><a href="https://diabetes.org/">DIABETES.ORG</a></li>
                            <li><a href="http://gdatf.org/">GDATF.ORG </a><span>(Graves Disease)</span></li>
                            <li><a href="http://hormone.org/">HORMONE.ORG</a></li>
                            <li><a href="https://www.hypopara.org">HYPOPARA.ORG</a></li>
                            <li><a href="https://www.nof.org">NOF.ORG </a><span>(National Osteoporosis Foundation)</span></li>
                            <li><a href="https://www.pituitary.org">PITUITARY.ORG</a></li>
                            <li><a href="http://thyroid.org/">THYROID.ORG</a></li>
                            <li><a href="http://thyroidca.org/">THYROIDCA.ORG </a><span>(Thyroid Cancer)</span></li>
                        </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card support-card">
                    <div class="card-body support-card-body">
                        <figure class="card-img">
                            <img src="./images/inform-take-image.jpeg" alt="">
                        </figure>
                        <h5 class=" support-card-title">Intake Forms</h5>
                        <p class="support-card-text">First Time Patient Forms</p>
                        <button class="support-btn">Download</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section>

@endsection
