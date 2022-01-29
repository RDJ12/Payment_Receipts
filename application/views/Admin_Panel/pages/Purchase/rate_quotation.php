

  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Remark</li>
      </ol>
    </nav>
    <form method="POST" action="<?=base_url('Admin_Control/rate_quotation/');?>" enctype="multipart/form-data">
        
        
     
       <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Rate & Quotation <span></span></h3>
                    <p>
                        <?php
                         $rv=$this->db->select('*')->where('id',$lead_id)->get('leads')->row();
                         //var_dump($this->db->last_query());
                         $sales_type=['1'=>'Domestic','2'=>'Export'];
                      $lead_type=['1'=>'Direct Lead','2'=>'Purchase Lead','3'=>'Catalogue View Lead'];
                      
                      $this->db->select('users.fname,users.lname');
                      $this->db->join('users','users.id=lead_purchase_mapping.assigned_by');
                      $this->db->where('lead_purchase_mapping.lead_id',$lead_id);
                      $rrss=$this->db->get('lead_purchase_mapping')->row();
                        ?>
                         Assigned By:- <?=$rrss->fname." ".$rrss->lname;?><br> 
                         Sales Type:- <?=$sales_type[$rv->sales_type];?><br> 
                         Lead Type:- <?=$lead_type[$rv->lead_type] ;?><br>
                         Product Name:- <?=$rv->product_name;?><br>
                         Qty:- <?=$rv->qty;?><br>
                         Dated:- <?=$rv->dated;?>,
                         Specification:- <?=$rv->specification;?><br>
                         Place Of Delivery:- <?=$rv->place_of_delivery;?>
                    </p>
                </div>
                <div class="card-body">
                         <div class="form-group">
                            <label>Rate</label>
                            <input  name="rate" required  class="form-control input-style"  value="<?php if(isset($remark_detail->rate)){echo $remark_detail->rate;} ?>" >
                        </div>
                        <div class="form-group">
                            <label>Purchase Remark</label>
                            <textarea  name="remark" id="product_description"  class="form-control input-style"   ><?php if(isset($remark_detail->remark)){echo $remark_detail->remark;} ?></textarea>
                        </div>
                        
                      
                       <input type="hidden" value="<?php if(isset($lead_id)){echo $lead_id;} ?>" name="id">
                        <input type="hidden" value="<?php if(isset($remark_detail->id)){echo $remark_detail->id;} ?>" name="q_id">
                        
                        <?php if($_SESSION['user_type']!=5){ ?>
                         <div class="form-group">
                            <input type="submit" class="form-control input-style" id="exampleInputPassword1">
                        </div>
                      <?php } ?>
                  
                   
                </div>
            </div>
            
            
            
            
            
              
            
            
   

    
</form>
  </div>
  <!-- //content -->
</div>
<!-- main content end-->

 