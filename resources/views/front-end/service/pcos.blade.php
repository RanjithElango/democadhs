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
                  src="./images/Polycystic.png"
                  alt="image gallery"
                  class="gallery__img"
                />  </div>
                <div class="col-lg-8 gallery-text">
                  <h1 class="gallery-text-title">
                  POLYCYSTIC OVARY SYNDROME (PCOS)
                </h1>
                  <p class="gallery-text-content">
                    PCOS includes symptoms of irregular menstrual periods, excess facial and body hair, weight problems, insulin resistance syndrome and infertility. Dr. Gaw Gonzalo sees patients from teenagers to adults. She helps patient reduce insulin resistance and modify their risk factors to prevent diabetes, high blood pressure and high cholesterol that may occur with PCOS.
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
