<!doctype html>
<html lang="en">

<head>
     <?php  if (isset($header_script)) echo $header_script; ?>

   </head>


<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">
<div id="loader-wrapper">
<div id="loader"></div>
			
<div class="loader-section section-left"></div>
<div class="loader-section section-right"></div>
			
</div> 
<!-- HEADER AREA START (header-5) -->
<header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
    <!-- ltn__header-top-area start -->
    <div class="ltn__header-top-area section-bg-6 top-area-color-white---">
    <div class="container">
    <div class="row">
    <div class="col-md-7">
    <div class="ltn__top-bar-menu">
    <ul>
    <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> info@webmail.com</a></li>
    <li><a href="locations.html"><i class="icon-placeholder"></i> Lorema impsum, Dehli India</a></li>
    </ul>
    </div>
    </div>
    <div class="col-md-5">
    <div class="top-bar-right text-right">
    <div class="ltn__top-bar-menu">
    <ul>
    <li class="d-none">
    <!-- ltn__language-menu -->
    <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
    <ul>
    <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
    <ul>
    <li><a href="#">Arabic</a></li>
    <li><a href="#">Bengali</a></li>
    <li><a href="#">Chinese</a></li>
    <li><a href="#">English</a></li>
    <li><a href="#">French</a></li>
    <li><a href="#">Hindi</a></li>
    </ul>
    </li>
    </ul>
    </div>
    </li>
    <li>
    <!-- ltn__social-media -->
    <div class="ltn__social-media">
    <ul>
    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
    
    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
    <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
    </ul>
    </div>
    </li>
    <li>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- ltn__header-top-area end -->
    
    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
    <div class="container">
    <div class="row">
    <div class="col">
    <div class="site-logo-wrap">
    <div class="site-logo">
    <a href="index.html"><span class="logo_text">Homesolutions</span></a>
    </div>
    <div class="get-support clearfix d-none">
    <div class="get-support-icon">
    <i class="icon-call"></i>
    </div>
    <div class="get-support-info">
    <h6>Get Support</h6>
    <h4><a href="tel:+123456789">123-456-789-10</a></h4>
    </div>
    </div>
    </div>
    </div>
    <div class="col header-menu-column">
    <div class="header-menu d-none d-xl-block">
    <nav>
    <div class="ltn__main-menu">
    <ul class="justify-content-end">
    <li class="menu-icon"><a href="#">Home</a>
    
    </li>
    <li class="menu-icon"><a href="#">About</a>
    
    </li>
    <li class="menu-icon"><a href="#">Project</a>
    <ul>
           <?php foreach($website_category as $cat){ ?>
        <li><a href="<?=base_url('/Home/view_product/'.$cat->category_id);?>"><?=$cat->category_name;?> <span class="float-right">>></span></a>
        <ul>
            <?php $sub_cat=get_sub_cat($cat->category_id); foreach($sub_cat as $scat){ ?>
            <li><a href="<?=base_url('/Home/view_product/'.$cat->category_id.'/'.$scat->sub_category_id);?>"><?=$scat->sub_category_name;?></a></li>
            <?php } ?>
        </ul>
        </li>
        <?php } ?>
 
    <!--<li><a href="#">Mohali <span class="float-right">>></span></a>-->
    <!--    <ul>-->
    <!--        <li><a href="#">Residential</a></li>-->
    <!--        <li><a href="#">Commercial</a></li>-->
    <!--        </ul>-->
    <!--    </li>-->
    <!--<li><a href="#">Himachal <span class="float-right">>></span></a>-->
    <!--<ul>-->
    <!--<li><a href="#">Residential</a></li>-->
    <!--<li><a href="#">Commercial</a></li>-->
    <!--</ul>-->
    <!--</li>-->
    </ul>
    </li>
    <li><a href="contact.html">Contact.</a></li>
    </ul>
    </div>
    </nav>
    </div>
    </div>
    
    </div>
    </div>
    <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    
         <!-- main content start-->
    
          <?=(isset($main_content)) ? $main_content : ''; ?>

         
    
    <?php if (isset($footer_script)) echo $footer_script; ?>
    <script>
        
$(document).ready(function() {
  setTimeout(function(){
    $('body').addClass('loaded');
  }, 3000);
});



    </script>
    
   </body>
   </html>