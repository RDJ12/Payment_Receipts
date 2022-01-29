

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
    <form method="POST" action="<?=base_url('Admin_Control/add_remark/');?>" enctype="multipart/form-data">
        
        
     
       <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Remark <span></span></h3>
                    <p>
                        <?php
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
                    
                    <?php if($_SESSION['user_type']!=4 && $_SESSION['user_type']!=5){ ?>
                    
                     <div class="form-group">
                            <input type="file"  name="remark_photo" id="remark_photo"  class="form-control input-style"   >
                        </div> 
                    <?php }else
                    {?>
                    <div class="form-group">
                            <img src="<?=base_url('assets/remark_photo/'.$remark_photo);?>"  alt="remark photo" >
                        </div> 
                    <?php } ?>
                        <div class="form-group">
                          
                            <textarea  name="remark" id="product_description"  class="form-control input-style"   ><?=(($remark)?$remark:'');?></textarea>
                        </div>
                        
                      
                        <?php if($_SESSION['user_type']!=4 && $_SESSION['user_type']!=5){ ?>
                        
                        <input type="hidden" value="<?=(($lead_id)?$lead_id:'');?>" name="id">
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

 