
  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sells Team List</li>
      </ol>
    </nav>
    
     <!-- data tables -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <h3 class="card__title position-absolute">Sells Team Info</h3>
            <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                  <tr>     
                           <th>S.no</th>
                           <th>Emp Id</th>
                           <th>Type</th>
                           
                           <?php if($_SESSION['user_type']==1){ ?>
                           <th>Mobile</th>
                           <th>Email</th>
                           <th>Offer Letter</th>
                           <th>Agreement</th>
                           <?php } ?>
                           <th>Name</th>
                           <th>Status</th>
                           <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                        $r=1; 
                      foreach($allUser as $rv){
                      $status=['0'=>'<span class="bg-danger">Inactive</span>','1'=>'<span  class="bg-success">Active</span>'];
                      $type=['1'=>'Domestic','2'=>'Export'];
                      ?>
                         <tr>
                             <td><?=$r++;?></td>
                             <td><?=$rv->emp_id;?></td>
                             <td><?=$type[$rv->sells_type];?></td>
                              <?php if($_SESSION['user_type']==1){ ?>
                                  <td><?=$rv->mobile;?></td>
                             <td><?=$rv->email;?></td>
                             <td><a href="<?=base_url('/assets/offer_letter/'.$rv->offer_letter);?>" target="_blank">view</a></td>
                             <td><a href="<?=base_url('/assets/agreement/'.$rv->agreement);?>" target="_blank">view</a></td>
                                 <?php } ?>
                             <td><?=$rv->fname.' '.$rv->lname ;?></td>
                           
                             <td><?=$status[$rv->status];?></td>
                             <td>
                                 <?php if($_SESSION['user_type']==1){ ?>
                                 <a href="<?=base_url('/Admin_Control/add_sells_team/'.$rv->id);?>">Edit</a>
                                 <?php } ?>
                                 
                                 <?php if($_SESSION['user_type']==2){ ?>
                                 <a href="<?=base_url('/Admin_Control/leads_list/'.$rv->id);?>">view</a>
                                 <?php } ?>
                             </td>
                         </tr>
                       <?php } ?>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- //data tables -->
   

    

  </div>
  <!-- //content -->
</div>
<!-- main content end-->

 