<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Oxi Care</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,700&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://www.oxicare.in/assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://www.oxicare.in/assets/favicon/favicon-16x16.png">
<link rel="manifest" href="https://www.oxicare.in/assets/favicon/site.webmanifest">
    <!-- Template CSS -->
    <link rel="stylesheet" href="https://www.oxicare.in/assets/css/style-starter.css">
    <style>
       .features-main .text-center {
    width: 100%;
}
        .btn-style.white {
    background-color: #fff;
    color: #e6520e;
}
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ETDQMLGJBY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-ETDQMLGJBY');
</script>
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark stroke">
      <h1>
        <a class="navbar-brand" href="<?=base_url();?>">
          <img src="https://www.oxicare.in/assets/images/logo.png" class="logo-white">
          <img src="https://www.oxicare.in/assets/images/logo2.png" class="logo-dark">
          </a>
      </h1>

      <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
      <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-lg-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url();?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @@about__active">
            <a class="nav-link" href="<?=base_url('/home/team#team');?>">About</a>
          </li>
          <li class="nav-item @@about__active active">
            <a class="nav-link" href="<?=base_url('/home/service');?>">Our Services</a>
          </li>
          <li class="nav-item @@services__active">
            <a class="nav-link" href="<?=base_url('/home/quote');?>">Buy AMC</a>
          </li>
          <li class="nav-item @@contact__active">
            <a class="nav-link" href="<?=base_url('/home/contact');?>">Contact</a>
          </li>
        </ul>
      </div>

      <div class="top-quote mr-lg-2 mt-lg-0 mt-3">
          <a href="tel:8700702823" class="phn d-lg-block"><i class="fa fa-phone"></i> <span class="mob-none">Lets Talk:</span> 8700702823</a>
        <a href="<?=base_url('/home/service_request');?>" class="btn btn-style btn-primary">Raise a service request</a>
      </div>
      <!-- toggle switch for light and dark theme -->
      <div class="mobile-position">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container py-1">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
      <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>
</header>
<!--/header-->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3">
            <h2 class="title">Services</h2>
            <ul class="breadcrumbs-custom-path mt-2 text-center">
                <li><a href="https://www.oxicare.in/">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Services </li>
            </ul>
        </div>
    </div>
</section>
<section class="w3l-homeblock2 w3l-aboutblock2 serv bg-white pt70">
    <div class="midd-w3">
        <div class="container">
            <div class="header-section text-center mx-auto">
        <h3 class="title-small">Offered Services</h3>
        <h3 class="title-big"><span>Services </span></h3>
      </div>
            <div class="row mt-md-5 mt-4">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="<?=base_url('/uploads/'.$services_data->image1);?>" alt="" class="img-fluid">
                        
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-sm-5 mt-4 align-self">
                    <div class="serv-text">
                    <h3 class="title-big"><?=$services_data->heading1;?></h3>
                   <p class="mt-4"><?=$services_data->content1;?></p> 
          <!--          <p class="mt-4">If you are someone who has joined the long list of entities dealing with oxygen concentrators in numbers, then you would definitely want to do an in-depth inspection to make sure the expensive equipment is not box-dead . According to our research, 7% of  machines fail to pass the basic QC test. QC can also be done at periodic intervals to check the health of the machine and ensure that the product is working as required. </p>-->
          <!--          <ul class="cont-4 mt-4">-->
          <!--  <li><span class="fa fa-check"></span>6 STEP QC Check for new and old machines. </li>-->
          <!--  <li><span class="fa fa-check"></span>Network of Highly skilled and experienced technicians.</li>-->
          <!--  <li><span class="fa fa-check"></span>Affordable solution for NGOs, Corporates and Traders.</li>-->
          <!--  <li><span class="fa fa-check"></span>QC Services ensure proper preventive maintenance of OCs.</li>-->
          <!--</ul>-->
                    <a href="https://www.oxicare.in/home/form_2" class="btn btn-style btn-primary mt-sm-3 mt-4">Enquire Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-homeblock2 w3l-aboutblock2 serv bg-white serv1">
    <div class="midd-w3">
        <div class="container">
            <div class="row mob-rev">
                
                <div class="col-lg-6 mt-lg-0 mt-sm-5 mt-4 align-self">
                    <div class="serv-text">
                    <h3 class="title-big"><?=$services_data->heading2;?></h3>
                    <p class="mt-4"><?=$services_data->content2;?></p>
          <!--          <p class="mt-4">Oxi Care understands that sudden breakdown of oxygen concentrators can get risky for the patients and entities providing healthcare services. Our team of expert and trained service engineers makes sure that your machinery is up and running in record time with the fastest TAT (Turn-around-time). We provide quick on-site/off site support for Institutions.</p>-->
          <!--          <ul class="cont-4 mt-4">-->
          <!--  <li><span class="fa fa-check"></span>Customised SLAs for institutions.</li>-->
          <!--  <li><span class="fa fa-check"></span>Off the shelf spare part availability*</li>-->
          <!--  <li><span class="fa fa-check"></span>Team of factory trained and skilled technicians.</li>-->
          <!--  <li><span class="fa fa-check"></span>Same day telephonic support and next business day on site support.</li>-->
          <!--</ul>-->
                    <a href="https://www.oxicare.in/home/form_2" class="btn btn-style btn-primary mt-sm-3 mt-4">Enquire Now</a>
                    </div>
                </div>
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="<?=base_url('/uploads/'.$services_data->image2);?>" alt="" class="img-fluid">
                        
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-homeblock2 w3l-aboutblock2 serv bg-white">
    <div class="midd-w3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="<?=base_url('/uploads/'.$services_data->image3);?>" alt="" class="img-fluid">
                        
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-sm-5 mt-4 align-self">
                    <div class="serv-text">
                    <h3 class="title-big"><?=$services_data->heading3;?></h3>
                    <p class="mt-4"><?=$services_data->content3;?></p>
          <!--          <p class="mt-4">Our AMC plan is a promise that is not meant to be broken. We give sturdy maintenance support for machines which are not backed by manufacturers in India to ensure support for unplanned breakdowns and preventive maintenance needs at a time when you need your machines to work uninterrupted. Our AMC plans not only cover the repair expenses, it also offers you hassle-free experience and robust support.</p>-->
          <!--          <ul class="cont-4 mt-4">-->
          <!--  <li><span class="fa fa-check"></span>Customised SLAs for institutions.</li>-->
          <!--  <li><span class="fa fa-check"></span>Off the shelf spare part availability*</li>-->
          <!--  <li><span class="fa fa-check"></span>Team of factory trained and skilled technicians.</li>-->
          <!--  <li><span class="fa fa-check"></span>Same day telephonic support and next business day on site support*</li>-->
          <!--</ul>-->
                    <a href="https://www.oxicare.in/home/form_2" class="btn btn-style btn-primary mt-sm-3 mt-4">Enquire Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="feature-style-one py-5">
    <div class="container py-lg-4 py-md-3">
        <div class="row px-2">
            <div class="col-lg-4 col-md-6 px-2">
                <div class="single-feature-style-one">
                    <div class="icon-box"> 
                        <span class="fa fa-lightbulb-o"></span>
                    </div>
                    <div class="text-box">
                        <h3>Emergency Repair</h3>
                        <p>For Emergency Oxygen Concentrator Repair.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 px-2 mt-md-0 mt-4">
                <div class="single-feature-style-one primary">
                    <div class="icon-box"> 
                        <span class="fa fa-shield"></span>
                    </div>
                    <div class="text-box">
                        <h3>Expert</h3>
                        <p>We understand how stressful it can be to see your loved ones struggling to breathe. Our experts will outdo their duties to help you get the machine to work properly.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 px-2 mt-lg-0 mt-4">
                <div class="single-feature-style-one dark">
                    <div class="icon-box"> 
                        <span class="fa fa-headphones"></i>
                    </div>
                    <div class="text-box">
                        <h3>Let's Talk</h3>
                        <p>Interested in our services ? Want to talk to a human ? Call us or whatsapp us on <a href="tel:+918700702823">8700702823</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- footer -->
 <section class="w3l-footer">
  <div class="w3l-footer-16-main py-5">
    <div class="container pt-lg-4">
      <div class="row">
        <div class="col-lg-12 column">
          <div class="row">
            <div class="col-sm-12 col-12 column ft1">
              <!--<h3>Quick Links</h3>-->
              <img src="https://www.oxicare.in/assets/images/logo2.png" width="90">
              <ul class="footer-gd-16">
                <li><a href="<?=base_url();?>">Home</a></li>
                <li><a class="nav-link" href="<?=base_url('/home/team#team');?>">About</a></li>
                <li><a href="<?=base_url('/home/quote');?>">Buy AMC</a></li>
                <li><a href="<?=base_url('/home/contact');?>">Contact</a></li>
              </ul>
              <div class="get-touch">
                  <h3>Get in touch</h3>
              <a href="https://api.whatsapp.com/send?phone=8700702823"><i class="fa fa-whatsapp"></i> Whatsapp Now</a>
              </div>
            </div>
            <!--<div class="col-sm-4 col-6 column">
              <h3>Useful Links</h3>
              <ul class="footer-gd-16">
                <li><a href="<?=base_url();?>">Case Studies</a></li>
                <li><a href="<?=base_url();?>">Our Branches</a></li>
                
                <li><a href="<?=base_url();?>">About Company</a></li>
                
              </ul>
            </div>-->
            <!--<div class="col-sm-4 col-6 column mt-sm-0 mt-4">
              <h3>Our Services</h3>
              <ul class="footer-gd-16">
                <li><a href="<?=base_url();?>">AMC</a></li>
                <li><a href="<?=base_url();?>">Repair</a></li>
                <li><a href="<?=base_url();?>">Exchange</a></li>
               
              </ul>
            </div>-->
          </div>
        </div>
        <!--<div class="col-lg-5 col-md-12 column pl-lg-5 column4 mt-lg-0 mt-5">
          <h3>Newsletter </h3>
          <div class="end-column">
            <h4>Get latest updates and offers.</h4>
            <form action="#" class="subscribe" method="post">
              <input type="email" name="email" placeholder="Email Address" required="">
              <button type="submit"><span class="fa fa-paper-plane"></span></button>
            </form>
            <p>Sign up for our latest news & articles. We won’t give you spam mails.</p>
          </div>
        </div>-->
      </div>
      <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
        <div class="columns text-lg-left text-center">
          <p>&copy; 2021 OxiCare. All rights reserved.
          </p>
        </div>
        <div class="columns-2 mt-lg-0 mt-3">
          <ul class="social">
            <li><a target="_blank" href="https://www.facebook.com/Oxi-Care-106897841573302"><span class="fa fa-facebook" aria-hidden="true"></span></a>
            </li>
            <li><a target="_blank" href="https://www.linkedin.com/company/oxi-care"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
            </li>
            <li><a target="_blank" href="https://twitter.com/careoxi?s=21"><span class="fa fa-twitter" aria-hidden="true"></span></a>
            </li>
            <li><a target="_blank" href="https://www.linkedin.com/company/oxi-care"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
            </li>
            <li><a target="_blank" href="https://www.youtube.com/channel/UClMevjv0GVb8oTgAIQzpsCQ/videos"><span class="fa fa-youtube" aria-hidden="true"></span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <div class="whats-flot">
                  
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+918700702823"><i class="fa fa-whatsapp"></i><span class="mob-none">Chat with us on Whatsapp</span></a>
              </div>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- //move top -->
  <script>
    // $(function () {
    //   $('.navbar-toggler').click(function () {
    //     $('body').toggleClass('noscroll');
    //   })
    // });
  </script>
</section>
<!-- //footer -->
<!-- Template JavaScript -->
<!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->

<script src="https://www.oxicare.in/assets/js/jquery-1.9.1.min.js"></script>

<script src="https://www.oxicare.in/assets/js/theme-change.js"></script>
<!-- responsive tabs -->
<script src="https://www.oxicare.in/assets/js/easyResponsiveTabs.js"></script>

<!--Plug-in Initialisation-->
<script type="text/javascript">
 $(document).ready(function () {
   //Horizontal Tab
   $('#parentHorizontalTab').easyResponsiveTabs({
     type: 'default', //Types: default, vertical, accordion
     width: 'auto', //auto or any width like 600px
     fit: true, // 100% fit in a container
     tabidentify: 'hor_1', // The tab groups identifier
     activate: function (event) { // Callback function if tab is switched
       var $tab = $(this);
       var $info = $('#nested-tabInfo');
       var $name = $('span', $info);
       $name.text($tab.text());
       $info.show();
     }
   });
 });
</script>

<script src="https://www.oxicare.in/assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->
<script>
  $(document).ready(function () {
    $('.owl-three').owlCarousel({
      margin: 20,
      nav: false,
      dots: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 2
        },
        480: {
          items: 2
        },
        767: {
          items: 3
        },
        992: {
          items: 4
        },
        1280: {
          items: 5
        }
      }
    })
  })
</script>

<!-- script for testimonials -->
<script>
 $(document).ready(function () {
   $('.owl-testimonial').owlCarousel({
     loop: true,
     margin: 0,
     nav: true,
     responsiveClass: true,
     autoplay: false,
     autoplayTimeout: 5000,
     autoplaySpeed: 1000,
     autoplayHoverPause: false,
     responsive: {
       0: {
         items: 1,
         nav: false
       },
       480: {
         items: 1,
         nav: false
       },
       667: {
         items: 1,
         nav: true
       },
       1000: {
         items: 1,
         nav: true
       }
     }
   })
 })
</script>
<!-- //script for testimonials -->

<script src="<?=base_url();?>/assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="<?=base_url();?>/assets/js/bootstrap.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        //swal("Email has been sent !");


//         $('#submit_form').click( function() {
    
//     $.ajax({
//         url: 'mail.php',
//         type: 'post',
//         // dataType: 'json',
//         data: $('#form1').serialize(),
//         success: function(data) {
//             console.log(data);
//                    if(data===true)
//                    {
//                     swal("Email has been sent !");
//                    }
//                    else
//                    {
//                       swal("Unable to sent !");
//                    }

//                    setTimeout(function () {
        
//         location.reload(true);
//       }, 5000);
//                  }
//     });
// });

$(document).on('click','#submit_form',function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    //var form = $(this);
    var url = 'mail.php';
    
    $.ajax({
           type: "POST",
           url: url,
           data: $('#form1').serialize(), // serializes the form's elements.
           success: function(data)
           {      console.log(data);
            if(data==1)
                   {
                    swal("Email has been sent !");
                   }
                   else
                   {
                      swal("Unable to sent !");
                   }
               setTimeout(function() {
                  window.location.reload();
                }, 3000); // <-- time in milliseconds
           }
         });

    
});
    });
    
    (function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
</script>
</body>

</html>