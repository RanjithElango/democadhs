@extends('layout.layout')
@section('title', 'Doctor - ')
@section('content')

<div data-aos="fade-right" data-aos-duration="800">
    <section class="doctor-section">
        <div class="container">
            <div class="doctor-details">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image-content">
                            <div class="doctor-image">
                            <img src="./images/Doctor_image.png">
                            </div>
                            <h1 class="doctor-name">DR. GAW GONZALO</h1>
                            <a href="{{ route('cv') }}"><button class="doctor-curriculum-btn">Curriculum Vitae</button></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="doctor-bio">
                            <div class="doctor-bio-content">
                            <p class="doctor-bio-content-text">
                                <!-- <span>Dr. Gaw Gonzalo,</span>  -->
                                Dr. Gaw Gonzalo,fondly called Dr. GG or Dr. Gaw or Dr. Irene, by her patients. She believes in the special personal relationship that exists between the doctor and her patient. She believes firmly in making a difference in your health and ultimately delivering the best quality medical care everyone deserves. Dr. Gaw Gonzalo is affiliated with Methodist Hospital of Southern California in Arcadia.
                            </p>
                            <p>
                                Dr. Gaw Gonzalo received her medical degree at the University of Santo Tomas, Manila, Philippines in 1992. She did three years of residency training in Internal Medicine at the John A. Burns School of Medicine, University of Hawaii, Honolulu, Hawaii. She then went on to pursue further three years of fellowship training in Endocrinology at Harbor-UCLA Medical Center, Torrance, California. She spent part of her fellowship training doing clinical research work in the following areas: pituitary disorders after head injury, Klinefelter syndrome, male contraception, clinical trials on testosterone gel. As a result of her dedication to research, she was awarded the Richard E. Weitzman Memorial Award for Excellence in Clinical Research in 2001. Dr. Gaw Gonzalo served a three and a half year tenure at the City of Hope National Medical Center as staff physician of the Department of Diabetes, Endocrinology & Metabolism. While at City of Hope, she did clinical research in thyroid cancer and developed practice guidelines for management of endocrine problems after bone marrow transplantation.
                            </p>
                            <p>
                                Dr. Gaw Gonzalo was born in Manila, Philippines and is of Chinese descent, she was raised under the influence of Chinese cultures and traditions. She is fluent both written and spoken in English, Mandarin, Taiwanese, Fu-kien and Tagalog (Filipino). She has twin boys who are avid baseball players. Her twin boys play travel ball all year round. If she is not in her clinic, you will sure to find her in one of the baseball fields in California or out of state. She also enjoys baking with her boys and spending time with family and friends.
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
