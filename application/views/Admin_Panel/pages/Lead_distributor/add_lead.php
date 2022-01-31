

  <!-- main content start -->
<div class="main-content mform">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Lead</li>
      </ol>
    </nav>
    <form method="POST" action="<?=base_url('Admin_Control/add_lead/');?>" enctype="multipart/form-data">
        
        
     
       <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3><?php if(isset($edit_data) && !empty($edit_data)){ echo"Update ";}else{echo"Add ";}  ?>Detail <span></span></h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="input__label">New/Existing</label>
                                <select id="new_existing" onchange="checkValue(this)" name="new_existing" class="form-control input-style"  required  >
                                    <option value="">--select--</option>
                                    <option <?php if(isset($edit_data) && !empty($edit_data)){ ?> <?=(($edit_data->new_existing=='New')?'selected':'');  } ?> value="New">New</option>
                                    <option <?php if(isset($edit_data) && !empty($edit_data)){ ?><?=(($edit_data->new_existing=='Existing')?'selected':''); }?> value="Existing">Existing</option>
                                </select>
                         </div>
                         <div class="form-group" id="case_div">
                            <label class="input__label">Case Id</label>
                            <input  name="case_id" type="number" class="form-control input-style" required
                               placeholder="Case Id" id="case_id"  value="<?=(($edit_data)?$edit_data->case_id:'');?>"  <?php if(!empty($edit_data) && $_SESSION['user_type']==3){ echo "readonly ";} ?>>
                           </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label class="input__label">Patient Name</label>
                            <input  name="buyer_name" type="text" class="form-control input-style" required
                                placeholder="Name"  required value="<?=(($edit_data)?$edit_data->buyer_name:'');?>"  <?php if(!empty($edit_data) && $_SESSION['user_type']==3){ echo "readonly ";} ?>>
                           </div> 
                           <div class="form-group">
                            <label class="input__label">Doctor Name</label>
                            <input  name="doctor_name" type="text" class="form-control input-style" required
                                placeholder="Doctor Name" required value="<?=(($edit_data)?$edit_data->doctor_name:'');?>"  <?php if(!empty($edit_data) && $_SESSION['user_type']==3){ echo "readonly ";} ?>>
                           </div>    
                        </div>
                    </div>
                         
                          <div class="form-group">
                            <label class="input__label">Address</label>
                            <input  name="address" type="text" class="form-control input-style" 
                            placeholder="Address" required value="<?=(($edit_data)?$edit_data->address:'');?>"  <?php if(!empty($edit_data) && $_SESSION['user_type']==3){ echo "readonly ";} ?>>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                            <label class="input__label">State</label>
                            <select class="form-control input-style" name="state" id="state">
                                <option value="">--select--</option>
                                <?php
                                  foreach($states as $ss)
                                  { ?>
                                      <option <?php if(isset($edit_data) && !empty($edit_data)){ ?> <?=(($edit_data->state==$ss->StateID)?'selected':''); }?> value="<?=$ss->StateID;?>"><?=$ss->StateName;?></option>
                               <?php   }
                                ?>
                            </select>
                        </div>   
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                            <label class="input__label">City</label>
                            <select class="form-control input-style " id="city" name="city" required>
                            </select>
                        </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                            <label class="input__label">Pincode</label>
                            <input  name="pincode" type="number" class="form-control input-style" 
                              placeholder="Pincode" required value="<?=(($edit_data)?$edit_data->pincode:'');?>"  <?php if(!empty($edit_data) && $_SESSION['user_type']==3){ echo "readonly ";} ?>>
                        </div>
                                    </div>
                        </div>
                         
                         <div class="row">
                             <div class="col-md-3">
                                <div class="form-group">
                            <label class="input__label">Email</label>
                            <input  <?php if(!empty($edit_data) && $_SESSION['user_type']==3){ echo "readonly ";} ?> autocomplete="off" name="email" type="email" class="form-control input-style" id="email_lead"
                                placeholder="abc@mail.com" required value="<?=(($edit_data)?$edit_data->email:'');?>">
                                
                        </div>
                        <div class="form-group">
                           <span style="color:red;" id="err_email"></span>
                        </div>
                             </div>
                             <div class="col-md-3">
                                 <div class="form-group">
                            <label class="input__label">Phone</label>
                            <input  <?php if(!empty($edit_data) && $_SESSION['user_type']==3){ echo "readonly ";} ?> autocomplete="off"  pattern="[1-9]{1}[0-9]{9}" maxlength="10" name="mobile" type="text" class="form-control input-style" id="mobile_lead" 
                              placeholder="Phone" required value="<?=(($edit_data)?$edit_data->mobile:'');?>">
                                
                        </div>
                        
                        
                        <div class="form-group">
                                <span style="color:red;" id="err_mobile"></span>
                        </div>
                                 </div>
                        <!--         <div class="col-md-3">-->
                        <!--             <div class="form-group">-->
                        <!--    <label class="input__label">Item</label>-->
                        <!--    <input  name="product_name" type="text" class="form-control input-style" -->
                        <!--      placeholder="Item"  value="<?=(($edit_data)?$edit_data->product_name:'');?>"  <?php if(!empty($edit_data) && $_SESSION['user_type']==3){ echo "readonly ";} ?>>-->
                        <!--</div>-->
                        <!--             </div>-->
                                     <div class="col-md-3">
                                         <div class="form-group">
                            <label class="input__label">Amount</label>
                            <input  name="amount" type="number" class="form-control input-style" 
                              placeholder="Amount" required value="<?=(($edit_data)?$edit_data->amount:'');?>"  <?php if(!empty($edit_data) && $_SESSION['user_type']==3){ echo "readonly ";} ?>>
                        </div>
                                         </div>
                         </div>
                        <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                            <label class="input__label">GST</label>
                            <input  name="gst" type="text" class="form-control input-style" 
                                placeholder="GST"  value="<?=(($edit_data)?$edit_data->gst:'');?>"  <?php if(!empty($edit_data) && $_SESSION['user_type']==3){ echo "readonly ";} ?>>
                        </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                            <label class="input__label">Payment Recieved For</label>
                            <select id="payment_recieved_for" name="payment_recieved_for" class="form-control input-style"  required  >
                                <option value="">--select--</option>
                                <option <?php if(isset($edit_data) && !empty($edit_data)){ ?> <?=(($edit_data->payment_recieved_for=='Scan')?'selected':''); }?> value="Scan">Scan</option>
                                <option  <?php if(isset($edit_data) && !empty($edit_data)){ ?> <?=(($edit_data->payment_recieved_for=='New case booking')?'selected':''); }?>  value="New case booking">New case booking</option>
                                <option   <?php if(isset($edit_data) && !empty($edit_data)){ ?><?=(($edit_data->payment_recieved_for=='Retainer')?'selected':''); } ?> value="Retainer">Retainer</option>
                                <option  <?php if(isset($edit_data) && !empty($edit_data)){ ?> <?=(($edit_data->payment_recieved_for=='Other')?'selected':''); }?>  value="Other">Other</option>
                            </select>
                         </div>
                         <div class="form-group" id="other_div">
                            <label class="input__label">Other</label>
                            <input name="other" type="text" class="form-control input-style" 
                                placeholder="Other"  value="<?=(($edit_data)?$edit_data->other:'');?>"  <?php if(!empty($edit_data) && $_SESSION['user_type']==3){ echo "readonly ";} ?>>
                        </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                            <label class="input__label">Mode</label>
                            <select  name="mode" class="form-control input-style" required >
                                <option value="">-select-</option>
                                <option <?php if(isset($edit_data) && !empty($edit_data)){ ?><?php if(isset($edit_data)){ if($edit_data->mode=='1'){echo"selected";} }  }?> value="1">Cheque</option>
                                <option <?php if(isset($edit_data) && !empty($edit_data)){ ?> <?php if(isset($edit_data)){ if($edit_data->mode=='2'){echo"selected";} }  }?>  value="2">Online</option>
                                <option <?php if(isset($edit_data) && !empty($edit_data)){ ?> <?php if(isset($edit_data)){ if($edit_data->mode=='3'){echo"selected";} } }  ?>  value="3">Cash</option>
                            </select>
                        </div>
                                </div>
                                
                              
                        </div>
                         
                        <div class="form-group" >
                            <label class="input__label">Additonal Remarks</label>
                            <input  name="additonal_remarks" type="text" class="form-control input-style" 
                                placeholder="Other"  value="<?=(($edit_data)?$edit_data->additonal_remarks:'');?>"  <?php if(!empty($edit_data) && $_SESSION['user_type']==3){ echo "readonly ";} ?>>
                        </div>
                        
                           <div class="form-group" >
                            <label class="input__label">Generated By</label>
                            <input  type="text" class="form-control input-style" 
                                placeholder="<?=get_column('fname','users',['id'=>$_SESSION['user_id']],'fname');?>"  >
                        </div>
                        
                        
                        <input type="hidden" value="<?=(($edit_data)?$edit_data->id:'');?>" name="id" id="lid">
                         <div class="form-group">
                            <input type="submit" class="form-control input-style btn-primary" id="exampleInputPassword1">
                        </div>
                </div>
            </div>
</form>
  </div>
  <!-- //content -->
</div>
<!-- main content end-->

<script>
  const checkValue = (element) =>{
      let caseId = document.getElementById("case_id");
      if(element.value.trim()=='New'){
        $(caseId).removeAttr("required");
      }
      else{
        $(caseId).attr("required");
      }
  }
</script>