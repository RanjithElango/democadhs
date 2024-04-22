@extends('layout.layout')
@section('title', 'Services - ')
@section('content')

    <div class="container">
      <div class="gallery">
        <!--SWIPER GALLERY CARDS-->
        <div class="swiper gallery-cards">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <article class="gallery__card">
                  <div class="row">
                  <div class="col-lg-4 gallery__item">
                      <img
                      src="./images/Diabetics.png"
                      class="gallery__img"
                    />
                  </div>
                  <div class="col-lg-8 gallery-text">
                    <h1 class="gallery-text-title">
                      DIABETES MELLITUS
                    </h1>
                      <p class="gallery-text-content">
                          Our outpatient clinic offers consultation, follow up and state of the art diabetes technology including real time continuous glucose monitoring (CGM) and sensors that can be bluetooth to your smart phones. We work with insulin pump companies to provide patients with the latest in insulin pump and artificial pancreas technology.   Our staff are highly skilled in training patients on the use of continuous glucose monitoring and sensors, downloading CGM/sensor and insulin pump data. Our office is able to gather data from CGM and insulin pump without the patient being physically in the office.

                          In our clinic, Dr. Gaw Gonzalo will work with you to make sure your diabetes is under control and provide guidance on diet, exercise and prevention of complications related to diabetes. We will review and modify risk factors to prevent diabetes complications.
                        </p>
                      <h1 class="gallery-text-title">
                        PRE-DIABETES
                      </h1>
                        <p class="gallery-text-content">
                          We are also very proactive on diabetes prevention, especially in patients who have family history of diabetes, are high risk for diabetes, have pre-diabetes and gestational diabetes.
                        </p>
                      <h1 class="gallery-text-title">
                        WEIGHT MANAGEMENT
                      </h1>
                        <p class="gallery-text-content">
                          Dr. Gaw Gonzalo previously managed  the weight loss clinic at City of Hope prior to opening her own practice.  Our clinic offers oral and injectable medical therapy for weight management coupled with dietary counseling.  She will also help patients prevent and reduce risks related to obesity.
                          </p>
                        <h1 class="gallery-text-title">
                          HYPERLIPIDEMIA/ HIGH CHOLESTEROL AND TRIGLYCERIDES
                        </h1>
                          <p class="gallery-text-content">
                            One of the most common disorders, Dr. Gaw Gonzalo provides dietary counseling and cardiovascular risk assessments.  Treatment includes oral and injectable medication.
                            </p>
                    </div>
              </div>
                <div class="gallery__data">
                  <h3 class="gallery__title"></h3>
                </div>
              </article>
            </div>


          </div>
        </div>

      </div>
    </div>

    @endsection
