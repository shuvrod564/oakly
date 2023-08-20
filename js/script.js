/*============================= Preloader Vanilla Java Script ========================*/
document.onreadystatechange = function () {
  if (document.readyState !== "complete") {
    document.querySelector("body").style.visibility = "hidden";
    document.querySelector("#preloader").style.visibility = "visible";
  } else {
    document.querySelector("#preloader").style.display = "none";
    document.querySelector("body").style.visibility = "visible";
  }
};

/*============================= Nav Bar Fixed Top Vanilla Java Script ========================*/
window.addEventListener('scroll', function () {
  var menubar = document.querySelector("#mainNav");
  menubar.classList.toggle("fixed-top", window.scrollY > 10);
});



/*============================ Hide Navbar Collapse By Client Button =========================*/
function hideNavMenu() {
  let nav = document.getElementById('navbarNav');
  if (nav.classList.contains('show')) {
    nav.classList.remove('show');
  }
}
/*=========================== Hide NavMenu Onclick Outside ===================================*/
document.onclick = function (e) {
  if (e.target.id !== 'navbarNav' && e.target.id !== 'toggler') {
    if (e.target.offsetParent && e.target.offsetParent.id !== 'navbarNav') {
      document.getElementById('navbarNav').classList.remove('show');
    }
  }
}

/*============================= Back To Top Button Script ========================*/
var mybutton = document.getElementById("backTop");
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

/*============================= Bootstrap Tooltip Activation Script ========================*/
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"], .hasTooltip'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl, {
    html: true
  });
});



(function ($) {

  // Main Header Nav links Active Class Genaretor
  $("#mainNav .navbar-nav li a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).parents("li").addClass("active");

  $(".viewMoreOne").click(function(){
    $(".viewMoreOneContent").toggleClass('h-100');
  });
  $(".viewMoreTwo").click(function(){
    $(".viewMoreTwoContent").toggleClass('h-100');
  });

  // Hero Slider Activaton Script (Homepage)
  $("#productRangeCarousel").owlCarousel({
    items: 4,
    autoplay: true,
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    responsiveClass: true,
    responsive: {
      0: { items: 1 },
      768: { items: 2 },
      992: { items: 3 },
      1200: { items: 3 },
      1400: { items: 4 }
    },
  });
  // Hero Slider Activaton Script (Homepage)
  $(".productSlider").owlCarousel({
    autoplay: false,
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 12000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 7,
    items: 5,
    center: true,
    nav: true,
    dots: false,
    responsiveClass: true,
    responsive: {
      0: { items: 1, center: false },
      500: { items: 2, center: false },
      992: { items: 3.5, center: true },
      1200: { items: 4.5, center: true, },
      1400: { items: 5.5, center: true, }
    },
  });
  // Home Page Success Stories Slider Activaton Script 
  $("#testiSlider").owlCarousel({
    autoplay: true,
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 12000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 0,
    items: 2,
    center: true,
    nav: false,
    dots: false,
    responsiveClass: true,
    responsive: {
      0: { items: 1, nav: true, center: false, },
      768: { items: 2, nav: true, center: false, },
      992: { items: 2, nav: false, center: false, },
      1200: { items: 3, nav: false, center: true, },
      1400: { items: 3.5, nav: false, center: true, }
    },
  });
  // Home Page Success Stories Slider Activaton Script 
  $(".teamSlider").owlCarousel({
    autoplay: true,
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 12000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 10,
    items: 4,
    center: false,
    nav: true,
    dots: false,
    responsiveClass: true,
    responsive: {
      0: { items: 1 },
      768: { items: 2 },
      992: { items: 3, },
      1200: { items: 4 },
      1400: { items: 4 }
    },
  });

  $(window).on("load",function(){
    $(".scrollbar").mCustomScrollbar();
  });

})(jQuery);

/*--> 12. =========================== Collapse Button Text Change Script ===================================*/   
(function ($) { 
  $(".toogleBtn").click(function () { 
    $('.toogleBtn span').text(function(i, v){
      return v === 'Read More' ? 'Show Less' : 'Read More'
   })
  });
   
  
})(jQuery);

 

