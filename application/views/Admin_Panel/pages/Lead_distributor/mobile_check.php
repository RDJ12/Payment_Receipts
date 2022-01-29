

  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Check</li>
      </ol>
    </nav>
    <form method="POST" action="<?=base_url('Admin_Control/add_lead/');?>" enctype="multipart/form-data">
        
        
     
       <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3><?php if(isset($edit_data) && !empty($edit_data)){ echo"Update ";}else{echo"Mobile ";}  ?>Check <span></span></h3>
                </div>
                <div class="card-body">
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                            <label class="input__label">Contact No.</label>
                            <input  autocomplete="off" name="mobile" type="text" class="form-control input-style" id="mobile_lead"
                                aria-describedby="emailHelp" required value="<?=(($edit_data)?$edit_data->mobile:'');?>">
                                <span style="color:red;" id="err_mobile"></span>
                        </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                            <label class="input__label">Email</label>
                            <input  autocomplete="off" name="email" type="email" class="form-control input-style" id="email_lead"
                                aria-describedby="emailHelp" required value="<?=(($edit_data)?$edit_data->email:'');?>">
                                <span style="color:red;" id="err_email"></span>
                        </div>
                                </div>
                        </div>
                        <button class="btn btn-primary">Check</button>
                       
                        
                        
                        
                         
                        
                        
                        <input type="hidden" value="<?=(($edit_data)?$edit_data->id:'');?>" name="id" id="lid">
                        <!-- <div class="form-group">-->
                        <!--    <input type="submit" class="form-control input-style" id="exampleInputPassword1">-->
                        <!--</div>-->
                      
                     
                   
                </div>
            </div>
            
            
            
            
            
              
            
            
   

    
</form>
  </div>
  <!-- //content -->
</div>
<!-- main content end-->

 