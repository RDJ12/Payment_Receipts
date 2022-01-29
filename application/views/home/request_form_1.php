<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Oxygen Care</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,700&display=swap" rel="stylesheet">
<link rel="apple-touch-icon" sizes="180x180" href="https://www.oxicare.in/assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://www.oxicare.in/assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://www.oxicare.in/assets/favicon/favicon-16x16.png">
<link rel="manifest" href="https://www.oxicare.in/assets/favicon/site.webmanifest">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/style-starter.css">
    <style>
        
#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    position: relative
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative;
    text-align:left;
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid skyblue;
    outline-width: 0
}

#msform .action-button {
    width: auto;
    background: #fe5a0e;
    color: #fff;
    margin-bottom:0;
    display: inline-block;
    font-size: 22px;
}

#msform .action-button:hover,
#msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
}

#msform .action-button-previous {
    width: auto;
    background: transparent;
    font-weight: bold;
    color: #616261;
    border: 2px solid #616261;
    border-radius: 5px;
    cursor: pointer;
    display: inline-block;
    margin-top: 20px;
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
}

select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
}

select.list-dt:focus {
    border-bottom: 2px solid skyblue
}

.card {
    z-index: 0;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #000000
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f007";
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f1c0";
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f0ac"
}
#progressbar #package:before {
    font-family: FontAwesome;
    content: "\f156"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #fe5a0e;
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
}

.fit-image {
    width: 100%;
    object-fit: cover
}
    </style>
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
          
          <li class="nav-item @@services__active">
            <a class="nav-link" href="<?=base_url('/home/quote');?>">Buy AMC</a>
          </li>
          <li class="nav-item @@contact__active">
            <a class="nav-link" href="<?=base_url('/home/contact');?>">Contact</a>
          </li>
        </ul>
      </div>

     <div class="top-quote mr-lg-2 mt-lg-0 mt-3">
          <a href="tel:+918700702823" class="phn d-lg-block"><i class="fa fa-phone"></i> <span class="mob-none">Lets Talk:</span> 8700702823</a>
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
<!-- contact breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
        <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3">
            <h2 class="title">I am an Individual Customer</h2>
            <ul class="breadcrumbs-custom-path mt-2 text-center">
                <li><a href="<?=base_url();?>">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> I am an Individual Customer </li>
            </ul>
        </div>
    </div>
</section>
<!-- //contact breadcrumb -->
<div class="w3l-contact-info py-5">
    <div class="container>
<?php
  if($this->session->flashdata('mess'))
  {
      echo $this->session->flashdata('mess');
  }
?>
        
        <div class="row">
            
            <!-- MultiStep Form -->
<div class="container-fluid w3l-contact-info" id="grad1">
    <div class="">
        <div class="">
            <div class="card cus-form">
                
                <div class="row">
                    <div class="col-md-12 mx-0">
                    <div class="form-inner-cont mt-4">
                        <form id="msform"  action="<?=base_url('home/request_form_1/');?>" method="post">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Plan</strong></li>
                                <li id="personal"><strong>User Detail</strong></li>
                                <li id="payment"><strong>Machine Name</strong></li>
                                <li id="package"><strong>Buy</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                 <div class="form-card">
                                    <div class="row">
                                    <div class="col-md-8"><h2 class="fs-title">Please Select Your Plan</h2> 
                                    <p class="normal">It will help us determine the right plan for you.</p>
                                    <input type="hidden" name="plan" id="selected_plan">
                                    <select class="select" id="size"  required> 
                                        <option value="telephonic">Telephonic</option>
                                        <option value="gold">Gold</option>
                                        <option value="silver">Silver</option>
                                    </select>
                                    <span id="err2" style="color:red;"></span>
                                    
                                </div><div class="col-md-4 text-center"><img src="../assets/images/oxy.png" width="100"></div> </div></div>
                                <!--<input type="button" name="previous" class="previous action-button-previous" value="Previous" />-->
                                <button type="button" name="next"  id="next2"  class="next action-button btn btn-style btn-primary" />
                                <i class="fa fa-arrow-right"></i>
                                </button>
                                
                               
                            </fieldset>
                            
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Tell Us About You</h2>
                                   <p class="sub"><i class="fa fa-lock"></i> Your personal information is safe with us.</p>
                                   <p class="normal">Oxi Care specialist will get in touch to help you better understand our AMC Plans</p>
                                    <div class="form-group">
                                    <i class="fa fa-user"></i>
                                    <input type="text" id="organisation_name" name="organisation_name" placeholder="Full Name" />
                                    </div>
                                    <div class="form-group">
                                    <i class="fa fa-globe"></i>
                                    <input type="text" id="city" name="city" placeholder="City" />  </div>
                                   <div class="form-group">
                                   <i class="fa fa-phone"></i>
                                    <input type="number" id="phone" name="phone" placeholder="Enter your phone number" />  </div>
                                    <div class="form-group">
                                     <i class="fa fa-envelope"></i>
                                    <input type="email" id="email" name="email" placeholder="Email Id (We dont spam. Promise)" /></div>
                                    <span id="err" style="color:red;"></span>
                                </div> <button type="button" id="next1" name="next" class="next action-button btn btn-style btn-primary" />
                                <i class="fa fa-arrow-right"></i></button>
                            </fieldset>
                            
                            <fieldset>
                                <div class="form-card">
                                <div class="row">
                                <div class="col-md-8">
                                    <h2 class="fs-title">Machine Detail</h2> 
                                  
                          
                                <div class="form-group">
                                    <i class="fa fa-globe"></i>
                                    <input type="text" id="machine_name" name="machine_name" placeholder="Machine name" />  </div>
                                    
                                    <div class="form-group">
                                    <i class="fa fa-globe"></i>
                                    <input type="text" id="machine_litre" name="machine_litre" placeholder="Litre" />  </div>
                                    
                                    <div class="form-group">
                                    <i class="fa fa-globe"></i>
                                    <input type="text" id="machine_origin" name="machine_origin" placeholder="Origin" />  </div>
                                    
                                    
                                    <span id="err3" style="color:red;"></span>
                                    </div><div class="col-md-4 text-center"><img src="../assets/images/country.png" class="img-fluid"></div> </div></div>
                                <!--<input type="button" name="previous" class="previous action-button-previous" value="Previous" />-->
                                <button type="button"  id="next3"  name="next" class="next action-button btn btn-style btn-primary mt20" />
                                <i class="fa fa-arrow-right"></i>
                                </button>
                            </fieldset>
                            
                             <fieldset>
                                <div class="form-card">
                                <!--<h2 class="fs-title">Select Plan</h2> -->
                             <div class="row">
                                <div class="panel-footer">
                            <input type="submit" name="package1" class="tbtn btn btn-style btn-primary" value="Buy" />
                        </div>  
                             </div>
                                </div> 
                                <p class="normal">Exclusions in AMC : Consumables, Cosmetic Covers and all other electronic and mechanical parts which are found to be physically damaged, tampered, broken and spoilt by liquid spillage, etc.
<br/>This needs to be written somewhere when customer buys AMC </p>
                            </fieldset>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
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
				<li><a href="<?=base_url('/home/contact');?>">Contact Us</a></li>
			  </ul>
			  <div class="get-touch">
				  <h3>Get in touch</h3>
			  <a href="https://api.whatsapp.com/send?phone=+918700702823"><i class="fa fa-whatsapp"></i> Whatsapp Now</a>
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
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
</section>
<!-- //footer -->
<!-- Template JavaScript -->
<!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->

<script src="<?=base_url();?>/assets/js/jquery-1.9.1.min.js"></script>

<script src="<?=base_url();?>/assets/js/theme-change.js"></script>
<!-- responsive tabs -->
<script src="<?=base_url();?>/assets/js/easyResponsiveTabs.js"></script>

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

<script src="<?=base_url();?>/assets/js/owl.carousel.js"></script>
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
       
$(document).on('click','#submit_form',function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    //var form = $(this);
    var url = 'mail.php';
    
    $.ajax({
           type: "POST",
           url: url,
           data: $('#form2').serialize(), // serializes the form's elements.
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
</script>

<script>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){
    if($(this).attr('id')=='next1')
    {
        if($('#organisation_name').val()=='' )
            {   
                $('#err').html(' Organisation Name Required !');
                return false;
            }
            <!-- if($('#city').val()=='')-->
            <!--{   -->
            <!--    $('#err').html(' City Required !');-->
            <!--    return false;-->
            <!--}-->
             if( $('#phone').val()=='' )
            {   
                $('#err').html(' Phone Required !');
                return false;
            }
             if( $('#email').val()=='')
            {   
                $('#err').html(' Email Required !');
                return false;
            }
            
            if( $('#email').val()!='')
            {   var emailaddressVal=$('#email').val();
                var emailReg = '@';
    
               if(emailaddressVal.indexOf(emailReg) == -1){
                    $('#err').html('Enter Valid Email Required !');
                return false;
                }
            }
             
    }
    
     if($(this).attr('id')=='next2')
    {
        if($('#selected_plan').val()=='' )
            {   
                $('#err2').html(' Select Plan !');
                return false;
            }
    }
    
      if($(this).attr('id')=='next3')
    {
        if($('#machine_name').val()=='' )
            {   
                $('#err3').html(' Machine Name Required !');
                return false;
            }
            
            if($('#machine_litre').val()=='' )
            {   
                $('#err3').html(' Machine Litre Required !');
                return false;
            }
            
            if($('#machine_origin').val()=='' )
            {   
                $('#err3').html(' Machine Origin Required !');
                return false;
            }
    }

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
    
   return false;
   
})

});


$(document).on('click','#next1',function(){
    return false;
});
var aa=1;
$("select.select option").unwrap().each(function() {

    var btn = $('<div class="btn" onclick="set_plan('+aa+')">'+$(this).text()+'</div>');
    if($(this).is(':checked')) btn.addClass('on');
    $(this).replaceWith(btn);
    aa=(+aa)+(+1);
});

$(document).on('click', '.btn', function() {
    $('.btn').removeClass('on');
    $(this).addClass('on');
});

function set_plan(new_plan)
{
   $('#selected_plan').val(new_plan);
}

function set_size(new_size)
{
  
  if(new_size<=3)
  {
    $('#new_size').val(new_size);
    
            if(new_size==1)
            {
              $('#silver_lit').html('1-5L');
              $('#gold_lit').html('1-5L');
            }
            else if(new_size==2)
            {
              $('#silver_lit').html('6-9L');
              $('#gold_lit').html('6-9L');
            }
            else if(new_size==3)
            {
              $('#silver_lit').html('10L Or Above');
              $('#gold_lit').html('10L Or Above');
            }
  }
  
  if(new_size>=4)
  {
    $('#new_country').val(new_size);
    
            if(new_size==4)
            {
              $('#silver_lit_country').html('China');
              $('#gold_lit_country').html('China');
            }
            else if(new_size==5)
            {
              $('#silver_lit_country').html('Non-China');
              $('#gold_lit_country').html('Non-China');
            }
            
            var size=$('#new_size').val();
            var country=$('#new_country').val();
            
             if(country==4 && size==1)
	             {
	                 $('#silver_lit_price').html('3990');
	             }
	             else if(country==4 && size==2)
	             { 
	                 $('#silver_lit_price').html('4990');
	             }
	             else if(country==4 && size==3)
	             {
	                 $('#silver_lit_price').html('6990');
	             }
	             
	             else if(country==5 && size==1)
	             {
	                 $('#silver_lit_price').html('5990');
	             }
	             else if(country==5 && size==2)
	             { 
	                 $('#silver_lit_price').html('6990');
	             }
	             else if(country==5 && size==3)
	             {
	                 $('#silver_lit_price').html('8990');
	             }
	             
	             
	             
	             if(country==4 && size==1)
	             {
	                 $('#gold_lit_price').html('5990');
	             }
	             else if(country==4 && size==2)
	             { 
	                 $('#gold_lit_price').html('6990');
	             }
	             else if(country==4 && size==3)
	             {
	                 $('#gold_lit_price').html('9990');
	             }
	             
	             else if(country==5 && size==1)
	             {
	                 $('#gold_lit_price').html('8990');
	             }
	             else if(country==5 && size==2)
	             { 
	                 $('#gold_lit_price').html('9990');
	             }
	             else if(country==5 && size==3)
	             {
	                 $('#gold_lit_price').html('12990');
	             }
	             
	             
	             
  }
}

</script>
</body>

</html>