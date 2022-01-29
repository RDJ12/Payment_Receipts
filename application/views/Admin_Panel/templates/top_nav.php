
  <!-- header-starts -->
  <div class="header sticky-header" style="display:<?php if($this->uri->segment(2)=='view_lead'){echo"none";} ?>">
    
    <!-- notification menu start -->
    <div class="menu-right">
        <div class="logo-sec">
        <img src="<?=base_url();?>/img/logo.png" style="width: 60px;">
    </div>
      <div class="navbar user-panel-top">
        <div class="search-box">
           <h2> Welcome To  
           <?php
              if($_SESSION['user_type']==1)
              {
                 echo "Super Admin Panel"; 
              }
              else if($_SESSION['user_type']==2)
              {
                 echo "Accountant"; 
              }
              else if($_SESSION['user_type']==3)
              {
                 echo "LD"; 
              }
              
            ?>
            </h2>
          <!--<form action="#search-results.html" method="get">-->
          <!--  <input class="search-input" placeholder="Search Here..." type="search" id="search">-->
          <!--  <button class="search-submit" value=""><span class="fa fa-search"></span></button>-->
          <!--</form>-->
        </div>
        <div class="user-dropdown-details d-flex">
          <div class="profile_details_left">
            <ul class="nofitications-dropdown">
              <li class="dropdown">
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i-->
                <!--    class="fa fa-bell-o"></i><span class="badge blue">3</span></a>-->
                <ul class="dropdown-menu">
                  <li>
                    <div class="notification_header">
                      <h3>You have 3 new notifications</h3>
                    </div>
                  </li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="<?=base_url();?>/assets/admin/images/avatar1.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Johnson purchased template</p>
                        <span>Just Now</span>
                      </div>
                    </a></li>
                  <li class="odd"><a href="#" class="grid">
                      <div class="user_img"><img src="<?=base_url();?>/assets/admin/images/avatar2.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>New customer registered </p>
                        <span>1 hour ago</span>
                      </div>
                    </a></li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="<?=base_url();?>/assets/admin/images/avatar3.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Lorem ipsum dolor sit amet </p>
                        <span>2 hours ago</span>
                      </div>
                    </a></li>
                  <li>
                    <div class="notification_bottom">
                      <a href="#all" class="bg-primary">See all notifications</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                  <?php if($_SESSION['user_type']==3){
                       $result1=$this->db->select('lead_purchase_mapping.lead_id')
                                         ->join('lead_purchase_mapping','lead_purchase_mapping.lead_id=leads.id')
                                         ->where('leads.sales_member',$_SESSION['user_id'])
                                         ->get('leads')->result();
                                         
                                         $ignore=array();
                                  
                                  foreach($result1 as $v)
                                  {
                                      $ignore[]=$v->lead_id;
                                  }
                                  
                                         if(empty($ignore))
                                         {
                                             $ignore[]=0;
                                         }
                                         
                  $result=$this->db->select('id,sales_type,lead_type,buyer_name')->where('sales_member',$_SESSION['user_id'])->where_not_in('leads.id',$ignore)->get('leads')->result();
                  $result2=$this->db->select('id,sales_type,lead_type,buyer_name')->where('sales_member',$_SESSION['user_id'])->where_not_in('leads.id',$ignore)->order_by('leads.id','DESC')->limit('5')->get('leads')->result();
                  ?>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-bell"></i><span class="badge blue"><?=(count($result)>0)?count($result):0;?></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="notification_header">
                      <h3>You have <?=count($result);?> new messages</h3>
                    </div>
                  </li>
                  <?php foreach($result2 as $tr){  ?>
                  <li>
                      <a href="<?=base_url('Admin_Control/');?><?=($tr->sales_type=='1')?'domestic_lead':'export_lead';?>" class="grid">
                      <div class="user_img">
                          <!--<img src="<?=base_url();?>/assets/admin/images/avatar1.jpg" alt="">-->
                          </div>
                      <div class="notification_desc">
                        <p><?=$tr->buyer_name;?></p>
                        <!--<span><?=$tr->buyer_name;?></span>-->
                      </div>
                    </a>
                  </li>
                 
                 <?php  }  ?>
                  
                  <!--<li>-->
                  <!--  <div class="notification_bottom">-->
                  <!--    <a href="#all" class="bg-primary">See all messages</a>-->
                  <!--  </div>-->
                  <!--</li>-->
                </ul>
                  <?php } ?>
                  
                      <?php if($_SESSION['user_type']==4){
                       $result1=$this->db->select('lead_retro_mapping.lead_id')
                                         ->join('lead_retro_mapping','lead_retro_mapping.lead_id=leads.id')
                                         ->where('lead_retro_mapping.assigned_by',$_SESSION['user_id'])
                                         ->get('leads')->result();
                                         
                                         $ignore=array();
                                  
                                  foreach($result1 as $v)
                                  {
                                      $ignore[]=$v->lead_id;
                                  }
                                  
                                         if(empty($ignore))
                                         {
                                             $ignore[]=0;
                                         }
                                         
                  $result=$this->db->select('lead_purchase_mapping.id')->where('lead_purchase_mapping.user_id',$_SESSION['user_id'])->where_not_in('lead_purchase_mapping.lead_id',$ignore)->get('lead_purchase_mapping')->result();
                 $result2=$this->db->select('leads.id,leads.sales_type,leads.lead_type,leads.buyer_name')->join('leads','leads.id=lead_purchase_mapping.lead_id')->where('lead_purchase_mapping.user_id',$_SESSION['user_id'])->where_not_in('lead_purchase_mapping.lead_id',$ignore)->order_by('leads.id','desc')->limit('5')->get('lead_purchase_mapping')->result();
                  ?>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-bell"></i><span class="badge blue"><?=(count($result)>0)?count($result):0;?></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="notification_header">
                      <h3>You have <?=count($result);?> new messages</h3>
                    </div>
                  </li>
                  <?php foreach($result2 as $tr){  ?>
                  <li>
                      <a href="<?=base_url('Admin_Control/leads_assigned');?>" class="grid">
                          
                      <div class="user_img">
                          <!--<img src="<?=base_url();?>/assets/admin/images/avatar1.jpg" alt=" ">-->
                          </div>
                      <div class="notification_desc">
                        <p><?=$tr->buyer_name;?></p>
                        <!--<span><?=$tr->buyer_name;?></span>-->
                      </div>
                    </a>
                  </li>
                 
                 <?php  }  ?>
                  
                  <li>
                    <div class="notification_bottom">
                      <a href="<?=base_url('Admin_Control/leads_assigned');?>" class="bg-primary">See all messages</a>
                    </div>
                  </li>
                </ul>
                  <?php } ?>
                  
                   <?php if($_SESSION['user_type']==5){
                       $result1=$this->db->select('retro_quotation.lead_id')
                                         ->where('retro_quotation.user_id',$_SESSION['user_id'])
                                         ->get('retro_quotation')->result();
                                         
                                         $ignore=array();
                                  
                                  foreach($result1 as $v)
                                  {
                                      $ignore[]=$v->lead_id;
                                  }
                                  
                                         if(empty($ignore))
                                         {
                                             $ignore[]=0;
                                         }
                                         
                  $result=$this->db->select('lead_retro_mapping.id')->where('lead_retro_mapping.user_id',$_SESSION['user_id'])->where_not_in('lead_retro_mapping.lead_id',$ignore)->get('lead_retro_mapping')->result();
                 $result2=$this->db->select('leads.id,leads.sales_type,leads.lead_type,leads.buyer_name')->join('leads','leads.id=lead_retro_mapping.lead_id')->where('lead_retro_mapping.user_id',$_SESSION['user_id'])->where_not_in('lead_retro_mapping.lead_id',$ignore)->order_by('leads.id','desc')->limit('5')->get('lead_retro_mapping')->result();
                  ?>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-bell"></i><span class="badge blue"><?=(count($result)>0)?count($result):0;?></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="notification_header">
                      <h3>You have <?=count($result);?> new messages</h3>
                    </div>
                  </li>
                  <?php foreach($result2 as $tr){  ?>
                  <li>
                      <a href="<?=base_url('Admin_Control/retro_leads_assigned');?>" class="grid">
                          
                      <div class="user_img">
                          <!--<img src="<?=base_url();?>/assets/admin/images/avatar1.jpg" alt=" ">-->
                          </div>
                      <div class="notification_desc">
                        <p><?=$tr->buyer_name;?></p>
                        <!--<span><?=$tr->buyer_name;?></span>-->
                      </div>
                    </a>
                  </li>
                 
                 <?php  }  ?>
                  
                  <li>
                    <div class="notification_bottom">
                      <a href="<?=base_url('Admin_Control/retro_leads_assigned');?>" class="bg-primary">See all messages</a>
                    </div>
                  </li>
                </ul>
                  <?php } ?>
                   
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i-->
                <!--    class="fa fa-bell"></i><span class="badge blue">.</span></a>-->
                <!--<ul class="dropdown-menu">-->
                <!--  <li>-->
                <!--    <div class="notification_header">-->
                <!--      <h3>You have 4 new messages</h3>-->
                <!--    </div>-->
                <!--  </li>-->
                <!--  <li><a href="#" class="grid">-->
                <!--      <div class="user_img"><img src="<?=base_url();?>/assets/admin/images/avatar1.jpg" alt=""></div>-->
                <!--      <div class="notification_desc">-->
                <!--        <p>Johnson purchased template</p>-->
                <!--        <span>Just Now</span>-->
                <!--      </div>-->
                <!--    </a></li>-->
                <!--  <li class="odd"><a href="#" class="grid">-->
                <!--      <div class="user_img"><img src="<?=base_url();?>/assets/admin/images/avatar2.jpg" alt=""></div>-->
                <!--      <div class="notification_desc">-->
                <!--        <p>New customer registered </p>-->
                <!--        <span>1 hour ago</span>-->
                <!--      </div>-->
                <!--    </a></li>-->
                <!--  <li><a href="#" class="grid">-->
                <!--      <div class="user_img"><img src="<?=base_url();?>/assets/admin/images/avatar3.jpg" alt=""></div>-->
                <!--      <div class="notification_desc">-->
                <!--        <p>Lorem ipsum dolor sit amet </p>-->
                <!--        <span>2 hours ago</span>-->
                <!--      </div>-->
                <!--    </a></li>-->
                <!--  <li><a href="#" class="grid">-->
                <!--      <div class="user_img"><img src="<?=base_url();?>/assets/admin/images/avatar1.jpg" alt=""></div>-->
                <!--      <div class="notification_desc">-->
                <!--        <p>Johnson purchased template</p>-->
                <!--        <span>Just Now</span>-->
                <!--      </div>-->
                <!--    </a></li>-->
                <!--  <li>-->
                <!--    <div class="notification_bottom">-->
                <!--      <a href="#all" class="bg-primary">See all messages</a>-->
                <!--    </div>-->
                <!--  </li>-->
                <!--</ul>-->
              </li>
            </ul>
          </div>
          <div class="profile_details">
            <ul>
              <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                  aria-expanded="false">
                  <div class="profile_img">
                    <img src="<?=base_url();?>/assets/profile_picture/<?=(($profile->profile_picture!='')?$profile->profile_picture:'profileimg.png');?>" class="rounded-circle" alt="" />
                    <div class="user-active">
                      <span></span>
                    </div>
                  </div>
                </a>
                <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                  <li class="user-info">
                    <h5 class="user-name"><?=(($profile)?$profile->fname:'');?></h5>
                    <span class="status ml-2">Available</span>
                  </li>
                  <li> <a href="<?=base_url('/Admin_Control/update_user_profile');?>"><i class="lnr lnr-user"></i>Basic Profile</a> </li>
                  <!--<li> <a href="#"><i class="lnr lnr-users"></i>1k Followers</a> </li>-->
                  <!--<li> <a href="#"><i class="lnr lnr-cog"></i>Setting</a> </li>-->
                  <!--<li> <a href="#"><i class="lnr lnr-heart"></i>100 Likes</a> </li>-->
                  <?php if($_SESSION['user_type']==3){ ?>
                  <li class="logout"> <a href="<?=base_url('/Admin_Control/user_leads_list/'.$_SESSION['user_id']);?>"><i class="fa fa-power-off"></i> Sales List</a> </li>
                  <?php } ?>
                  <li class="logout"> <a href="<?=base_url('/logout');?>"><i class="fa fa-power-off"></i> Logout</a> </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--notification menu end -->
  </div>
  <!-- //header-ends -->