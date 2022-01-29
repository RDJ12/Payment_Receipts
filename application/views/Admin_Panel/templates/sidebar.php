

  

  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu" style="display:<?php if($_SESSION['user_type']==3 || $this->uri->segment(2)=='view_lead'){echo"none";} ?>">

    <!-- logo start -->
    <div class="logo">
      <h1><a href="#">Receipt</a></h1>
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
        <li class="active"><a href="<?=base_url('/admin');?>"><img src="<?=base_url();?>/img/dashboard.png"> <span> Dashboard</span></a>
        </li>
         
         <?php  if($_SESSION['user_type']==1){ ?>
        <li><a href="<?=base_url('Admin_Control/user_type');?>"><img src="<?=base_url();?>/img/user.png"> <span>User Type </span></a></li> 
        
         <li><a href="<?=base_url('Admin_Control/add_lead_distributor');?>"><img src="<?=base_url();?>/img/add-dist.png"> <span>Add Sales Team Memeber</span></a>
         </li>
         
         <li><a href="<?=base_url('Admin_Control/lead_distributor_list');?>"><img src="<?=base_url();?>/img/list.png"> <span>Sales Team Detail</span></a>
         </li>
         
        
         
        
        
         
         
         <?php } ?>
         
         
         <?php  if($_SESSION['user_type']==2){ ?>
            <li><a href="<?=base_url('Admin_Control/lead_distributor_list');?>"><img src="<?=base_url();?>/img/list.png"> <span>Sales Team Detail</span></a>
         </li>
        <!--<li><a href="<?=base_url('Admin_Control/add_lead');?>"><i class="fa fa-table"></i> <span>Add Lead </span></a></li> -->
        <li><a href="<?=base_url('Admin_Control/leads_list');?>"><i class="fa fa-table"></i> <span>All Payment Receipt </span></a></li> 
        <li><a href="<?=base_url('Admin_Control/cancelled_leads_list');?>"><i class="fa fa-table"></i> <span>All Cancelled Receipt </span></a></li> 
         <li><a href="<?=base_url('Admin_Control/add_lead');?>"><img src="<?=base_url();?>/img/list.png"> <span>Add Data</span></a>
         </li>
         <?php } ?>
         
         <?php  if($_SESSION['user_type']==1  ){ ?>
        <li><a href="<?=base_url('Admin_Control/leads_list');?>"><i class="fa fa-table"></i> <span>All Payment Receipt </span></a></li> 
        <li><a href="<?=base_url('Admin_Control/cancelled_leads_list');?>"><i class="fa fa-table"></i> <span>All Cancelled Receipt </span></a></li> 
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