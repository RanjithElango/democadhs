@extends('layout.layout')
@section('title', 'RX Refill - ')
@section('content')

<style>
    .swiper-button-next:after,.swiper-button-prev:after{
     display: none;
    }
    </style>

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
        <!--SWIPER GALLERY THUMBNAIL-->
        <div class="gallery__overflow">
          <div class="swiper gallery-thumbs">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="gallery__thumbnail">
                  <img src="./images/Diabetics.png" alt="image gallery" class="gallery__thumbnail-img"/>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="gallery__thumbnail">
                  <img src="./images/Tyroid.jpg" alt="image gallery" class="gallery__thumbnail-img" />
                </div>
              </div>

              <div class="swiper-slide">
                <div class="gallery__thumbnail">
                  <img
                  src="./images/Polycystic.png"
                    alt="image thumbnail"
                    class="gallery__thumbnail-img"
                  />
                </div>
              </div>

              <div class="swiper-slide">
                <div class="gallery__thumbnail">
                  <img
                  src="./images/Osteoporosis.jpg"
                    alt="image gallery"
                    alt="image thumbnail"
                    class="gallery__thumbnail-img"
                  />
                </div>
              </div>

              <div class="swiper-slide">
                <div class="gallery__thumbnail">
                  <img
                  src="./images/Menopause.jpg"
                    alt="image thumbnail"
                    class="gallery__thumbnail-img"
                  />
                </div>
              </div>

              <div class="swiper-slide">
                  <div class="gallery__thumbnail">
                    <img
                    src="./images/Pitiuary.jpg"
                      alt="image thumbnail"
                      class="gallery__thumbnail-img"
                    />
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="gallery__thumbnail">
                    <img
                    src="./images/Testosrone.png"
                      alt="image thumbnail"
                      class="gallery__thumbnail-img"
                    />
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="gallery__thumbnail">
                    <img
                    src="./images/Transgender.jpg"
                      alt="image thumbnail"
                      class="gallery__thumbnail-img"
                    />
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="gallery__thumbnail">
                    <img
                    src="./images/Adrenal.jpg"
                      alt="image thumbnail"
                      class="gallery__thumbnail-img"
                    />
                  </div>
                </div>
            </div>

            <!-- Swiper pagination -->
            <!-- <div class="swiper-pagination"></div> -->
          </div>
          <!-- Swiper arrows -->
            <div class="swiper-button-next">
              <i class="ri-arrow-right-line"></i>
            </div>
            <div class="swiper-button-prev">
              <i class="ri-arrow-left-line"></i>
            </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

@endsection
