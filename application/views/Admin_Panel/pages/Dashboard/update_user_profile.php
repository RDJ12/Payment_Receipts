

  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Update Profile</li>
      </ol>
    </nav>
    <form method="POST" action="<?=base_url('Admin_Control/update_user_profile/');?>" enctype="multipart/form-data">
        
        
     
       <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Detail <span></span></h3>
                </div>
                <div class="card-body">
                    
                        <div class="form-group">
                            <label class="input__label">Profile Pic</label>
                            <input  name="profile_picture" type="file" class="form-control input-style" >
                        </div>
                   
                        <div class="form-group">
                            <label class="input__label">First Name</label>
                            <input  name="fname" type="text" class="form-control input-style" 
                                aria-describedby="emailHelp" required value="<?=(($profile)?$profile->fname:'');?>">
                        </div>
                        
                        <div class="form-group">
                            <label class="input__label">Last Name</label>
                            <input  name="lname" type="text" class="form-control input-style" 
                                aria-describedby="emailHelp" required value="<?=(($profile)?$profile->lname:'');?>">
                        </div>
                        
                       <div class="form-group">
                            <label class="input__label">Mobile No.</label>
                            <input  name="mobile" type="number" class="form-control input-style" id="mobile"
                                aria-describedby="emailHelp" required value="<?=(($profile)?$profile->mobile:'');?>">
                                <span style="color:red;" id="err_mobile"></span>
                        </div>
                        
                        <div class="form-group">
                            <label class="input__label">Email</label>
                            <input  name="email" type="text" class="form-control input-style" id="email"
                                aria-describedby="emailHelp" required value="<?=(($profile)?$profile->email:'');?>">
                                <span style="color:red;" id="err_email"></span>
                        </div>
                        
                          <div class="form-group">
                            <label class="input__label">Password <span style="color:red;">(* Enter only if you want to replace old Password)</span></label>
                            <input  name="password" type="text" class="form-control input-style" id="exampleInputEmail1"
                                aria-describedby="emailHelp"  >
                        </div>
                    
                       
                        
                        <input type="hidden" value="<?=(($profile)?$profile->id:'');?>" name="id" id="user_id">
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

 