<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <title>32Watts</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/css-style-liberty.css">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&amp;display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">
<script src="<?=base_url();?>/assets/js/monetization.js" type="text/javascript"></script>


<meta name="robots" content="noindex">
<link rel="stylesheet" href="<?=base_url();?>/assets/css/css-font-awesome.min.css">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}


/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>
<!--<div class="pull-right toggle-right-sidebar">-->
<!--<span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>-->
<!--</div>-->

<div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
<div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">

    <!--<div id="w3lDemoBar" class="w3l-demo-bar">-->
    <!--    <div class="demo-btns">-->
    <!--    <a href="https://w3layouts.com/?p=42007">-->
    <!--        <span class="w3l-icon -back">-->
    <!--            <span class="fa fa-arrow-left"></span>-->
    <!--        </span>-->
    <!--        <span class="w3l-text">Back</span>-->
    <!--    </a>-->
    <!--    <a href="https://w3layouts.com/?p=42007">-->
    <!--        <span class="w3l-icon -download">-->
    <!--            <span class="fa fa-download"></span>-->
    <!--        </span>-->
    <!--        <span class="w3l-text">Download</span>-->
    <!--    </a>-->
    <!--    <a href="https://w3layouts.com/checkout/?add-to-cart=42007" class="no-margin-bottom-mobile">-->
    <!--        <span class="w3l-icon -buy">-->
    <!--            <span class="fa fa-shopping-cart"></span>-->
    <!--        </span>-->
    <!--        <span class="w3l-text">Buy</span>-->
    <!--    </a>-->
    <!--</div>-->
        <!---<div class="responsive-icons">
            <a href="#url" class="desktop-mode">
                <span class="w3l-icon -desktop">
                    <span class="fa fa-desktop"></span>
                </span>
            </a>
            <a href="#url" class="tablet-mode">
                <span class="w3l-icon -tablet">
                    <span class="fa fa-tablet"></span>
                </span>
            </a>
            <a href="#url" class="mobile-mode no-margin-bottom">
                <span class="w3l-icon -mobile">
                    <span class="fa fa-mobile"></span>
                </span>
            </a>
        </div>-->
    <!--</div>-->
    <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003" style="overflow: hidden; outline: none;">
    </div>
</div>
</div>


  <section>

    <!-- content -->
    <div class="login-screen">
        <!-- login form -->
        <section class="login-form py-md-5 py-3">
            <div class="card card_border p-md-4">
                <div class="card-body">
                    <center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
                    <!-- form -->
                    <form  action="<?=base_url('admin');?>" method="post">
                        <div class="login__header text-center mb-lg-5 mb-4">
                            <img src="img/logo.png" width="120" style="margin-bottom:20px;">
                            <!--<h3 class="login__title mb-2"> Login</h3>-->
                            <p>Welcome back, login to continue</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">User Email</label>
                            <input type="text" name="admin_email" class="form-control login_text_field_bg input-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="input__label">Password</label>
                            <input  name="admin_password"  type="password" class="form-control login_text_field_bg input-style" id="exampleInputPassword1" placeholder="" required>
                        </div>
                        <div class="form-check check-remember check-me-out">
                            <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1">
                            <label class="form-check-label checkmark" for="exampleCheck1">Remember
                                me</label>
                        </div>
                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                            <button type="submit" class="btn btn-primary btn-style mt-4">Login now</button>
                            
                            <!--<p class="signup mt-4"> -->
                            <!--   <a href="<?=base_url('/Admin_Control/nc_register');?>" class="signuplink">Register as Notary Company</a><br>-->
                            <!--   <a href="<?=base_url('/Admin_Control/sc_register');?>" class="signuplink">Register as Signing Company</a>-->
                            <!--</p>-->
                        </div>
                    </form>
                    <!-- //form -->
                    <!--<p class="backtohome mt-4"><a href="index.html" class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back to Home </a></p>-->
                </div>
            </div>
        </section>

    </div>
    <!-- //content -->

</section>




<div id="v-w3layouts"></div>


</body></html>
