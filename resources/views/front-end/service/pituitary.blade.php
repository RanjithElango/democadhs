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
                src="./images/Pitiuary.jpg"
                alt="image gallery"
                class="gallery__img"
              />  </div>
              <div class="col-lg-8 gallery-text">
                <h1 class="gallery-text-title">
                PITUITARY DISORDERS
              </h1>
                <p class="gallery-text-content">
                  Dr. Gaw Gonzalo was trained at the UCLA Pituitary Clinic under the guidance of  pituitary endocrinologists and neurosurgeon. She did an elective fellowship at Stanford University Pituitary Clinic. While in training, she did research in pituitary disorders and brain trauma. She also did clinical research in Klinefelter’s syndrome (XXY) in children and adults. She treats patient with hypopituitarism, hyperprolactinemia, pituitary tumors and empty sella syndrome and other rare pituitary disorders such as hypophysitis, diabetes insipidus.
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
