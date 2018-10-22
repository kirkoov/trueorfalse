// https://stackoverflow.com/questions/4528085/toggle-show-hide-div-with-button#4528100

const toggle  = document.getElementById("info");
const content = document.getElementById("intro");
const navbar = document.getElementById("navbar");
let sticky = navbar.offsetTop;

toggle.addEventListener("click", function() {
  content.style.display = (content.dataset.toggled ^= 1) ? "block" : "none";
});

// Sticky Header
$(window).scroll(function() {
    if ($(window).scrollTop() > 100) {
        $('.main_h').addClass('sticky');
    } else {
        $('.main_h').removeClass('sticky');
    }
});

// Mobile Navigation
$('.mobile-toggle').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.main_h').removeClass('open-nav');
    } else {
        $('.main_h').addClass('open-nav');
    }
});

$('.main_h li a').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.main_h').removeClass('open-nav');
    }
});

// navigation scroll lijepo radi materem
$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});

// const torfit_btn = document.getElementById("torfit");
// torfit_btn.disabled = true;


// // begin make menu sticky
// window.onscroll = function() {pageOffsetter()};

// function pageOffsetter() {
//   if (window.pageYOffset >= sticky) {

//   	if(navbar.className !== 'topnav responsive') {
// 		navbar.classList.add("sticky")
//     	// console.log("Get Sticky!");
//   	} else {
//   		showSidebar();
//   	}
//   } else {
//     navbar.classList.remove("sticky");
//     // console.log("Get UNSticky!");
//   }

//   console.log(navbar.className);
// }
// // end make menu sticky


// function showSidebar() {	
//     // if (navbar.className === "topnav") {
//     //     // navbar.className += " responsive";
//     //     navbar.classList.add("responsive");
//     // } else if(navbar.className === "topnav sticky") {
//     // 	console.log("Here");
//     // } 

//     // else {
//     //     // navbar.className = "topnav";
//     //     navbar.classList.remove("responsive");
//     // }

//     switch(navbar.className) {
//     	case('topnav'):
//     	navbar.classList.add("responsive");
//     	break;

//     	case('topnav sticky'):
//     	console.log("Here");
//     	navbar.classList.add("sticky-mobile");
//     	break;

//     	default:
//     	navbar.classList.remove("responsive");
//     	navbar.classList.remove("sticky-mobile");
    	

//     }
    	
// } 