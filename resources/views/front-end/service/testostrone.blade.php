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
                src="./images/Testosrone.png"
                alt="image gallery"
                class="gallery__img"
              />  </div>
              <div class="col-lg-8 gallery-text">
                <h1 class="gallery-text-title">
                TESTOSTERONE / MALE HORMONE DEFICIENCY
              </h1>
                <p class="gallery-text-content">
                Dr. Gaw Gonzalo trained with world-renowned testosterone experts, Dr. Ronald Swerdloff and Dr. Christina Wang during her fellowship. She did clinical research in testosterone gel and male contraception.  She is well experienced in testosterone gel therapy and other forms of testosterone treatment. She is careful with balancing testosterone therapy and preventing/ minimizing side effects of testosterone therapy.
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
