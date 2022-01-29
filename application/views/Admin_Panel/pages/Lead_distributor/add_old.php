

  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Old</li>
      </ol>
    </nav>
    <form method="POST" action="<?=base_url('Admin_Control/add_old/');?>" enctype="multipart/form-data">
        
        
     
       <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3><?php if(isset($edit_data) && !empty($edit_data)){ echo"Update ";}else{echo"Add ";}  ?>Detail <span></span></h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label class="input__label">Company name</label>
                            <input  name="company_name" type="text" class="form-control input-style" 
                                aria-describedby="emailHelp" required value="<?=(($edit_data)?$edit_data->company_name:'');?>">
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label class="input__label">Buyer Name</label>
                            <input  name="buyer_name" type="text" class="form-control input-style" 
                                aria-describedby="emailHelp" required value="<?=(($edit_data)?$edit_data->buyer_name:'');?>">
                        </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                             <div class="form-group">
                            <label class="input__label">Buyer Address</label>
                            <input  name="buyer_address" type="text" class="form-control input-style" 
                                aria-describedby="emailHelp" required value="<?=(($edit_data)?$edit_data->buyer_company_name:'');?>">
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label class="input__label">Contact No.</label>
                            <input  autocomplete="off" name="mobile" type="text" class="form-control input-style" id="mobile_lead"
                                aria-describedby="emailHelp" required value="<?=(($edit_data)?$edit_data->mobile:'');?>">
                                <span style="color:red;" id="err_mobile"></span>
                        </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                             <div class="form-group">
                            <label class="input__label">Email</label>
                            <input  autocomplete="off" name="email" type="email" class="form-control input-style" id="email_lead"
                                aria-describedby="emailHelp" required value="<?=(($edit_data)?$edit_data->email:'');?>">
                                <span style="color:red;" id="err_email"></span>
                        </div>
                        
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                            <label class="input__label">Date <span style="color:red;"></span></label>
                            <input required name="dated" type="date" class="form-control input-style" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="<?php  $dd=date('Y-m-d'); if(!empty($edit_data->dated)){echo $edit_data->dated;}else {echo $dd;}?>" > 
                        </div>
                        </div>
                    </div>

                          <div class="form-group">
                            <label class="input__label">Product Detail</label>
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th>GST</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <tr>
                                        <td><input type="text" name="product_name[]" required></td>
                                        <td><input type="number" name="qty[]" step="any" required></td>
                                        <td><input type="number" name="price[]"  step="any" required></td>
                                        <td><input type="number" name="gst[]"  step="any" required></td>
                                        <td><a class="btn btn-xs btn-success text-white" id="add_new">+</a></td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>
                        </div>
                        
                        <input type="hidden" value="<?=(($edit_data)?$edit_data->id:'');?>" name="id" id="lid">
                         <div class="form-group">
                            <input type="submit" class="form-control input-style btn-success" id="exampleInputPassword1">
                        </div>
                      
                     
                   
                </div>
            </div>
            
            
            
            
            
              
            
            
   

    
</form>
  </div>
  <!-- //content -->


  <!-- content -->
  <div class="container-fluid">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">All Old</li>
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
                           <th>Buyer Name</th>
                           <th>Address</th>
                           <th>Mobile</th>
                           <th>Email</th>
                           <th>Dated</th>
                           <th>Company</th>
                           <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                        $r=1; 
                      foreach($allold as $rv){ ?>
                         <tr>
                             <td><?=$r++;?></td>
                             <td><?=$rv->buyer_name;?></td>
                             <td><?=$rv->buyer_address;?></td>
                             <td><?=$rv->mobile;?></td>
                             <td><?=$rv->email;?></td>
                             <td><?=$rv->dated;?></td>
                             <td><?=$rv->company_name;?></td>
                             <td><a class="btn btn-xs btn-success text-white" onclick="show_old_mapping(<?=$rv->id;?>)">View</a></td>
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

 
 
 <div id="myModalold" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body" >
         <table class="table table-bordered">
             <thead>
                 <tr>
                     <th>Product</th>
                     <th>Qty</th>
                     <th>Price</th>
                     <th>GST</th>
                 </tr>
             </thead>
             <tbody id="oldm">
                 
             </tbody>
         </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 