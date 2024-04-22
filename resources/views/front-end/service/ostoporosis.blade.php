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
                src="./images/Osteoporosis.jpg"
                alt="image gallery"
                class="gallery__img"
              />  </div>
              <div class="col-lg-8 gallery-text">
                <h1 class="gallery-text-title">
                OSTEOPOROSIS
              </h1>
                <p class="gallery-text-content">
                We also provide care for Osteoporosis or decreased bone density/ bone thinning, fracture prevention and medical therapy. Dr. Gaw Gonzalo did a fellowship with Dr. John Bilezikian at Columbia University in New York on Osteoporosis.  Medical therapy includes prescription oral medication and injectable therapy.  Dr. Gaw Gonzalo will review your bone density study (DEXA scan) in detail and assess your fracture risks based on the FRAX score (developed by the World Health Organization).
              </p>
                <h1 class="gallery-text-title">
                PARATHYROID DISORDERS/ HIGH BLOOD CALCIUM
              </h1>
                <p class="gallery-text-content">
                Parathyroid gland disorder frequently occurs after menopause but may also occur in men. This disorder usually presents with high blood calcium and high parathyroid hormone level with bone thinning, especially of the hip.  Some patients may experience joint pains, gastritis-like symptoms and kidney stones.
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
