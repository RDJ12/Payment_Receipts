
  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">All Cancelled Receipt </li>
      </ol>
    </nav>
    
    
     <!-- data tables -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <!--<h3 class="card__title position-absolute">Leads Info</h3>-->
            <div class="table-responsive">
              <table id="example" >
                <thead>
                  <tr>     
                           <th>S.no</th>
                           <th>Name</th>
                           <th>Mobile</th>
                           <th>Email</th>
                           <th>Address</th>
                           <th>Item</th>
                           <th>Amount</th>
                           <th>Mode</th>
                           <th>Created By</th>
                           <th>Created Date</th>
                           <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                        $r=1; 
                      foreach($allleads as $rv){
                          $arr=array('1'=>'Cheque','2'=>'Online','3'=>'Cash');
                      ?>
                         <tr>
                             <td><?=$r++;?></td>
                             <td><?=$rv->buyer_name;?></td>
                             <td><?=$rv->mobile;?></td>
                             <td><?=$rv->email;?></td>
                             <td><?=$rv->address;?></td>
                             <td><?=$rv->product_name;?></td>
                             <td><?=$rv->amount;?></td>
                             <td><?=$arr[$rv->mode];?></td>
                             <td><?= $rv->fname; ?></td>
                             <td><?= $rv->created_on; ?></td>
                             <td>    
                             <?php if($_SESSION['user_type']==1) {?> 
                                <a class="cmn icon_size" href="<?=base_url('Admin_Control/add_lead/'.$rv->id);?>"><i class="fa fa-pencil"></i></a>
                                <?php }?>  
                                <a target="_blank" class="cmn icon_size" href="<?=base_url('Admin_Control/view_lead/'.$rv->id);?>"><i class="fa fa-eye"></i></a>
                                <a class="cmn icon_size" href="<?=base_url('Admin_Control/invoice/'.$rv->id);?>"><i class="fa fa-file-pdf-o"></i></a>
                                <?php if($_SESSION['user_type']==1 || $_SESSION['user_type']==2) {?> 
                                <a onclick="return confirm('Do You Want To Activate ?')" title="Reactivate" class="cmn icon_size" href="<?=base_url('Admin_Control/active/'.$rv->id);?>"><i class="fa fa-check"></i></a>
                                <?php }?> 
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

 