
  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">All Leads</li>
      </ol>
    </nav>
    
     <!-- data tables -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <h3 class="card__title position-absolute">Leads Info</h3>
            <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                  <tr>     
                           <th>S.no</th>
                           <th>Assigned By</th>
                           <th>Sales Type</th>
                           <!--<th>Lead Type</th>-->
                           <th>Product Name</th>
                           <th>Qty</th>
                           <th>Specification1</th>
                           <th>Specification2</th>
                           <th>Specification3</th>
                           <th>Specification4</th>
                           <th>Additional Specification</th>
                           <th>Place Of Delivery</th>
                           <th>Remark</th>
                           <th>Status</th>
                           <th>Dated</th>
                           <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                        $r=1; 
                      foreach($allleads as $rv){
                      $status=['0'=>'<span class="bg-danger">Inactive</span>','1'=>'<span  class="bg-success">Active</span>'];
                      $sales_type=['1'=>'Domestic','2'=>'Export'];
                      $lead_type=['1'=>'Direct Lead','2'=>'Purchase Lead','3'=>'Catalogue View Lead'];
                      ?>
                         <tr>
                             <td><?=$r++;?></td>
                             <td><?=$rv->fname." ".$rv->lname;?></td>
                             <td><?=$sales_type[$rv->sales_type];?></td>
                             <!--<td><?=$lead_type[$rv->lead_type] ;?></td>-->
                             <td><?=$rv->product_name;?></td>
                             <td><?=$rv->qty;?></td>
                             <td><?=$rv->specification;?></td>
                             <td><?=$rv->specification2;?></td>
                             <td><?=$rv->specification3;?></td>
                             <td><?=$rv->specification4;?></td>
                             <td><?=$rv->specification5;?></td>
                             <td><?=$rv->place_of_delivery;?></td>
                             <td><a href="<?=base_url('/Admin_Control/add_remark/'.$rv->id);?>" target="_blank">Remark</a></td>
                             <td class="stat"><?=$status[$rv->status];?></td>
                             <td><?=date('d-m-Y',strtotime($rv->dated));?></td>
                             <td>
                                 
                                 <a class="cmn2" href="<?=base_url('Admin_Control/view_rate_quotation/'.$rv->id);?>">View Rate / Quotation </a>
                                 
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

 