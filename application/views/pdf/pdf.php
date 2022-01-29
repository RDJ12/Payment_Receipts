<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="payment-receipt" style="padding:50px 30px;">
      	  <div class="container" style="width:800px;">
	  <h1 style="color: #f58220;font-size: 30px;line-height: 40px;margin: 0;margin-bottom:15px;">Payment Reciept</h1>
				<p><strong><small style="color:#a3a3a3;width: 100px;display: inline-block;">Quotation No#</small> 0001</strong> </p>
				<p><strong><small style="color:#a3a3a3;width: 100px;display: inline-block;">Quotation Date</small>  September 22, 2021</strong></p>
		<div class="site-logo" style="text-align:right;"><img src="https://www.32watts.com/images/logo.png" style="width: 90px;margin-top: -30px;"></div>
		<div class="row" style="display:flex;margin-top:20px;">
			<div class="col-md-6">
			<div class="det-box" style="background: #f5f5f5;padding: 30px;border-radius: 10px;">
				<h3 style="color: #f58220;font-size: 20px;line-height: 30px;margin: 0;margin-bottom:15px;">Payment Receipt</h3>
				<p><strong>Renderwise Solutions Private Ltd</strong></p>
				<p>A-93/1-5,FIRST FLOOR, Wazirpur Industrial Area, Ashok Vihar,
	New Delhi, Delhi 110052,
	Delhi,
	</p>
	<p>Delhi, India, 110052</p>
	<p><strong>Phone:</strong> +919773900267</p>
			</div>
			</div>
			<div class="col-md-6">
			<div class="det-box" style="background: #f5f5f5;padding: 30px;border-radius: 10px;height:100%;">
				<h3 style="color: #f58220;font-size: 20px;line-height: 30px;margin: 0;margin-bottom:15px;">Payment Receipt For</h3>
				<p><strong>Aman Sharma</strong></p>
				<p>Delhi, India,</p>
	<p><strong>Email:</strong> upmanyuaman07@gmail.com</p>
			</div>
			</div>
		</div>
		<div class="table-responsive" style="margin-top:30px;">
			<table class="table" style="background:#f5f5f5;border-radius:10px;overflow:hidden;">
				<thead class="dark" style="background:#f58220;color:#fff;">
					<th></th>
					<th>Item</th>
					<th>Quantity</th>
					<th>Rate</th>
					<th>Amount</th>
				</thead>
				<tbody>
					<tr>
						<td>1.</td>
						<td>Medical Aligners</td>
						<td>1</td>
						<td>₹5,000</td>
						<td>₹5,000</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="total-amount" style="display: flex;justify-content: space-between;">
			<div class="lft-part">
				<p><strong>Total In Words: FIVE THOUSAND RUPEES ONLY</strong></p>
			</div>
			<div class="right-part">
				<p><strong>Total (INR) ₹5,000</strong></p>
			</div>
		</div>
		<div class="note" style="margin-top: 50px;">
			<p style="color: #f58220;margin-bottom: 0;"><strong>Note</strong></p>
			<p>This is computer generated payment receipt. Hence required no signature. Actual invoice will be shared on the realization of payment in account</p>
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

  <div class="container" style="width:800px;">
  <h1 style="color: #f58220;font-size: 30px;line-height: 40px;margin: 0;margin-bottom:15px;">Payment Reciept</h1>
			<p><strong><small style="color:#a3a3a3;width: 100px;display: inline-block;">Quotation No#</small> PR-000<?=$lead_detail->id;?></strong> </p>
			<p><strong><small style="color:#a3a3a3;width: 100px;display: inline-block;">Quotation Date</small> <?=date('d-m-Y',strtotime($lead_detail->created_on));?></strong></p>
	<div class="site-logo" style="text-align:right;">
	    <img src="img/logo.png" style="width: 90px;margin-top: -110px;">
	    </div>
	<div class="row" style="display:flex;margin-top:20px;">
		<div class="col-md-6">
		<div class="det-box" style="background: #f5f5f5;padding: 30px;border-radius: 10px;">
			<h3 style="color: #f58220;font-size: 20px;line-height: 30px;margin: 0;margin-bottom:15px;">Payment Receipt</h3>
			<p><strong>Renderwise Solutions Private Ltd</strong></p>
			<p>A-93/1-5,FIRST FLOOR, Wazirpur Industrial Area, Ashok Vihar,
New Delhi, Delhi 110052,
Delhi,
</p>
<p>Delhi, India, 110052</p>
<p><strong>Phone:</strong> +919773900267</p>
		</div>
		</div>
		<div class="col-md-6">
		<div class="det-box" style="background: #f5f5f5;padding: 30px;border-radius: 10px;height:100%;">
			<h3 style="color: #f58220;font-size: 20px;line-height: 30px;margin: 0;margin-bottom:15px;">Payment Receipt For</h3>
			<p><strong>Aman Sharma</strong></p>
			<p>Delhi, India,</p>
<p><strong>Email:</strong> upmanyuaman07@gmail.com</p>
		</div>
		</div>
	</div>
  </div>
  
  </div>
    <div class="container">
        <div class="row" style="
        display: block;
        width: 600px;
        margin: 0 auto;
        text-align: center;
        ">
        <img src="https://www.32watts.com/images/logo.png" style="
       width: 90px;
       margin-bottom: 10px;
       margin-top: 10px;
       ">
       </div><div class="row" style="
        display: block;
        width: 600px;
        margin: 0 auto 10px auto;
        text-align: center;
        ">
        <div style="
    display: inline-block;
    width: 210px;
    text-align: left;
">
            <p style="
    font-size: 14px;
    line-height: 45px;
    margin: 0;
"><span style="
    font-weight: 700;
">Unique Number:</span> <span>123456789</span></p>
        </div>
        <div style="
    display: inline-block;
    width: 205px;
"><h1 style="
            color: #f58220;
            font-size: 30px;
            line-height: 40px;
            margin: 0;
            ">Payment Reciept</h1>
            </div>
            <div style="
    display: inline-block;
    width: 178px;
    text-align: right;
">
                <p style="
    font-size: 14px;
    line-height: 45px;
    margin: 0;
"><span style="
    font-weight: 700;
">Date:</span> <span>09-oct-2021</span></p>
            </div>  
       
        </div>
        
    <div class="row" style="
       display: block;
       width: 600px;
       margin: 0 auto;
       ">
       <div class="col-lg-12" style="
          padding: 8px;
          border-top: 1px solid #ccecf7;
          ">
          <span style="
             width: 120px;
             display: inline-block;
             font-size: 18px;
             line-height: 28px;
             font-weight: 700;
             ">Name:</span><span style="
             font-size: 18px;
             line-height: 28px;
             font-weight: 400;
             "> <?=$lead_detail->buyer_name;?></span>
       </div>
       <div class="col-lg-12" style="
          padding: 8px;
          border-top: 1px solid #ccecf7;
          ">
          <span style="
             width: 120px;
             display: inline-block;
             font-size: 18px;
             line-height: 28px;
             font-weight: 700;
             ">Mobile:</span><span style="
             font-size: 18px;
             line-height: 28px;
             font-weight: 400;
             "><?=$lead_detail->mobile;?> </span>
       </div>
       <div class="col-lg-12" style="
          padding: 8px;
          border-top: 1px solid #ccecf7;
          ">
          <span style="width: 120px;display: inline-block;font-size: 18px;line-height: 28px;font-weight: 700;">Email:</span><span style="
             font-size: 18px;
             line-height: 28px;
             font-weight: 400;
             "> <?=$lead_detail->email;?> </span>
       </div>
       <div class="col-lg-12" style="
          padding: 8px;
          border-top: 1px solid #ccecf7;
          ">
          <span style="width: 120px;display: inline-block;font-size: 18px;line-height: 28px;font-weight: 700;">Address:</span><span style="
             font-size: 18px;
             line-height: 28px;
             font-weight: 400;
             "><?=$lead_detail->address;?> </span>
       </div>
       <div class="col-lg-12" style="
          padding: 8px;
          border-top: 1px solid #ccecf7;
          ">
          <span style="width: 120px;display: inline-block;font-size: 18px;line-height: 28px;font-weight: 700;">Item:</span><span style="
             font-size: 18px;
             line-height: 28px;
             font-weight: 400;
             "> <?=$lead_detail->product_name;?></span>
       </div>
       <div class="col-lg-12" style="
          padding: 8px;
          border-top: 1px solid #ccecf7;
          ">
          <span style="width: 120px;display: inline-block;font-size: 18px;line-height: 28px;font-weight: 700;">Amount:</span><span style="
             font-size: 18px;
             line-height: 28px;
             font-weight: 400;
             "> <?=$lead_detail->amount;?></span>
       </div>
       <div class="col-lg-12" style="
          padding: 8px;
          border-top: 1px solid #ccecf7;
          ">
          <span style="width: 120px;display: inline-block;font-size: 18px;line-height: 28px;font-weight: 700;">Mode:</span><span style="
             font-size: 18px;
             line-height: 28px;
             font-weight: 400;
             "> <?php $arr=array('0'=>'Cheque','1'=>'Cash','2'=>'Online'); echo $arr[$lead_detail->mode];  ?></span>
       </div>
       
        <div class="col-lg-12" style="
          padding: 8px;
          border-top: 1px solid #ccecf7;
          ">
          <span style="width: 120px;display: inline-block;font-size: 18px;line-height: 28px;font-weight: 700;">Case Id:</span><span style="
             font-size: 18px;
             line-height: 28px;
             font-weight: 400;
             "> <?=$lead_detail->case_id;  ?></span>
       </div>
       
         <div class="col-lg-12" style="
          padding: 8px;
          border-top: 1px solid #ccecf7;
          ">
          <span style="width: 120px;display: inline-block;font-size: 18px;line-height: 28px;font-weight: 700;">Payment Recieved For:</span><span style="
             font-size: 18px;
             line-height: 28px;
             font-weight: 400;
             "> <?=$lead_detail->payment_recieved_for;  ?></span>
       </div>
       
         <div class="col-lg-12" style="
          padding: 8px;
          border-top: 1px solid #ccecf7;
          ">
          <span style="width: 120px;display: inline-block;font-size: 18px;line-height: 28px;font-weight: 700;">Other:</span><span style="
             font-size: 18px;
             line-height: 28px;
             font-weight: 400;
             "> <?=$lead_detail->other;  ?></span>
       </div>
       
         <div class="col-lg-12" style="
          padding: 8px;
          border-top: 1px solid #ccecf7;
          ">
          <span style="width: 120px;display: inline-block;font-size: 18px;line-height: 28px;font-weight: 700;">Additonal Remarks:</span><span style="
             font-size: 18px;
             line-height: 28px;
             font-weight: 400;
             "> <?=$lead_detail->additonal_remarks;  ?></span>
       </div>
       
       
    </div>
    <div class="row" style="
       display: block;
       width: 600px;
       margin: 10px auto;
       padding: 10px;
       ">
       <div class="col-lg-12">
          <p style="
             margin: 0;
             font-size: 14px;
             ">
             <span style="
                font-weight: 600;
                ">Note:</span>
             <span>
             This is computer generated payment receipt. Hence required no signature. Actual invoice will be shared on the realization of payment in account
             </span>
          </p>
       </div>
    </div>
    <div class="row" style="
       display: block;
       width: 600px;
       margin: 0 auto 10px auto;
       ">
       <div class="col-lg-12" style="
          display: block;
          float: none;
          ">
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>