

  

  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
      <h1><a href="index.html">Collective</a></h1>
    </div>

  <!-- if logo is image enable this -->
    <!-- image logo --
    <div class="logo">
      <a href="index.html">
        <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
      </a>
    </div>
    <!-- //image logo -->

    <div class="logo-icon text-center">
      <a href="index.html" title="logo"><img src="<?=base_url();?>/assets/admin/images/logo.png" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li class="active"><a href="<?=base_url();?>"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
        </li>
         <?php if($_SESSION['admin_type']=='admin'){ ?>
        <!--<li><a href="<?=base_url('/Admin_Control/registration');?>"><i class="fa fa-table"></i> <span>Registration</span></a></li>-->
        <!--<li><a href="<?=base_url('/Admin_Control/order_list');?>"><i class="fa fa-table"></i> <span>Order List</span></a></li>-->
        <li><a href="<?=base_url('/Admin_Control/category');?>"><i class="fa fa-table"></i> <span>Category</span></a></li>
        <li><a href="<?=base_url('/Admin_Control/sub_category');?>"><i class="fa fa-table"></i> <span>Sub Category</span></a></li>
        <li><a href="<?=base_url('/Admin_Control/product');?>"><i class="fa fa-table"></i> <span>Product</span></a></li>
         <?php } ?>
         
          <?php if($_SESSION['admin_type']=='user' && $profile->type=="nc"){ ?>
        <!--<li><a href="<?=base_url('/Admin_Control/user_profile');?>"><i class="fa fa-table"></i> <span>My Profile</span></a></li>-->
        <!--<li><a href="<?=base_url('/Admin_Control/order_list');?>"><i class="fa fa-table"></i> <span>Order List</span></a></li>-->
         <?php } ?>
         
         <?php if($_SESSION['admin_type']=='user' && $profile->type=="sc"){ ?>
        <!--<li><a href="<?=base_url('/Admin_Control/order_form');?>"><i class="fa fa-table"></i> <span>Order Form</span></a></li>-->
         <?php } ?>
         
      </ul>
      <!-- //sidebar nav end -->
      <!-- toggle button start -->
      <a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right"></i>
      </a>
      <!-- //toggle button end -->
    </div>
  </div>
  <!-- //sidebar menu end -->