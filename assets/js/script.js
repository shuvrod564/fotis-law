
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});

$(document).ready(function () {
  $('.show-btn').on('click', function () {
    $('.hide-mobile').addClass('show');
    $('.show-btn').hide();
  });
});

document.addEventListener("DOMContentLoaded", function () {
  /////// Prevent closing from click inside dropdown
  document.querySelectorAll('.dropdown-menu').forEach(function (element) {
    element.addEventListener('click', function (e) {
      e.stopPropagation();
    });
  })
});

$(document).ready(function () {
  if ($(window).innerWidth() >= 991) {
    $(".dropdown").hover(function () {
      var dropdownMenu = $(this).children(".dropdown-menu");
      if (dropdownMenu.is(":visible")) {
        dropdownMenu.parent().toggleClass("open");
      }
    });
  }

 

  // Testimonial Slider Activaton Script (Homepage)
  $("#teamCarousel").owlCarousel({
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplaySpeed: 3000,
    loop: false, 
    margin: 20,
    items: 3,
    nav: false,
    dots: true,
    responsive: {
      0: { items: 1 },
      576: { items: 1 },
      768: { items: 2 },
      992: { items: 2 },
      1200: { items: 3 },
      1400: { items: 4 },
    }
  });

 
//   $('.counter').counterUp({
//     delay: 10,
//     time: 1000
//   });
  
});



$(window).on("scroll", function () {
  if ($(window).scrollTop() > 50) {
    $(".sticky-top").addClass("active");
  } else {
    //remove the background property so it comes transparent again (defined in your css)
    $(".sticky-top").removeClass("active");
  }
});
