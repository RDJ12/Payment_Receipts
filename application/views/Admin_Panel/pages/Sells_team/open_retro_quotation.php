

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
    <form method="POST" action="<?=base_url('Admin_Control/view_rate_quotation54645/');?>" enctype="multipart/form-data">
        
        
     
       <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Rate & Quotation <span></span></h3>
                    <p>
                        <?php $lead_id=$remark_detail->lead_id;
                         $rv=$this->db->select('*')->where('id',$lead_id)->get('leads')->row();
                         //var_dump($this->db->last_query());
                         $sales_type=['1'=>'Domestic','2'=>'Export'];
                      $lead_type=['1'=>'Direct Lead','2'=>'Purchase Lead','3'=>'Catalogue View Lead'];
                        ?>
                        
                         Sales Type:- <?=$sales_type[$rv->sales_type];?><br> 
                         Lead Type:- <?=$lead_type[$rv->lead_type] ;?><br>
                         Product Name:- <?=$rv->product_name;?><br>
                         Qty:- <?=$rv->qty;?><br>
                         Dated:- <?=$rv->dated;?><br>
                         Specification:- <?=$rv->specification;?><br>
                         Place Of Delivery:- <?=$rv->place_of_delivery;?>
                    </p>
                </div>
                <div class="card-body">
                         <div class="form-group">
                            <label>Rate</label>
                            <input   required  class="form-control input-style"  value="<?php if(isset($remark_detail->rate)){echo $remark_detail->rate;} ?>" >
                        </div>
                        <div class="form-group">
                            <label>Purchase Remark</label>
                            <textarea   id="product_description"  class="form-control input-style"   ><?php if(isset($remark_detail->remark)){echo $remark_detail->remark;} ?></textarea>
                        </div>
                        
                       
                        
                      
                       <!--<input type="hidden" value="<?php if(isset($lead_id)){echo $lead_id;} ?>" name="id">-->
                       <!-- <input type="hidden" value="<?php if(isset($retro_remark_detail->id)){echo $retro_remark_detail->id;} ?>" name="rq_id">-->
                        
                        
                        <!-- <div class="form-group">-->
                        <!--    <input type="submit" class="form-control input-style" id="exampleInputPassword1">-->
                        <!--</div>-->
                        
                          <div class="form-group">
                            <a target="_blank" href="<?=base_url('Admin_Control/pdf_quotation/');?>" class="form-control input-style" >Download PDF</a>
                        </div>
                      
                  
                   
                </div>
            </div>
            
            
</form>
  </div>
  <!-- //content -->
</div>
<!-- main content end-->

 