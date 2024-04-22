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
                  src="./images/Tyroid.jpg"
                  alt="image gallery"
                  class="gallery__img"
                />  </div>
                <div class="col-lg-8 gallery-text">
                  <h1 class="gallery-text-title">
                  THYROID DISORDERS
                </h1>
                  <p class="gallery-text-content">
                  Dr. Gaw Gonzalo has over 20 years of experience in taking care of patients with different types of thyroid problems. She will work with you to get your thyroid hormone levels in balance. She treats patient with hypothyroidism/ Hashimoto’s thyroiditis (underactive thyroid) and hyperthyroidism/Graves’ disease (overactive thyroid).
                </p>
                <h1 class="gallery-text-title">
                  CANCER
                </h1>
                  <p class="gallery-text-content">
                  Dr. Gaw Gonzalo was staff physician at City of Hope National Medical Center in Duarte, California prior to opening her own private practice. She did research in Thyroid cancer research while at City of Hope.   She worked closely with radiation oncologist in the use of radioactive iodine  for treatment of thyroid cancer.
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
