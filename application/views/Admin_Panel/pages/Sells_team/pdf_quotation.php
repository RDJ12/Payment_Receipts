<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

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
                        
                         Sales Type:- <?=$sales_type[$rv->sales_type];?>, 
                         Lead Type:- <?=$lead_type[$rv->lead_type] ;?>,
                         Product Name:- <?=$rv->product_name;?>,
                         Qty:- <?=$rv->qty;?>,
                         Dated:- <?=$rv->dated;?>,
                         Specification:- <?=$rv->specification;?>,
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
                        
                       
                        
                      
                      
                  
                   
                </div>
            </div>
            
            
</form>
  </div>
  <!-- //content -->
</div>
<!-- main content end-->

 
  </body>
</html>