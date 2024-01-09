 

/*============================= Back To Top Button Script ========================*/
var mybutton = document.getElementById("backTop");
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    mybutton.style.display = "flex";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


(function ($) {
  // $('body').css('padding-top', $('.navbar').outerHeight() + 'px')
  // detect scroll top or down
  if ($('.smart-scroll').length > 0) { // check if element exists
    var last_scroll_top = 0;
    $(window).on('scroll', function() {
        scroll_top = $(this).scrollTop();
        // console.log(scroll_top);
        if (scroll_top < last_scroll_top) {
            $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
        } else {
            $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
        }
        if (scroll_top === 0) {
          $('.smart-scroll').removeClass('scrolled-down').removeClass('scrolled-up');
        }
        last_scroll_top = scroll_top;
    });
  }



  // Main Header Nav links Active Class Genaretor
  $("#mainNav .navbar-nav li a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).parents("li").addClass("active");
 

  // Bottom Section Service Slider Activaton Script (Homepage)
  $(".packageCategoryCarousel").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1, margin: 8 },
        576: { items: 2, margin: 10  },
        768: { items: 2, margin: 15, nav:true  },
        992: { items: 2, margin: 15, nav:true  }, 
        1200: { items: 3, margin: 15, nav:true }, 
        1400: { items: 4, nav:true }, 
    } 
  });
 
  $(".packageCarousel").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1, margin: 8 },
        576: { items: 2, margin: 10  },
        768: { items: 2, margin: 15  },
        992: { items: 2, margin: 15  }, 
        1200: { items: 3, margin: 15 },  
    } 
  });

  // Bottom Section Service Slider Activaton Script (Homepage)
  $(".howBookCarousel").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 2, margin: 8 },
        576: { items: 2, margin: 10  },
        768: { items: 3, margin: 15 },
        992: { items: 2, margin: 15 }, 
        1200: { items: 3, margin: 15 }, 
        1400: { items: 3 }, 
    } 
  });
 
 

   // Blog Slider Activaton Script (Homepage)
   $(".blogCarosel").owlCarousel({
    autoplay: true,
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 5000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15, 
    items: 3,
    nav: false,
    dots: true,
    responsiveClass: true,
    responsive: {
        0: { items: 1, },
        576: { items: 2 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 3 }, 
    },
});
    
 
  $(".testimonialSlider").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 1.35,
    nav: true,
    dots: false, 
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 1  },
        768: { items: 2 },
        992: { items: 2 }, 
        1200: { items: 3 },  
    } 
  });
  
   
  
  // Modal Quick Enquery Form Validation Script
  $("#modalBookingForm").submit(function () {
    if (validatecontactForm()) {
        return true;
    }
    else {
        return false;
    }
  }); 
  function validatecontactForm() {
    var valid = true;
    $(".form-control").css('border-color', '');
    $(".meerror").html('');

    // User name validation
    if (!$("#mfull_name").val()) {
        $("#mfull_name_error").html("Name is required");
        $("#mfull_name").css('border-color', '#dc3545');
        valid = false;
    } else {
        $("#mfull_name_error").html("");
        $("#mfull_name").css('border-color', '#099f1a');
    }

    //  
    if (!$("#memail_address").val()) {
        $("#memail_address_error").html("Email is required");
        $("#memail_address").css('border-color', '#dc3545');
        valid = false;
    } else if (!$("#memail_address").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#memail_address_error").html("Invalid email");
        $("#memail_address").css('border-color', '#dc3545');
        valid = false;
    } else {
        $("#memail_address_error").html("");
        $("#memail_address").css('border-color', '#099f1a');
    } 

    //  
    var phno = $.trim($('#mphone_no').val());
    var che_phno = /^[0-9]{7,15}$/;
    if (!$("#mphone_no").val()) {
        $("#mphone_no_error").html("Phone number required");
        $("#mphone_no").css('border-color', '#dc3545');
        valid = false;
    } if (!che_phno.test(phno)) {
        $("#mphone_no").css('border-color', '#dc3545');
        $("#mphone_no_error").html('Please enter valid phone no');
        valid = false;
    } else if (phno.length < 7 || phno.length > 15) {
        $("#mphone_no").css('border-color', '#dc3545');
        $("#mphone_no_error").html('Phone no. must be greater than or equals to 10 and less than or equals to 15 digits!!');
        // $("#dash_phone_error").css("color", "#FC0000"); 
        valid = false;
    } else {
        $("#mphone_no_error").html("");
        $("#mphone_no").css('border-color', '#099f1a');
    } 

    if (!$("#mtravel_date").val()) {
      $("#mtravel_date_error").html("Date is required");
      $("#mtravel_date").css('border-color', '#dc3545');
      valid = false;
    } else {
        $("#mtravel_date_error").html("");
        $("#mtravel_date").css('border-color', '#099f1a');
    }

    if (!$("#mno_of_people").val()) {
      $("#mno_of_people_error").html("No of people required");
      $("#mno_of_people").css('border-color', '#dc3545');
      valid = false;
    } else {
        $("#mno_of_people_error").html("");
        $("#mno_of_people").css('border-color', '#099f1a');
    }
    if (!$("#mno_of_adult").val()) {
      $("#mno_of_adult_error").html("No of adult required");
      $("#mno_of_adult").css('border-color', '#dc3545');
      valid = false;
    } else {
        $("#mno_of_adult_error").html("");
        $("#mno_of_adult").css('border-color', '#099f1a');
    }
    if (!$("#mno_of_child").val()) {
      $("#mno_of_child_error").html("No of child required");
      $("#mno_of_child").css('border-color', '#dc3545');
      valid = false;
    } else {
        $("#mno_of_child_error").html("");
        $("#mno_of_child").css('border-color', '#099f1a');
    }

    return valid;
  }

  // Modal Quick Enquery Form Set Blank When Modal Is Close
  var enquirModal = document.getElementById("bookingModal");
  enquirModal.addEventListener('hidden.bs.modal', function(e) {
    $("#mfull_name, #memail_address, #mphone_no, #mtravel_date, #mno_of_people, #mno_of_adult, #mno_of_child").val('');
    $("#mfull_name, #memail_address, #mphone_no, #mtravel_date, #mno_of_people, #mno_of_adult, #mno_of_child").css('border-color', '#ced4da');
    $("#mfull_name_error, #memail_address_error, #mphone_no_error, #mtravel_date_error, #mno_of_people_error, #mno_of_adult_error, #mno_of_child_error").html('');
  });

 
 
 
})(jQuery);
 

 