    //HEADER RESPONSIVE NAVBAR//
        window.onload = function () {
            window.addEventListener('scroll', function (e) {
                if (window.pageYOffset > 10) { //100//
                    document.querySelector("header").classList.add('is-scrolling');
                } else {
                    document.querySelector("header").classList.remove('is-scrolling');
                }
            });

            const menu_btn = document.querySelector('.hamburger');
            const mobile_menu = document.querySelector('.mobile-nav');

            menu_btn.addEventListener('click', function () {
                menu_btn.classList.toggle('is-active');
                mobile_menu.classList.toggle('is-active');
            });
        }


//SKILLS || Makes the images in the slider infinite

// Get the slide track element
const slideTrack = document.querySelector(".slide-track");

// Duplicate the slides to create an infinite loop
slideTrack.innerHTML += slideTrack.innerHTML;

// Calculate the width of a single slide
const slideWidth = slideTrack.querySelector(".slide").offsetWidth;

// Set the width of the slide track to accommodate all slides
slideTrack.style.width = slideWidth * slideTrack.childElementCount + "px";
