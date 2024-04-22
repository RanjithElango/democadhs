@extends('layout.layout')
@section('title', 'Services - ')
@section('content')

    <div class="container">
      <div class="gallery">
        <div class="swiper gallery-cards">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <article class="gallery__card">
                <div class="row">
                    <div class="col-lg-4 gallery__item">
                <img
                    src="./images/Transgender.jpg"
                    alt="image gallery"
                    class="gallery__img"
                />  </div>
                <div class="col-lg-8 gallery-text">
                    <h1 class="gallery-text-title">
                    TRANSGENDER THERAPY
                </h1>
                    <p class="gallery-text-content">
                    Although still considered new in the field of endocrinology, Dr. Gaw Gonzalo has been helping transgender and gender non-binary (TGNB) patients with hormone affirming therapy.  She will customize each patients’ masculinizing or feminizing hormone therapy, prepare and guide patients who wants to pursue gender affirming surgery.
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
