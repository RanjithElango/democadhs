@extends('layout.layout')
@section('title', 'Speciality Services - ')
@section('content')

<div class="speciality-service-section">
    <div class="container">
        <h1 class="service-head">Speciality Service</h1>
        <div class="row g-4">
                <div class="col-lg-4 col-md-6 col-12 service-feature-cards">
                    <a href="{{ route('diabetes') }}">
                    <div class="card service-card" onclick="goToSlide(1)">
                      <div class="card-body service-card-body">
                        <figure class="card-img">
                            <img src="./images/Diabetics.png" alt="">
                        </figure>
                          <h5 class=" service-card-title">Diabetes & Weight Management</h5>
                          <p class="service-card-text">Our outpatient clinic offers consultation, follow up and state of the art diabetes technology including real time continuous glucose monitoring (CGM) and sensors that can be bluetooth to your smart phones.</p>
                        </div>
                    </div>
                </a>
                </div>
            <div class="col-lg-4 col-md-6 col-12 service-feature-cards">
                <a href="{{ route('thyroid') }}">
                <div class="card  service-card" onclick="goToSlide(2)">
                    <div class="card-body service-card-body">
                        <figure class="card-img">
                            <img src="./images/Tyroid.jpg" alt="">
                        </figure>
                        <h5 class=" service-card-title">Thyroid Disorders & Thyroid Cancer</h5>
                        <p class="service-card-text">Dr. Gaw Gonzalo has over 20 years of experience in taking care of patients with different types of thyroid problems. She will work with you to get your thyroid hormone levels in balance. </p>
                    </div>
                </div>
                </a>
            </div>
              <div class="col-lg-4 col-md-6 col-12 service-feature-cards">
                <a href="{{ route('pcos') }}">
                <div class="card  service-card" onclick="goToSlide(3)">
                  <div class="card-body service-card-body">
                    <figure class="card-img">
                        <img src="./images/Polycystic.png" alt="">
                    </figure>
                    <h5 class=" service-card-title">Polycystic Ovary Syndrome(PCOS)</h5>
                    <p class="service-card-text">PCOS includes symptoms of irregular menstrual periods, excess facial and body hair, weight problems, insulin resistance syndrome and infertility.</p>
                </div>
                </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-12 service-feature-cards">
                <a href="{{ route('ostoporosis') }}">
                <div class="card  service-card" onclick="goToSlide(4)">
                  <div class="card-body service-card-body">
                    <figure class="card-img">
                        <img src="./images/Osteoporosis.jpg" alt="">
                    </figure>
                    <h5 class="service-card-title">Osteoporosis & Parathyroid Disorders</h5>
                    <p class="service-card-text">We also provide care for Osteoporosis or decreased bone density/ bone thinning, fracture prevention and medical therapy.</p>
                </div>
                </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-12 service-feature-cards">
                <a href="{{ route('menopause') }}">
                <div class="card service-card" onclick="goToSlide(5)">
                  <div class="card-body service-card-body">
                    <figure class="card-img">
                        <img src="./images/Menopause.jpg" alt="">
                    </figure>
                    <h5 class="service-card-title">Menopause & Premature Menopause(POI)</h5>
                    <p class="service-card-text">Dr. Gaw Gonzalo understands the many signs and symptoms when women go through one of life’s major changes.</p>
                </div>
                </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-12 service-feature-cards">
                <a href="{{ route('pituitary') }}">
                <div class="card service-card" onclick="goToSlide(6)">
                  <div class="card-body service-card-body">
                    <figure class="card-img">
                        <img src="./images/Pitiuary.jpg" alt="">
                    </figure>
                <h5 class="service-card-title">Pituitary Disorders</h5>
                <p class="service-card-text">Dr. Gaw Gonzalo was trained at the UCLA Pituitary Clinic under the guidance of  pituitary endocrinologists and neurosurgeon.</p>
              </div>
                </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-12 service-feature-cards">
                <a href="{{ route('testostrone') }}">
                <div class="card service-card" onclick="goToSlide(7)">
                  <div class="card-body service-card-body">
                    <figure class="card-img">
                        <img src="./images/Testosrone.png" alt="">
                    </figure>
                <h5 class="service-card-title">Testosterone Therapy</h5>
                <p class="service-card-text">Dr. Gaw Gonzalo trained with world-renowned testosterone experts, Dr. Ronald Swerdloff and Dr. Christina Wang during her fellowship.</p>
              </div>
                </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-12 service-feature-cards">
                <a href="{{ route('transgender') }}">
                <div class="card service-card" onclick="goToSlide(8)">
                  <div class="card-body service-card-body">
                    <figure class="card-img">
                        <img src="./images/Transgender.jpg" alt="">
                    </figure>
                <h5 class="service-card-title">Transgender Therapy</h5>
                <p class="service-card-text">Although still considered new in the field of endocrinology, Dr. Gaw Gonzalo has been helping transgender and gender non-binary (TGNB) patients with hormone affirming therapy.</p>
              </div>
                </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-12 service-feature-cards">
                <a href="{{ route('adrenal') }}">
                <div class="card service-card" onclick="goToSlide(9)">
                  <div class="card-body service-card-body">
                    <figure class="card-img">
                        <img src="./images/Adrenal.jpg" alt="">
                    </figure>
                <h5 class="service-card-title">Adrenal Disorders</h5>
                <p class="service-card-text">Dr. Gaw Gonzalo also provides care for patients with the adrenal disorders like Adrenal Insufficiency/ Addison’s Disease,Hyperaldosteronism.</p>
              </div>
                </div>
                </a>
              </div>
        </div>
    </div>
</div>

@endsection
