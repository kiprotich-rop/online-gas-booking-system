// getting the button

const togglebtn = document.querySelector(".toggle .bar");

togglebtn.addEventListener("click", function(){

    const divHide = document.querySelector(".navigation");
    
    if(divHide.style.display == "none"){

        divHide.style.display = "block";
        document.querySelector(".toggle .close").style.display = "block";
        togglebtn.style.display = "none";

    }else{

        document.querySelector(".toggle .close").style.display = "none";
        divHide.style.display = "none";
        
    }
   
})

const close = document.querySelector(".toggle .close");

close.addEventListener("click", function(){

    const divHide = document.querySelector(".navigation");

    if(divHide.style.display == "block"){

        divHide.style.display = "none";
        close.style.display = "none";
        togglebtn.style.display = "block";

    }
})

// search container
const btnSearch = document.querySelector("#searchShow");
const divSeach = document.querySelector("#searchCont");

btnSearch.addEventListener("click", function(e){
    e.preventDefault();

    if(divSeach.style.display == "none"){

        btnSearch.style.color = "green";
        divSeach.style.display = "block";

    }else{
        
        divSeach.style.display = "none";
        btnSearch.style.color = "black";
        
    }
})
// close search
document.getElementById("closesearch").addEventListener("click", function(){

    document.querySelector("#searchCont").style.display = "none";

})

// home page slider
const sliderImage = document.getElementById("image-slider");
const sliderText = document.getElementById("text-slider");
const sliderLink = document.getElementById("link");

// json for holding dynamic values
const sliderContent = [
    {
        id: 1,
        image: "img/slider4.jpg",
        text: "We refill and deliver the gas cylinder with the best price.", 
        link: "services.php",
    },
    {
        id: 2,
        image: "img/gas-booking-500x500.jpg",
        text: " Book your refill cylinder at anytime, from anywhere, when you are on the move, on a holiday or at home.", 
        link: "services.php",
    },
    {
        id: 3,
        image: "img/slider5.png",
        text: "We deliver your cylinder with minimum time possible.", 
        link: "services.php",
    },
    {
        id: 4,
        image: "img/blog-inside-post.jpg",
        text: "Our team work together to solve your problems in technology.",
        link: "services.php",
    },
];

// next counter means next screen slide content/ same as counter id
let changeSlider = 0;

// auto-window load events
window.addEventListener("DOMContentLoaded", function(){

    showNectSlide();
    
})

// function that displays next slide
function showNectSlide(){

    const currentIdDisplay = sliderContent[changeSlider];

    sliderImage.src = currentIdDisplay.image;

    sliderText.textContent = currentIdDisplay.text;

    sliderLink.setAttribute("href", currentIdDisplay.link);

    sliderImage.classList.add('animate');
    
}

// setting link auto-refreshing
setInterval(function(){

    changeSlider++;

    if(changeSlider > sliderContent.length - 1){

        changeSlider = 0;
    }

    showNectSlide();

}, 5000)
