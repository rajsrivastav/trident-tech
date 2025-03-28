let animation = document.getElementsByClassName('img-animate')[0];
if (animation) {
    animation.addEventListener('click', function() {
        gsap.to(".getaquote-heading", { width: "50%", duration: 1 });
        gsap.to("span.letter", { xPercent: -10, duration: 1 });
        gsap.to(".getaquote-form", { width: "50%", display: "block", duration: 1});

    });
}
let closeForm = document.getElementsByClassName('closeBtn')[0];
if(closeForm){
    closeForm.addEventListener('click', function(){
        gsap.to(".getaquote-heading", { width: "100%", duration: 1 });
        gsap.to("span.letter", { xPercent: 0, duration: 1 });
        gsap.to(".getaquote-form", { width: "0%", display: "none", duration: 1});
    });

}

gsap.registerPlugin(ScrollTrigger);
gsap.to('span.letter', {
    x: 0, // Moves the text to the right
    duration: 1.5,
    ease: "power2.out",
    scrollTrigger: {
        trigger: ".getaquote", // Element that triggers the animation
        start: "top center", // Start animation when the element enters the viewport
        scrub: false, // Smooth scrolling effect,
    }
});

//Swiper script
var swiper = new Swiper('.swiper-container', {
    loop: true,
    autoplay: {
        delay: 2000, // Adjust speed (2 seconds)
        disableOnInteraction: false
    },
    speed: 1000, // Adjust transition speed
});

//huggl image moving animation
document.querySelectorAll('.hover-h2').forEach((element) => {
    element.addEventListener('mouseenter', function () {
        let img = document.querySelector('.huggl-img'); 
        if (img) {
            let rect = this.getBoundingClientRect();
            let parentRect = img.parentElement.getBoundingClientRect(); 
            
            gsap.to(img, { 
                top: rect.top + rect.height / 2 - (parentRect.top + img.clientHeight  / 2) + "px",
                duration: 1, 
                ease: "power1.out(2)" 
            });
        }
    });
});
// achivement section image rotation
gsap.to("#animate-img", { 
    rotation: 360, 
    duration: 10, 
    repeat: -1, // Infinite loop
    ease: "linear",
    scrollTrigger: {
        trigger: ".achivements", 
        start: "top center",
        scrub: false, 
    }
});

//marquee effect on service heading
document.querySelectorAll(".service").forEach((element) => {
    let marqueeText = element.querySelector(".marquee"); 
    element.addEventListener("mouseenter", function(){
        gsap.killTweensOf(marqueeText); // Stop any ongoing animation
        gsap.to(marqueeText, {  
            x: "-100%", 
            left: 0,
            duration: 10, 
            ease: "linear",
            repeat: -1
        });
    });

    element.addEventListener("mouseleave", function(){
        gsap.killTweensOf(marqueeText); // Stop any ongoing animation before resetting
        gsap.set(marqueeText, { x: "0%"});
        gsap.to(marqueeText, { 
            x: "0%", 
            duration: 5,
            ease: "power2.out"
        });
    });
});
// banner video scrolling effects
gsap.to(".b-video", {
    width: "100vw",
    height: "100vh", 
    left: "0%",
    borderRadius: "0%",
    scrollTrigger: {
        trigger: ".banner",
        start: "top",
        left: "bottom",
        scrub: 1, 
        pin: true, 
    }
});

//logos script     
    gsap.to(".logos img", {
        x: "-20px",
        duration: 1,
        ease: "power1.inOut",
    scrollTrigger: {
        trigger: ".logo-section",
        start: "top bottom 10%",
        scrub: 1
    }
})

// Naviation js

$(document).ready(function(){
    $("#menu").click(function(){
        $("#myNav").slideToggle(); // Toggles the display (show/hide)
    });
    $("#closeBtn").click(function(){
        $("#myNav").slideToggle(); // Toggles the display (show/hide)
    });
});

// Window screen loader
$(window).ready(function() {
    var width = 0;
    var interval = setInterval(function() {
        if (width >= 25) {
            clearInterval(interval);
            $(".loadingScreen").fadeOut(); // Hide loading screen
        } else {
            width++;
            $("#myBar").css("width", width + "%");
        }
    }, 50);
});

//body curser js
document.addEventListener("DOMContentLoaded", () => {
    const cursorBig = document.querySelector(".cursor__ball--big");
    const cursorSmall = document.querySelector(".cursor__ball--small");

    document.addEventListener("mousemove", (e) => {
        gsap.to(cursorBig, {
            x: e.clientX,
            y: e.clientY,
            duration: 0.5,
            ease: "power2.out"
        });

        gsap.to(cursorSmall, {
            x: e.clientX,
            y: e.clientY,
            duration: 0.1,
            ease: "power2.out"
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    let textElement = document.querySelector(".one");
    let text = textElement.textContent;
    textElement.innerHTML = ""; // Clear the existing text

    // Split text into characters and wrap them in spans
    text.split("").forEach(char => {
        let span = document.createElement("span");
        span.textContent = char;
        span.classList.add("char");
        textElement.appendChild(span);
    });

    let chars = document.querySelectorAll(".char"); // Select all characters

    let action = gsap.timeline();
    action.from(chars, {
        opacity: 0,
        scale: 0,
        top: -80,
        stagger: 0.05,
        ease: "ease.out(2)"
    });
    action.to(".swiper", {
        opacity: 1,
        ease: "ease.out(2)"
    })

});
