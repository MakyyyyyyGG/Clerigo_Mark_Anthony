/* <!--------------------------------------------- NAV  TOGGLE ------------------------------------------------------>*/

    const menuToggle = document.getElementById("toggle");
    const menuIcon = document.querySelector(".menu-toggle i");
    menuToggle.addEventListener("click", function() {
        if (menuToggle.checked) {
            menuIcon.classList.remove("fa-bars");
            menuIcon.classList.add("fa-times");
        } else {
            menuIcon.classList.remove("fa-times");
            menuIcon.classList.add("fa-bars");
        }
    });

/*<!---------------------------------------- PROJECTS IN PAGES TAB --------------------------------------->*/

    var content1 = document.getElementById("content1");
    var content2 = document.getElementById("content2");
    var content3 = document.getElementById("content3");
    var content4 = document.getElementById("content4");
    var btn1 = document.getElementById("btn1");
    var btn2 = document.getElementById("btn2");
    var btn3 = document.getElementById("btn3");
    var btn4 = document.getElementById("btn4");

    function openHTML(){
        content1.style.transform = "translateX(0)";
        content2.style.transform = "translateX(100%)"
        content3.style.transform = "translateX(100%)";
        content4.style.transform = "translateX(100%)";

        btn1.style.backgroundColor = "white";
        btn1.style.color = "black";
        btn2.style.backgroundColor = "transparent";
        btn2.style.color = "white";
        btn3.style.backgroundColor = "transparent";
        btn3.style.color = "white";
        btn4.style.backgroundColor = "transparent";
        btn4.style.color = "white";
    }
    function openC(){
        content1.style.transform = "translateX(100%)";
        content2.style.transform = "translateX(0)"
        content3.style.transform = "translateX(100%)";
        content4.style.transform = "translateX(100%)";
        
        btn1.style.backgroundColor = "transparent";
        btn1.style.color = "white";
        btn2.style.backgroundColor = "white";
        btn2.style.color = "black";
        btn3.style.backgroundColor = "transparent";
        btn3.style.color = "white";
        btn4.style.backgroundColor = "transparent";
        btn4.style.color = "white";
    }
    function openJAVA(){
        content1.style.transform = "translateX(100%)";
        content2.style.transform = "translateX(100%)";
        content3.style.transform = "translateX(0)";
        content4.style.transform = "translateX(100%)";

        btn1.style.backgroundColor = "transparent";
        btn1.style.color = "white";
        btn2.style.backgroundColor = "transparent"
        btn2.style.color ="white"
        btn3.style.backgroundColor = "white";
        btn3.style.color = "black";
        btn4.style.backgroundColor = "transparent";
        btn4.style.color = "white";
    }
    function openWORDPRESS(){
        content1.style.transform = "translateX(100%)";
        content2.style.transform = "translateX(100%)";
        content3.style.transform = "translateX(100%)";
        content4.style.transform = "translateX(0)";

        btn1.style.backgroundColor = "transparent";
        btn1.style.color = "white";
        btn2.style.backgroundColor = "transparent"
        btn2.style.color ="white"
        btn3.style.backgroundColor = "transparent";
        btn3.style.color = "white";
        btn4.style.backgroundColor = "white";
        btn4.style.color = "black";
    }

/*<!---------------------------------------- SCROLL EFFECT --------------------------------------->*/

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if(entry.isIntersecting){
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});
const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe (el));

/*<!---------------------------------------- VIDEO PLAY/PAUSE BUTTON --------------------------------------->*/

function toggleVideo(videoId, buttonId) {
    var video = document.getElementById(videoId);
    var playBtn = document.getElementById(buttonId);
    
    if (video.paused) {
        video.play();
        playBtn.innerHTML = 'Pause Video';
        video.classList.add("playing");
    } else {
        video.pause();
        playBtn.innerHTML = 'Play Video';
        video.classList.remove("playing");
    }
}