
  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <div class="welcome-msg pt-3 pb-4">
      <h1>Hi <span class="text-primary"><?=$profile->fname." ".$profile->lname;?></span>, Welcome back</h1>
      <p>Very detailed & featured admin.</p>
    </div>

    <!-- statistics data -->
    <?php if($_SESSION['user_type']==3 ){  ?>
     <div class="statistics">
        <div class="row">
        <div class="col-xl-6 pr-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
               <a href="<?=base_url('Admin_Control/domestic_lead');?>">
                    <i class="lnr lnr-users"> </i>
                <h3 class="text-primary number">Domestic</h3>
                <p class="stat-text">Domestic-Leads-<?=get_column('count(id)','leads',["sales_type"=>"1","sales_member"=>$_SESSION['user_id']],'count(id)');?></p>
               </a>
              </div>
            </div>
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
               <a href="<?=base_url('Admin_Control/export_lead');?>">
                    <i class="lnr lnr-users"> </i>
                <h3 class="text-primary number">Export</h3>
                <p class="stat-text">Export-Leads-<?=get_column('count(id)','leads',["sales_type"=>"2","sales_member"=>$_SESSION['user_id']],'count(id)');?></p>
               </a>
              </div>
            </div>
          </div>
       </div>
    </div>
 </div>
            
    <?php }  ?>
    
    <?php if($_SESSION['user_type']==1 || $_SESSION['user_type']==2 ){  ?>
    <div class="statistics">
       
      
      <div class="row">
        <div class="col-xl-6 pr-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border p-4 corp">
                <i class="lnr lnr-users text-white"> </i>
                <h3 class="text-white number"><?=get_column('count(id)','users',["user_type ="=>1],'count(id)');?></h3>
                <p class="stat-text text-white">Total Sales Team Member</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border sun p-4">
                <i class="lnr lnr-eye text-white"> </i>
                <h3 class="number text-white"><?=get_column('count(id)','leads',["account_verification !="=>0],'count(id)');?></h3>
                <p class="stat-text text-white">Total Payment Received</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 pl-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border def p-4">
                <i class="lnr lnr-cloud-download text-white"> </i>
                <h3 class="number text-white"><?=get_column('count(id)','leads',["created_on REGEXP"=>date("Y-m-d")],'count(id)');?></h3>
                <p class="stat-text text-white">Today Payment Received</p>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
     <?php }  ?>
    <!-- //statistics data -->

   

  </div>
  <!-- //content -->
</div>
<!-- main content end-->

 