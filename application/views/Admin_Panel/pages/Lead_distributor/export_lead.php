
  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Export Leads</li>
      </ol>
    </nav>
    
     <!-- data tables -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <h3 class="card__title position-absolute">Export Leads Info</h3>
            <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                  <tr>     
                           <th>S.no</th>
                           <th>Unique Id</th>
                           <th>Sales Type</th>
                           <th>Company</th>
                           <th>Lead Type</th>
                           <th>Buyer Name</th>
                           <th>Buyer Company Name</th>
                           <th>Product Name</th>
                           <th>Qty</th>
                           <th>Mobile</th>
                           <th>Email</th>
                           <th>Dated</th>
                           <th>Specification1</th>
                           <th>Specification2</th>
                           <th>Specification3</th>
                           <th>Specification4</th>
                           <th>Additional Specification</th>
                           <th>Place Of Delivery</th>
                           <?php if($_SESSION['user_type']!=3){ ?>
                           <th>Sales Member</th>
                           <?php } ?>
                           <th>Status</th>
                           <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                        $r=1; 
                      foreach($allleads as $rv){
                      $status=['0'=>'<span class="bg-dark">Inactive</span>','1'=>'<span  class="bg-dark text-white">Active</span>'];
                      $sales_type=['1'=>'Domestic','2'=>'Export'];
                      $lead_type=['1'=>'Direct Lead','2'=>'Purchase Lead','3'=>'Catalogue View Lead'];
                      ?>
                         <tr <?php if($rv->checked==0){ ?> style="background:#f5b4b4;"  <?php  }else{ ?>style="background:#a8e2a8;" <?php } ?>>
                             <td><?=$r++;?></td>
                             <td>LEAD<?=$rv->id;?></td>
                             <td><?=$sales_type[$rv->sales_type];?></td>
                             <td><?=$rv->company_type;?></td>
                             <td><?=$lead_type[$rv->lead_type] ;?></td>
                             <td><?=$rv->buyer_name;?></td>
                             <td><?=$rv->buyer_company_name;?></td>
                             <td><?=$rv->product_name;?></td>
                             <td><?=$rv->qty;?></td>
                             <td><?=$rv->mobile;?> <?=$rv->mobile2;?></td>
                             <td><?=$rv->email;?> <?=$rv->email2;?></td>
                             <td><?=date('d-m-Y',strtotime($rv->dated));?></td>
                             <td><?=$rv->specification;?></td>
                             <td><?=$rv->specification2;?></td>
                             <td><?=$rv->specification3;?></td>
                             <td><?=$rv->specification4;?></td>
                             <td><?=$rv->specification5;?></td>
                             <td><?=$rv->place_of_delivery;?></td>
                             <?php if($_SESSION['user_type']!=3){ ?>
                             <td><b><?=strtoupper($rv->fname);?></b><?='-'.$rv->emp_id;?></td>
                             <?php } ?>
                             <td class="stt">
                                 <?=$status[$rv->status];?>
                                 <?php if($rv->checked==0){ echo'<span  class="bg-danger text-white">Unchecked By sales</span>'; }else{ echo'<span  class="bg-success text-white">Checked By sales</span>'; } ?>
                                  <?php if($rv->checked_by_purchase==0){ echo'<span  class="bg-info text-white">Unchecked By Purchase</span>'; }else{ echo'<span  class="bg-warning text-white">Checked By Purchase</span>'; } ?>
                                  <?php if($rv->checked_by_retro==0){ echo'<span  class="bg-warning text-white">Unchecked By Retro</span>'; }else{ echo'<span  class="bg-primary text-white">Checked By Retro</span>'; } ?>
                             </td>
                             <td class="act">
                                 <a class="cmn" href="<?=base_url('Admin_Control/add_remark/'.$rv->id);?>">Remark</a>
                                 
                                 
                                 
                                 
                                 <?php 
                                     
                                     $res=$this->db->query(" select users.fname,users.lname from lead_purchase_mapping join users on users.id=lead_purchase_mapping.user_id where lead_purchase_mapping.lead_id=".$rv->id)->row();
                                     
                                     if(!empty($res))
                                     { ?>
                                         
                                         <a class="cmn2" ><?php echo "Assigned To ".$res->fname." ".$res->lname;?></a>
                                    <?php }
                                     else
                                     { ?>
                                         <a class="cmn" href="<?=base_url('Admin_Control/export_assign/'.$rv->id);?>">Assign</a> 
                                    <?php }
                                 
                                 ?>
                                 
                                 
                                 <?php if($_SESSION['user_type']==3){ ?>
                                  <a class="cmn" href="<?=base_url('Admin_Control/view_retro_quotation/'.$rv->id);?>">Retro Quotation</a>
                                  <?php if($rv->checked==0){ ?>
                                  <a class="btn btn-sm btn-success" onclick="return confirm('Are You Sure ?')" href="<?=base_url('Admin_Control/mark_cheked/'.$rv->id);?>">checked</a>
                                 <?php } } ?>
                                 
                                 <?php if($_SESSION['user_type']==2 || $_SESSION['user_type']==3){ ?>
                                  <a class="cmn" href="<?=base_url('Admin_Control/add_lead/'.$rv->id);?>">Edit</a>
                                 <?php } ?>
                                 
                                  <select data-row-id="<?=$rv->id;?>" class="form-control" id="hot_cold">
                                     <option value="">select</option>
                                     <option <?=(($rv->hot_cold==1)?'selected':'');?> value="1">Hot</option>
                                     <option <?=(($rv->hot_cold==2)?'selected':'');?> value="2">Warm</option>
                                     <option <?=(($rv->hot_cold==3)?'selected':'');?> value="3">Cold</option>
                                 </select>
                                 
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

 