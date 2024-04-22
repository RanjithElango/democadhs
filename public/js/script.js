     //Calendar
     document.addEventListener("DOMContentLoaded", function () {
        flatpickr(".date", {
            dateFormat: "d-m-Y",
            allowInput: true,
        });
    });

   //select2 dropdown
   $(document).ready(function () {
        $(".select2").select2();
    });
    $(document).ready(function() {
      $('#categories').select2();
    });

    //AOS
    AOS.init();

    //Slider
    $(document).ready(function(){
        $('#gallery').slick({
          slidesToShow: 5,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1000, // set a reasonable speed
          speed: 800,
          pauseOnHover: false,
          cssEase: 'linear',
          variableWidth:true,
          infinite: true,
          responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 426,
                settings: {
                    slidesToShow: 2,
                variableWidth:true,
                }
            }
                ]
        });
      });

      $('.slider-container').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      dots: true,
      centerMode: true,
      centerPadding: '0',
      responsive: [
          {
              breakpoint: 992,
              settings: {
                  slidesToShow: 2,
              }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '0',
                }
            }
        ]
    });

    $('.slider-container').on('init reInit afterChange', function(event, slick, currentSlide) {
        var $dots = $('.slick-dots li');
        var dotCount = 3; // Always show 3 dots
        var activeIndex = currentSlide % dotCount;
        $dots.removeClass('slick-active');
        $dots.eq(activeIndex).addClass('slick-active');
    });

        //Map
        // Viewport of the map based on lat and long
        var map = L.map('map',{ attributionControl:false,zoomControl: false }).setView([34.140, -118.105], 11);

        //themelayers
        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            maxZoom: 19,
        }).addTo(map);

        // Custom Marker Icon
        var customIcon = L.icon({
            iconUrl: 'https://cdn-icons-png.flaticon.com/512/447/447031.png',
            iconSize: [40, 40],
        });

        // Place marker in Arcadia
        L.marker([34.1391, -118.0261],{icon: customIcon}).addTo(map)
            .bindPopup('228,East Foothill Blvd Arcadia,CA');



        $(document).ready(function() {
          $('.custom-toggler').click(function() {
            $(this).toggleClass('open');
            $('.navbar-collapse').toggleClass('open');
            $('body').toggleClass('no-scroll');
          });
        });

      //support-page-links
        const lis = document.querySelectorAll('#links li');

        lis.forEach(li => {
            li.addEventListener('mouseenter', function() {
                // Hide other lis
                lis.forEach(otherLi => {
                    if (otherLi !== li) {
                        otherLi.classList.add('hidden');
                    }
                });
            });

            li.addEventListener('mouseleave', function() {
                // Show all lis
                lis.forEach(otherLi => {
                    otherLi.classList.remove('hidden');
                });
            });
        });

/*=============== SWIPER JS GALLERY ===============*/
document.addEventListener('DOMContentLoaded', function () {
    let urlParams = new URLSearchParams(window.location.search);
    let slideIndex = urlParams.get('slide');

    let swiperCardsOptions = {
        loop: true,
        loopedSlides: 9, // Adjust this number to match the total number of slides
        cssMode: true,
        effect: "fade",
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    };

    let swiperThumbsOptions = {
        loop: true,
        loopedSlides: 9, // Adjust this number to match the total number of slides
        slidesPerView: 3,
        centeredSlides: true,
        slideToClickedSlide: true,
    };

    let swiperCards = new Swiper(".gallery-cards", swiperCardsOptions);
    let swiperThumbs = new Swiper(".gallery-thumbs", swiperThumbsOptions);

    swiperThumbs.controller.control = swiperCards;
    swiperCards.controller.control = swiperThumbs;

    if (slideIndex) {
        swiperCards.slideTo(parseInt(slideIndex) - 1);
        swiperThumbs.slideTo(parseInt(slideIndex) - 1);
    }
});

function goToSlide(slideIndex) {
    window.location.href = 'speciality-services-page.html?slide=' + slideIndex;
}

//password-toggle
function togglePasswordVisibility(inputId) {
    var passwordInput = document.getElementById(inputId);
    var toggleIcon = passwordInput.parentElement.querySelector(".toggle-password i");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    }
}
//forms-appointment-page
document.getElementById("checkCodeButton").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("checkCodeDetails").style.display = "block";
    document.getElementById("appointmentDetails").style.display = "none";
    document.getElementById("checkCodeButton").style.display = "none";
    document.getElementById("selectAppointmentButton").style.display = "block";
});

document.getElementById("selectAppointmentButton").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("checkCodeDetails").style.display = "none";
    document.getElementById("appointmentDetails").style.display = "block";
    document.getElementById("checkCodeButton").style.display = "block";
    document.getElementById("selectAppointmentButton").style.display = "none";
});
//code&mail
function showCheckByCode(element) {
    document.getElementById('checkByCode').style.display = 'block';
    document.getElementById('checkByMail').style.display = 'none';
    document.querySelector('.code-balance-title.active').classList.remove('active');
    element.classList.add('active');
}

function showCheckByMail(element) {
    document.getElementById('checkByCode').style.display = 'none';
    document.getElementById('checkByMail').style.display = 'block';
    document.querySelector('.code-balance-title.active').classList.remove('active');
    element.classList.add('active');
}
//calendar
function showCalendar() {
    document.getElementById('appointmentDetails').style.display = 'none';
    document.getElementById('calendarDetails').style.display = 'block';
}

function goBack() {
    document.getElementById('calendarDetails').style.display = 'none';
    document.getElementById('appointmentDetails').style.display = 'block';
}

// Get input elements
const codeInput = document.getElementById('code');
const emailInput = document.getElementById('email');
const codeSubmitButton = document.getElementById('codeSubmitButton');
const emailSubmitButton = document.getElementById('emailSubmitButton');

// Add event listeners to inputs
codeInput.addEventListener('input', toggleCodeSubmitButton);
emailInput.addEventListener('input', toggleEmailSubmitButton);

// Function to toggle code submit button visibility
function toggleCodeSubmitButton() {
    // Show code submit button if code input has value, hide otherwise
    if (codeInput.value.trim() !== '') {
        codeSubmitButton.style.display = 'block';
    } else {
        codeSubmitButton.style.display = 'none';
    }
}
// Function to toggle email submit button visibility
function toggleEmailSubmitButton() {
    if (emailInput.value.trim() !== '') {
        emailSubmitButton.style.display = 'block';
    } else {
        emailSubmitButton.style.display = 'none';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var dropdownMenu = document.querySelector('.dropdown-menu');
    var arrowIcon = document.querySelector('.arrow-icon');

    dropdownMenu.addEventListener('show.bs.dropdown', function () {
        arrowIcon.classList.add('rotate-up');
    });

    dropdownMenu.addEventListener('hide.bs.dropdown', function () {
        arrowIcon.classList.remove('rotate-up');
    });
});

//validations
function validateLoginForm() {
    var email = document.getElementById('login_email_address').value;
    var password = document.getElementById('login_password').value;
    var emailError = document.getElementById('login_emailError');
    var passwordError = document.getElementById('login_passwordError');
    var isValid = true;

    // Reset previous error messages
    emailError.innerHTML = '';
    passwordError.innerHTML = '';

    if (email.trim() === '') {
        emailError.innerHTML = 'Please enter your email';
        isValid = false;
    }

    if (password.trim() === '') {
        passwordError.innerHTML = 'Please enter your password';
        isValid = false;
    }

    return isValid;
}


function togglePasswordVisibility(inputId) {
    var passwordInput = document.getElementById(inputId);
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}

//dropdown
function openDropdown() {
    document.getElementById("dropdownMenu").style.display = "block";
}

function closeDropdown() {
    document.getElementById("dropdownMenu").style.display = "none";
}
//arrow-rotate
function openDropdown() {
    document.getElementById("dropdownMenu").style.display = "block";
    document.getElementById("dropdownArrow").classList.add("rotate");
}

function closeDropdown() {
    document.getElementById("dropdownMenu").style.display = "none";
    document.getElementById("dropdownArrow").classList.remove("rotate");
}

 // Function to validate the contact form
 function validateContactForm() {
    var firstname = document.getElementById('fullName').value;
    var lastname = document.getElementById('lastName').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('messages').value;
    var firstError = document.getElementById('frstnameError');
    var lastError = document.getElementById('lstnameError');
    var emailError = document.getElementById('mailError');
    var passwordError = document.getElementById('psswordError');
    var isValid = true;

    // Reset previous error messages
    firstError.innerHTML = '';
    lastError.innerHTML = '';
    emailError.innerHTML = '';
    passwordError.innerHTML = '';

    if (firstname.trim() === '') {
        firstError.innerHTML = 'Please enter your First Name';
        isValid = false;
    }

    if (lastname.trim() === '') {
        lastError.innerHTML = 'Please enter your Last Name';
        isValid = false;
    }

    if (email.trim() === '') {
        emailError.innerHTML = 'Please enter your email';
        isValid = false;
    }

    if (password.trim() === '') {
        passwordError.innerHTML = 'Please enter your Message';
        isValid = false;
    }

    return isValid;
}

// Event listeners to remove error messages when typing
document.getElementById('fullName').addEventListener('input', function() {
    document.getElementById('frstnameError').innerHTML = '';
});

document.getElementById('lastName').addEventListener('input', function() {
    document.getElementById('lstnameError').innerHTML = '';
});

document.getElementById('email').addEventListener('input', function() {
    document.getElementById('mailError').innerHTML = '';
});

document.getElementById('messages').addEventListener('input', function() {
    document.getElementById('psswordError').innerHTML = '';
});
