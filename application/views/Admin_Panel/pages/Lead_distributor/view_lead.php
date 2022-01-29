

  <!-- main content start -->
<div class="main-content" style="<?php if($_SESSION['user_type']==2 || $this->uri->segment(2)=='view_lead'){echo"margin-left:40px!important;";} ?>">

  <!-- content -->
  <div class="container-fluid content-top-gap" >

   
      <div id="frameContainer" class="payment-receipt" style="padding:50px 30px;">
  <div class="container" style="width:800px;">
  <h1 style="color: #f58220;font-size: 30px;line-height: 40px;margin: 0;margin-bottom:15px;">Payment Reciept</h1>
			<p><strong><small style="color:#a3a3a3;width: 100px;display: inline-block;">Receipt No#</small> 000<?=$edit_data->id;?></strong> </p>
			<p><strong><small style="color:#a3a3a3;width: 100px;display: inline-block;">Date</small>  <?=date('d-M-Y',strtotime($edit_data->created_on));?></strong></p>
			<?php if($edit_data->cancel==1){ ?>
			<p><strong><small style="color:#a3a3a3;width: 100px;display: inline-block;">Cancelled On</small>  <?=date('d-M-Y',strtotime($edit_data->cancelled_on));?></strong></p>
			<?php } ?>
	<div class="site-logo" style="text-align:right;"><img src="https://www.32watts.com/images/logo.png" style="width: 90px;margin-top: -120px;"></div>
	<div class="row" style="display:flex;margin-top:20px;">
		<div class="col-md-6">
		<div class="det-box" style="background: #f5f5f5;padding: 30px;border-radius: 10px;">
			<h3 style="color: #f58220;font-size: 20px;line-height: 30px;margin: 0;margin-bottom:15px;">Payment Receipt</h3>
			<p><strong>Render Wise Solutions Pvt Ltd</strong></p>
			<p>GSTIN-
07AAICR0930R1ZX</p>

<p></p>
Address: A-93/1-5, first floor, Wazirpur industrial area, New Delhi - 110052
</p>
<p>Delhi, India, 110052</p>
<p><strong>Phone:</strong> +919773900267</p>
		</div>
		</div>
		<div class="col-md-6">
		<div class="det-box" style="background: #f5f5f5;padding: 30px;border-radius: 10px;height:100%;">
			<h3 style="color: #f58220;font-size: 20px;line-height: 30px;margin: 0;margin-bottom:15px;">Payment Receipt For Patient</h3>
			<p><strong><?=(($edit_data)?$edit_data->buyer_name:'');?></strong></p>
			<p><?=(($edit_data)?$edit_data->address:'');?></p>
			<p><?=(($edit_data)?$edit_data->pincode:'');?></p>
<p><strong>Email:</strong><?=(($edit_data)?$edit_data->email:'');?></p>
		</div>
		</div>
	</div>
	<!--<div class="table-responsive" style="margin-top:30px;">-->
	<!--	<table class="table" style="background:#f5f5f5;border-radius:10px;overflow:hidden;">-->
	<!--		<thead class="dark" style="background:#f58220;color:#fff;">-->
	<!--			<th></th>-->
	<!--			<th>Item</th>-->
	<!--			<th>Quantity</th>-->
	<!--			<th>Rate</th>-->
	<!--			<th>Amount</th>-->
	<!--		</thead>-->
	<!--		<tbody>-->
	<!--			<tr>-->
	<!--				<td>1.</td>-->
	<!--				<td><?=(($edit_data)?$edit_data->product_name:'');?></td>-->
	<!--				<td><?=(($edit_data)?$edit_data->qty:'');?></td>-->
	<!--				<td>Rs. <?=(($edit_data)?$edit_data->amount:'');?></td>-->
	<!--				<td>Rs. <?=(($edit_data)?$edit_data->amount:'');?></td>-->
	<!--			</tr>-->
	<!--		</tbody>-->
	<!--	</table>-->
	<!--</div>-->
	<!--<div class="total-amount" style="display: flex;justify-content: space-between;">-->
	<!--	<div class="lft-part">-->
	<!--		<p><strong>Total In Words: <?=getIndianCurrency($edit_data->amount);?> Only</strong></p>-->
	<!--	</div>-->
	<!--	<div class="right-part">-->
	<!--		<p><strong>Total (INR) Rs. <?=(($edit_data)?$edit_data->amount:'');?></strong></p>-->
	<!--	</div>-->
	<!--</div>-->
		<div class="total-amount" style="margin-top:30px;display: flex;justify-content: space-between;">
		<div class="lft-part">
			<p><strong>Received Sum of Rs. <?=$edit_data->amount; ?> ( <?=getIndianCurrency($edit_data->amount);?> Only  )  </strong></p>
		</div>
	</div>
		<div class="total-amount" style="margin-top:10px;display: flex;justify-content: space-between;">
		<div class="lft-part">
			<p><strong>Collected By - <?=get_user_name($edit_data->created_by);?>   </strong></p>
		</div>
	</div>
	<div class="note" style="margin-top: 30px;">
		<p style="color: #f58220;margin-bottom: 0;"><strong>For Render Wise Solutions Private Limited</strong></p>
		<hr>
		<p style="color: #f58220;margin-bottom: 0;"><strong>Terms and Conditions</strong></p>
		<p>1.This is a payment receipt, Invoice will be subsequently issued and sent to your registered e-mail id</p>
		<p>2.Receipt is valid subject to realization of Payment in Company Account</p>
		<p>3.This is a computer-generated document and does not require Signature</p>
	</div>
	<div class="row">
       <div class="col-lg-12" style="display: flex;justify-content: center;margin-top: 20px;">
          <span style="
             width: 187px;
             display: inline-block;
             text-align: center;
             font-size: 18px;
             border-right: 1px solid #ccecf7;
             "><a href="https://www.32watts.com/" style="
             text-decoration: none;
             color: #f58220;
             ">www.32watts.com</a></span>
          <span style="
             width: 187px;
             display: inline-block;
             text-align: center;
             font-size: 18px;
             border-right: 1px solid #ccecf7;
             "><a href="tel:+919560570580" style="
             text-decoration: none;
             color: #f58220;
             ">9-560-570-580</a></span>
          <span style="
             width: 187px;
             display: inline-block;
             text-align: center;
             font-size: 18px;
             "><a href="mailto:#" style="
             text-decoration: none;
             color: #f58220;
             ">32watts@info.com</a></span>
       </div>
    </div>
  </div>
  
  </div>
  
  <div id="edit-actions" class="form-actions form-wrapper">
   <input id="print-submit" class="form-submit btn btn-sm btn-primary" value="Print" name="print" onclick="printAssessment()" type="button" />
   <a class="btn btn-xs btn-primary" href="<?=base_url('Admin_Control/add_lead/');?>">Go Back To Generate Another Receipt</a>
   <!--<a class="btn btn-0xs btn-primary" href="<?=base_url('Admin_Control/invoice/'.$edit_data->id);?>">PDF</a>-->
</div>
  
  </div>
  <!-- //content -->
</div>
<!-- main content end-->

 