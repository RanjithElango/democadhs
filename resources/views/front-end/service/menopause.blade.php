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
                src="./images/Menopause.jpg"
                alt="image gallery"
                class="gallery__img"
              />  </div>
              <div class="col-lg-8 gallery-text">
                <h1 class="gallery-text-title">
                MENOPAUSE
              </h1>
                <p class="gallery-text-content">
                Dr. Gaw Gonzalo understands the many signs and symptoms when women go through one of life’s major changes. She uses hormonal and non-hormonal therapy in the treatment of symptoms related to menopause.
              </p>
                <h1 class="gallery-text-title">
                PREMATURE MENOPAUSE / PRIMARY OVARIAN INSUFFICIENCY (POI)
              </h1>
                <p class="gallery-text-content">
                This devastating diagnosis occurs in 5% of women before age 40 to 45, usually presents with hot flashes and menstrual irregularities. Diagnosis is usually delayed by one to as much as 5 years.  Causes includes chromosomal abnormalities, autoimmune, ovarian toxins such as chemotherapy agents, and certain genetic mutations.
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
