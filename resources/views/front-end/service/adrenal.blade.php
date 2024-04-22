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
                src="./images/Adrenal.jpg"
                alt="image gallery"
                class="gallery__img"
              />  </div>
              <div class="col-lg-8 gallery-text">
                <h1 class="gallery-text-title">
                ADRENAL DISORDERS
              </h1>
                <p class="gallery-text-content">
                  Dr. Gaw Gonzalo also provides care for patients with the following adrenal disorders:
                  <ul>
                    <li><span>Adrenal Insufficiency/ Addison’s Disease</span></li>
                    <li><span>Hyperaldosteronism</span></li>
                    <li><span>Adrenal Tumors/nodules/
                      Incidentalomas</span></li>
                    <li><span>Pheochromocytoma</span></li>
                    <li><span>Cushing’s Syndrome/ Cushing’s Disease</span></li>
                </ul>
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
