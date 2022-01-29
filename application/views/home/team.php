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
     /*  .ak_showmore{
    position:relative;
}
.ak_show-more-height { 
    height: 65px; 
    overflow:hidden; 
  }*/
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
          <li class="nav-item active @@about__active">
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
<!-- contact breadcrumb -->
<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3">
            <h2 class="title">Team</h2>
            <ul class="breadcrumbs-custom-path mt-2 text-center">
                <li><a href="<?=base_url();?>">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Team </li>
            </ul>
        </div>
    </div>
</section>
<!-- //about breadcrumb -->
<section class="w3l-aboutblock2" id="story">
  <div class="py-5">
    <div class="container py-lg-4 py-md-3">
      <div class="cwp4-two row">
        <div class="cwp4-text col-lg-12">
            <span class="title-small">Few Words</span>
          <h3 class="title-big">Something about <span>Us</span></h3>
          <!--<p class="mt-4"> Our mission keeps us focused and accountable, our vision drives us and our values dictate how we succeed.-->
          <!--</p>-->
          <div class="npara cont-4 mt-4">
            <p><?=$team->main_text;?></p>
            <blockquote>"If you want to go fast, go alone; if you want to go far, go together."</blockquote>
            
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>

<!-- team section -->
<section class="w3l-team" id="team">
  <div class="team py-5">
    <div class="container py-lg-5 py-md-4">
      <div class="header-section text-center mx-auto">
        <h3 class="title-small">Our Team Members</h3>
        <h3 class="title-big"><span>Team </span></h3>
      </div>
      <div class="row team-row mt-md-5 mt-4">
        <div class="col-lg-3 col-12 team-wrap">
          <div class="team-info">
            <div class="column position-relative">
              <a href="#" data-toggle="modal" data-target="#rajesh-bansal"><img src="https://www.oxicare.in/assets/images/1.png" alt="" class="img-fluid team-image" /></a>
            </div>
            <div class="column-btm">
              <h3 class="name-pos"><a href="#" data-toggle="modal" data-target="#rajesh-bansal"><?=$team->name1;?></a></h3>
              <p><?=$team->designation1;?></p>
              <p class="ak_desc ak_show-more-height">
                  <em><?=$team->content1;?></em>
                  
              </p>
              <div class="social">
                <a href="https://www.linkedin.com/in/rajesbansal" class="linkedin" target="_blank"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                
              </div>
            </div>
          </div>
        </div>
        <!--<div class="modal fade team-pop" id="rajesh-bansal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4 class="uname">Rajesh Bansal</h4>
          <p class="pos">Strategy & Sales guru</p>
        <p>An IIT-B alumni, Rajesh, started his career with Philips Electronics. 5 years with Philips and working closely with Sales & Service teams on ground gave him enough understanding of the Consumer Electronics industry. Entrepreneur in him made him launch his 2 successful consumer audio brands-F&D & INSTAPLAY.
He is an avid sportsman, and a marathon runner.
</p>
      </div>
     
    </div>
  </div>
</div>-->
        <!-- end team member -->

        <div class="col-lg-3 col-12 team-wrap">

          <div class="team-info">
            <div class="column position-relative">
              <a href="#url"><img src="https://www.oxicare.in/assets/images/2.png" alt="" class="img-fluid team-image" /></a>
            </div>
            <div class="column-btm">
              <h3 class="name-pos"><a href="#url"><?=$team->name2;?></a></h3>
              <p><?=$team->designation2;?></p>
              <p class="ak_desc ak_show-more-height">
                  <em><?=$team->content2;?></em>
                  
              </p>
              
              <div class="social">
                <a href="https://www.linkedin.com/in/varkum" class="linkedin" target="_blank"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- end team member -->

        <div class="col-lg-3 col-12 team-wrap mt-lg-0 pt-lg-0 mt-4 pt-2">
          <div class="team-info">
            <div class="column position-relative">
              <a href="#url"><img src="https://www.oxicare.in/assets/images/3.png" alt="" class="img-fluid team-image" /></a>
            </div>
            <div class="column-btm">
              <h3 class="name-pos"><a href="#url"><?=$team->name3;?></a></h3>
              <p><?=$team->designation3;?></p>
              <p class="ak_desc ak_show-more-height">
                  <em><?=$team->content3;?></em>
                  
              </p>
              <div class="social">
                <a href="https://www.linkedin.com/in/krishna-upadhyaya-564aa21a" class="linkedin" target="_blank"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
              </div>
            </div>
          </div>

        </div>
        <!-- end team member -->
        <!-- end team member -->

        <div class="col-lg-3 col-12 team-wrap mt-lg-0 pt-lg-0 mt-4 pt-2">

          <div class="team-info">
            <div class="column position-relative">
              <a href="#url"><img src="https://www.oxicare.in/assets/images/4.png" alt="" class="img-fluid team-image" /></a>
            </div>
            <div class="column-btm">
              <h3 class="name-pos"><a href="#url"><?=$team->name4;?></a></h3>
              <p><?=$team->designation4;?></p>
              <p class="ak_desc ak_show-more-height">
                  <em><?=$team->content4;?></em>
                  
              </p>
              <div class="social">
                <a href="https://www.linkedin.com/in/surya-kant-mishra-73906421/" class="linkedin" target="_blank"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- end team member -->

      </div>
    </div>
</section>
<!-- //teamsection -->
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
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
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
   /* $(".ak_show-more").click(function () {
    if($(".ak_desc").hasClass("ak_show-more-height")) {
        $(this).text("(Show Less)");
    } else {
        $(this).text("(Show More)");
    }

    $(".ak_desc").toggleClass("ak_show-more-height");
});*/
  </script>
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
    var url = '/home/send_contact_mail';
    
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

</body>

</html>