
  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lead Distribtor List</li>
      </ol>
    </nav>
    
     <!-- data tables -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <h3 class="card__title position-absolute">Lead Distribtor Info</h3>
            <div class="table-responsive">
              <table id="example" class="table table-bordered mt-5 ldl_table">
                <thead>
                  <tr>     
                           <th>S.no</th>
                           <th class="ldl_table_col2">Emp Id</th>
                           <th class="ldl_table_col3">Name</th>
                           <th>Mobile</th>
                           <th>Email</th>
                           <!--<th>Offer Letter</th>-->
                           <!--<th>Agreement</th>-->
                           <th>Status</th>
                           <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                        $r=1; 
                      foreach($allUser as $rv){
                      $status=['0'=>'<span class="bg-danger">Inactive</span>','1'=>'<span  class="bg-success">Active</span>'];
                      ?>
                         <tr>
                             <td><?=$r++;?></td>
                             <td><?=$rv->emp_id;?></td>
                             <td><?=$rv->fname.' '.$rv->lname ;?>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-xs btn-primary" href="<?=base_url('Admin_Control/user_leads_list/'.$rv->id);?>">View</a></td>
                             <td><?=$rv->mobile;?></td>
                             <td><?=$rv->email;?></td>
                             <!--<td class="text-center"><a class="view_btn" href="<?=base_url('/assets/offer_letter/'.$rv->offer_letter);?>" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> view</a></td>-->
                             <!--<td class="text-center"><a class="view_btn" href="<?=base_url('/assets/agreement/'.$rv->agreement);?>" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> view</a></td>-->
                             <td class="text-center status_btn"><?=$status[$rv->status];?></td>
                             <td class="text-center"><a class="icon_size" href="<?=base_url('/Admin_Control/add_lead_distributor/'.$rv->id);?>"><i class="fa fa-pencil"></i></a></td>
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

 