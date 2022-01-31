
  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">All Leads</li>
      </ol>
    </nav>
    
    	<form action="" method="get" >
		<div class="row filter-row">
		   
		   <div class="col-sm-12 col-md-3 col-lg-3 col-xl-2 col-12">  
				<div class="form-group form-focus">
					<div class="cal-icon">
						<input class="form-control floating  datepicker" type="text" name="datefrom" value="<?php if(isset($_GET['datefrom']) && ($_GET['datefrom']!="")){ echo $_GET['datefrom']; }else { echo "";} ?>" autocomplete="off">
					</div>
					<label class="focus-label">From</label>
				</div>
			</div>
		   <div class="col-sm-12 col-md-3 col-lg-3 col-xl-2 col-12">  
				<div class="form-group form-focus">
					<div class="cal-icon">
						<input class="form-control floating  datepicker" type="text" name="dateto" value="<?php if(isset($_GET['dateto']) && ($_GET['dateto']!="")){ echo $_GET['dateto']; }else { echo "";} ?>"  autocomplete="off">
					</div>
					<label class="focus-label">To</label>
				</div>
			</div>
		   <div class="col-sm-12 col-md-2 col-lg-3 col-xl-2 col-12">
		     	<button type="submit"  class="btn btn-success btn-block" > Search </button> 
			<!--	<a href="#" class="btn btn-success btn-block"> Search </a>  -->
		   </div>  
		   
		</div>
		</form>
    
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
                           <th>Name</th>
                           <th>Mobile</th>
                           <th>Email</th>
                           <th>Address</th>
                           <th>Item</th>
                           <th>Amount</th>
                           <th>Mode</th>
                           <th>Created By.</th>
                           <th>Created Date</th>
                            <th>Invoice</th>
                           <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                        $r=1; 
                      foreach($allleads as $rv){
                          $arr=array('1'=>'Cheque','2'=>'Online','3'=>'Cash');
                      ?>
                         <tr>
                             <td><?=$r++;?></td>
                             <td><?=$rv->buyer_name;?></td>
                             <td><?=$rv->mobile;?></td>
                             <td><?=$rv->email;?></td>
                             <td><?=$rv->address;?></td>
                             <td><?=$rv->product_name;?></td>
                             <td><?=$rv->amount;?></td>
                             <td><?=$arr[$rv->mode];?></td>
                             <td><?= $rv->fname; ?></td>
                             <td><?= $rv->created_on; ?></td>
                             <td>    
                                
                                
                                <?php if($rv->invoice_no!='' && $rv->invoice_date!=''){ 
                                echo $rv->invoice_no;
                                echo"<br>";
                                echo $rv->invoice_date;
                                ?>
                                <?php }else{ ?>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalh<?=$rv->id;?>">Invoice</button>

<!-- Modal -->
<div id="myModalh<?=$rv->id;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!--<h4 class="modal-title">Modal Header</h4>-->
      </div>
      <div class="modal-body">
<form action="<?=base_url('Admin_Control/set_invoice/');?>" method="POST">
    
    <input type="hidden" class="form-control" name="l_id" required value="<?=$rv->id;?>">
  <div class="form-group">
    <label >Invoice No.</label>
    <input type="text" class="form-control" name="invoice_no" required>
  </div>
  <div class="form-group">
    <label >Invoice Date</label>
    <input type="date" class="form-control" name="invoice_date" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                                <?php } ?>
                             </td>
                             <td>   
                             <?php if($_SESSION['user_type']==1) {?> 
                                <a class="cmn icon_size" href="<?=base_url('Admin_Control/add_lead/'.$rv->id);?>"><i class="fa fa-pencil"></i></a>
                               <?php }?>
                                <a target="_blank" class="cmn icon_size" href="<?=base_url('Admin_Control/view_lead/'.$rv->id);?>"><i class="fa fa-eye"></i></a>
                                <a class="cmn icon_size" href="<?=base_url('Admin_Control/invoice/'.$rv->id);?>"><i class="fa fa-file-pdf-o"></i></a>
                                <?php if($_SESSION['user_type']==1 || $_SESSION['user_type']==2) {?> 
                                <a onclick="return confirm('Do You Want To Cancel ?')" title="Cancel" class="cmn icon_size" href="<?=base_url('Admin_Control/cancel/'.$rv->id);?>"><i class="fa fa-ban"></i></a>
                                <select id="set_v<?=$rv->id;?>" onchange="set_verification(<?= $rv->id; ?>)">
                                    <option <?=(($rv->account_verification==0)?'selected':'');?> value="0">Pending</option>
                                    <option <?=(($rv->account_verification==1)?'selected':'');?> value="1">Received</option>
                                </select>
                                <?php } ?>
                                
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

 