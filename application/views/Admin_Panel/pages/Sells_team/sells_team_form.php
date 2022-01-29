

  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sales</li>
      </ol>
    </nav>
    <form method="POST" action="<?=base_url('Admin_Control/add_sells_team/');?>" enctype="multipart/form-data">
        
        
     
       <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3><?=($editData!='')?'Edit':'Add';?> Detail <span></span></h3>
                </div>
                <div class="card-body">
                    
                     <div class="form-group">
                            <label class="input__label">Type</label>
                            <select  name="sells_type" class="form-control input-style"  required >
                                <option value="">--select--</option>
                                <option <?=(($editData->sells_type=='1')?'selected':'');?> value="1">Domestic</option>
                                <option  <?=(($editData->sells_type=='2')?'selected':'');?> value="2">Export</option>
                           </select>
                        </div>
                   
                        <div class="form-group">
                            <label class="input__label">First Name</label>
                            <input  name="fname" type="text" class="form-control input-style" 
                                aria-describedby="emailHelp" required value="<?=(($editData)?$editData->fname:'');?>">
                        </div>
                        
                        <div class="form-group">
                            <label class="input__label">Last Name</label>
                            <input  name="lname" type="text" class="form-control input-style" 
                                aria-describedby="emailHelp" required value="<?=(($editData)?$editData->lname:'');?>">
                        </div>
                        
                       <div class="form-group">
                            <label class="input__label">Mobile No.</label>
                            <input  name="mobile" type="text" class="form-control input-style" id="mobile"
                                aria-describedby="emailHelp" required value="<?=(($editData)?$editData->mobile:'');?>">
                                <span style="color:red;" id="err_mobile"></span>
                        </div>
                        
                        <div class="form-group">
                            <label class="input__label">Email</label>
                            <input  name="email" type="email" class="form-control input-style" id="email"
                                aria-describedby="emailHelp" required value="<?=(($editData)?$editData->email:'');?>">
                                <span style="color:red;" id="err_email"></span>
                        </div>
                        
                          <div class="form-group">
                            <label class="input__label">Password <span style="color:red;"></span></label>
                            <input  name="password" type="text" class="form-control input-style" id="exampleInputEmail1"
                                aria-describedby="emailHelp"   <?=($editData!='')?'':'required';?>>
                        </div>
                        
                          <div class="form-group">
                            <label class="input__label">Offer letter <span style="color:red;"></span></label>
                            <input  name="offer_letter" type="file" class="form-control input-style" 
                                aria-describedby="emailHelp"  >
                        </div>
                        
                        <div class="form-group">
                            <label class="input__label">Agreement <span style="color:red;"></span></label>
                            <input  name="agreement" type="file" class="form-control input-style" 
                                aria-describedby="emailHelp"  >
                        </div>
                        
                        <input type="hidden" value="<?=(($editData)?$editData->id:'');?>" name="id">
                         <div class="form-group">
                            <input type="submit" class="form-control input-style" id="exampleInputPassword1">
                        </div>
                      
                     
                   
                </div>
            </div>
            
            
            
            
            
              
            
            
   

    
</form>
  </div>
  <!-- //content -->
</div>
<!-- main content end-->

 