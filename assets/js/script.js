let formBtn1 = document.querySelector('#login-btn');
let formBtn2 = document.querySelector('#signup-btn');
let formBtn3 = document.querySelector('#join-us');
let formBtn4 = document.querySelector('#Forgetpassowrd-link');
let loginForm = document.querySelector('.login-form-container');
let signupForm = document.querySelector('.signup-form-container');
let fpForm = document.querySelector('.Forgetpassowrd-form-container');
let formClose1 = document.querySelector('#form-close');
let formClose2 = document.querySelector('#form-close2');
let formClose3 = document.querySelector('#form-close3');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let videoBtn = document.querySelectorAll('.vid-btn');



//If you scroll down on the menu or login page, the page will be
// removed and you will be redirected to the home page.
window.onscroll = () => {
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
        loginForm.classList.remove('active');
        fpForm.classList.remove('active');

    }
    // on a mobile device When you click on the side button,
    //  the mnue becomes active.
menu.addEventListener('click', () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});
//sign-in button that opens the pop-up sign-in page.
formBtn1.addEventListener('click', () => {
    loginForm.classList.add('active');

});
//if you do not have an account 
// this sign-up link will takes you 
// to the sign-up page.

formBtn2.addEventListener('click', () => {
    signupForm.classList.add('active');

});
//The join-us button takes you to the sign-in page in a pop-up window.

formBtn3.addEventListener('click', () => {
    loginForm.classList.add('active');

});
//Forget passowrd link takes you to the rest password page in a pop-up window.

formBtn4.addEventListener('click', () => {
    fpForm.classList.add('active');

});
// X close button for the sign-up

formClose1.addEventListener('click', () => {
    signupForm.classList.remove('active');
    loginForm.classList.remove('active');


});
// X close button button for the sign-in

formClose2.addEventListener('click', () => {
    loginForm.classList.remove('active');

});
// X close button button for the Forget passowrd

formClose3.addEventListener('click', () => {
    loginForm.classList.remove('active');
    fpForm.classList.remove('active');

});

// video slider button
videoBtn.forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelector('.slider .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});
// reviews slider button

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});