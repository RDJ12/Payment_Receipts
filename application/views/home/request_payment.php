<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Oxi - Shipping</title>
	<!--<link rel="icon" href="../images/fav.ico" >-->
	<link rel="apple-touch-icon" sizes="180x180" href="https://www.oxicare.in/assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://www.oxicare.in/assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://www.oxicare.in/assets/favicon/favicon-16x16.png">
<link rel="manifest" href="https://www.oxicare.in/assets/favicon/site.webmanifest">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style-starter.css">
		
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body> 
	<!--<?php include("header.php");?>-->
		<section class="slider h-45">
			<!--<div class="container">-->
			<!--	<ul class="breadcrum">-->
			<!--		<li><a href="#">Home</a></li>-->
			<!--		<li><a href="#"><img src="<?php echo base_url(); ?>SVG/flower.svg"></a></li>-->
			<!--		<li><a href="#">Shipping Details</a></li>-->
			<!--	</ul>-->
			<!--</div>-->
		</section>		
		
		<section class="w3l-contact-info details">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!--<h3 class="heading"><?php  ?> Details</h3>-->
					</div>
					
					<?php
					        $productinfo = '';
							$txnid = time();
							    
							$key_id = 'rzp_test_KyLmd6WmfbF97i';
							$dd=$_SESSION['dd'];          
							$total = ($dd['amount'] * 100); 
							$amount = $dd['amount'];
							$merchant_order_id = rand(100,9999);
							$card_holder_name = $dd['user_name'];
							$email = $dd['email'];
							$phone = $dd['phone'];
							$name = 'Oxicare';
							$return_url = base_url().'razorpay/callback';
							  //$data['return_url'] = site_url().'razorpay/callback';
							$surl = base_url().'razorpay/success';;
							$furl =  base_url().'razorpay/failed';;
							$currency_code= 'INR';
							/*$productinfo = 'Online Parsad';
							$txnid = time();
							    
							$key_id = 'rzp_test_PfA0BeFYbEmadW';
							          
							$total = (10 * 100); 
							$amount = 10;
							$merchant_order_id = rand(100,9999);
							$card_holder_name = 'TechArise Team';
							$email = 'info@techarise.com';
							$phone = '9000000001';
							$name = 'Online Parsad';
							$return_url = base_url().'razorpay/callback';
							  //$data['return_url'] = site_url().'razorpay/callback';
							$surl = base_url().'razorpay/success';;
							$furl =  base_url().'razorpay/failed';;
							$currency_code= 'INR';*/
					?>
					 <form name="razorpay-form" id="razorpay-form" action="<?php echo $return_url; ?>" method="POST">
					   <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
					  <input type="hidden" name="merchant_order_id" id="merchant_order_id" value="<?php echo $merchant_order_id; ?>"/>
					  <input type="hidden" name="merchant_trans_id" id="merchant_trans_id" value="<?php echo $txnid; ?>"/>
					  <input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id" value="<?php echo $productinfo; ?>"/>
					  <input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="<?php echo $surl; ?>"/>
					  <input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="<?php echo $furl; ?>"/>
					  <input type="hidden" name="card_holder_name_id" id="card_holder_name_id" value="<?php echo $card_holder_name; ?>"/>
					  <input type="hidden" name="merchant_total" id="merchant_total" value="<?php echo $total; ?>"/>
					  <input type="hidden" name="merchant_amount" id="merchant_amount" value="<?php echo $amount; ?>"/>
					  <input type="hidden" name="request_record_id" id="request_record_id" value="<?php echo $dd['request_record_id']; ?>"/>
					  </form>
					  
					  
					 <div class=" form-inner-cont cus-form">
					     <div class="site-logo"><img src="../assets/images/logo2.png"></div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="u_name" id="regusername_p" tabindex="1" class="form-control" placeholder="Username" value="<?=$dd['user_name'];?>" readonly >
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="u_email" id="email_p" tabindex="1" class="form-control" placeholder="Email Address" value="<?=$dd['email'];?>" readonly>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<label>Mobile</label>
								<input type="tel" readonly name="phone" id="phone_p" tabindex="1" class="form-control" placeholder="Mobile No" value="<?=$dd['phone'];?>">
								</div>
							</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<label>Plan</label>
								<input type="tel" readonly name="plan" id="phone_p" tabindex="1" class="form-control" placeholder="Mobile No" value="<?=$dd['plan'];?>">
								</div>
							</div>
							<!--<div class="col-md-6 col-sm-6 col-xs-12">-->
							<!--	<div class="form-group">-->
							<!--		<label>Country of Origin</label>-->
							<!--	<input type="tel" readonly name="phone" id="phone_p" tabindex="1" class="form-control" placeholder="Mobile No" value="<?=$dd['country'];?>">-->
							<!--	</div>-->
							<!--</div>-->
								<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<label>Plan Price</label>
								<input type="tel" readonly name="amount" id="phone_p" tabindex="1" class="form-control" placeholder="Mobile No" value="<?=$dd['amount'];?>">
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="form-group">
							    <input type="checkbox" required id="checkk" value="1"> I agree <a target="_blank" href="https://www.oxicare.in/home/terms_and_condition" >Terms & Condition.</a><br>
							    <span id="err_check" style="color:red;"></span>
							    </div>
							    
							
							
								<button class="btn btn-style btn-primary" id="submit-pay" href="javascript:void(0);" onclick="razorpaySubmit(this);">Checkout</button>
							</div>
							
					
							
							
						
						
						</div>
					</div>
					<!--<div class="col-md-12 col-sm-12 col-xs-12">-->
					<!--	<h3 class="heading">Billing details</h3>-->
					<!--</div>-->
					<div class="col-md-8 col-sm-8 col-xs-12">
					
					</div>
					
				</div>
			</div>
		</section>	
		
			
	
							
	
	
	<div id="myModal" class="modal fade" role="dialog">
		<div class="positioned">
			<div class="col-md-12">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" id="login-form-link">Login</a>
							</div>
							<!--<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>-->
						</div>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
							    	<form id="login-form" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="number" name="mobile_number" id="mobile_number" tabindex="1" class="form-control" placeholder="Mobile Number" value="" required minlength='10' maxlength='10'>
									</div>
									<div class="form-group sendotp">
										<input type="button" tabindex="4" class="btn btn-register" value="Send Otp" onclick="send_otp();">
									</div>
									<div class="form-group otp_view" style="display:none;">
										<input type="text" name="otp" id="otp" tabindex="1" class="form-control" placeholder="Enter Otp" value="" required>
									</div>
									<div class="form-group check_otp" style="display: none;">
										<div class="row">
											<div class="col-sm-12">
												<input type="button" name="register-submit" id="register-submit" tabindex="4" class="btn btn-register" value="Submit" onclick="checkotp();">
											</div>
										</div>
									</div>
								</form>
								<!--<form id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<label class="custom">Remember me
										  <input type="checkbox" checked="checked">
										  <span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</form>-->
								<!--<form id="register-form" action="https://phpoll.com/register/process" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Mobile No" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>-->
								<form id="register-form" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="number" name="mobile_number" id="mobile_number" tabindex="1" class="form-control" placeholder="Mobile Number" value="" required minlength='10' maxlength='10'>
									</div>
									<div class="form-group sendotp">
										<input type="button" tabindex="4" class="btn btn-register" value="Send Otp" onclick="send_otp();">
									</div>
									<div class="form-group otp_view" style="display:none;">
										<input type="text" name="otp" id="otp" tabindex="1" class="form-control" placeholder="Enter Otp" value="" required>
									</div>
									<div class="form-group check_otp" style="display: none;">
										<div class="row">
											<div class="col-sm-12">
												<input type="button" name="register-submit" id="register-submit" tabindex="4" class="btn btn-register" value="Submit" onclick="checkotp();">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times"></i></button>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
		
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>	
	<script src="<?php echo base_url(); ?>js/backtotop.js"></script>	
	<script src="<?php echo base_url(); ?>js/menumaker.js"></script>
	<script type="text/javascript">
	$("#cssmenu").menumaker({
		title: "",
		format: "multitoggle"
	});
	</script>
	<script>
	$(function() {
    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	});
	</script>
	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
 
  function razorpaySubmit(el){
    var name = $("#regusername_p").val();
    var email = $("#email_p").val();
    var phone = $("#phone_p").val();
    
    if($("#checkk").prop('checked') != true){
        $('#err_check').html('Please Accept Term & Condition');
       return false;
    }
    //var pin_code = $("#city").val();
   // var pin_length = pin_code.length;
   
    var address = $("#address").val();
    if(name != '' && email != '' && phone != '' )
    {
       $.ajax({
			url: "<?=base_url('Razorpay/save_address')?>",
			type: 'POST',
			data: {name:name,email:email,phone:phone },
			dataType: 'json',
			success: function (argument) {
			  if(argument['status']){
			      var razorpay_options = {
                    key: "<?php echo $key_id; ?>",
                    amount: $("#merchant_total").val(),
                    name: "<?php echo $name; ?>",
                    description: "Order # <?php echo $merchant_order_id; ?>",
                    netbanking: true,
                    currency: "<?php echo $currency_code; ?>",
                    prefill: {
                      name:"<?php echo $card_holder_name; ?>",
                      email: "<?php echo $email; ?>",
                      contact: "<?php echo $phone; ?>"
                    },
                    notes: {
                      soolegal_order_id: "<?php echo $merchant_order_id; ?>",
                    },
                    handler: function (transaction) {
                		console.log(transaction);
                        document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
                        document.getElementById('razorpay-form').submit();
                    },
                    "modal": {
                        "ondismiss": function(){
                            location.reload()
                        }
                    }
                  };
                  var razorpay_submit_btn, razorpay_instance;
    			   if(typeof Razorpay == 'undefined'){
                      setTimeout(razorpaySubmit, 200);
                      if(!razorpay_submit_btn && el){
                        razorpay_submit_btn = el;
                        el.disabled = true;
                        el.value = 'Please wait...';  
                      }
                    } else {
                      if(!razorpay_instance){
                        razorpay_instance = new Razorpay(razorpay_options);
                        if(razorpay_submit_btn){
                          razorpay_submit_btn.disabled = false;
                          razorpay_submit_btn.value = "Pay Now";
                        }
                      }
                      razorpay_instance.open();
                    }
			  }else{
			      alert(argument['message']);
			      return false;
			  }
			},
			error: function (hrx, ajaxOption, errorThrow) {
				console.log(ajaxOption);
				console.log(errorThrow);
			}
		});
    }
    // else if(pin_length != 6 )
    // {
    //     alert('Pin code must be 6 number');
    // }
    else{
        alert('Please fill all fields.');
        return false;
    }    
  }  
</script>
<script>
    $(document).ready(function(){
        
    
        
        
       $("input[name='same_address']").on('click',function(){
          if($("input[name='same_address']").is(':checked')){
              $("#name1").val($("#regusername_p").val());
              $("#email1").val($("#email_p").val());
              $("#mobile1").val($("#phone_p").val());
              $("#pincode1").val($("#city").val());
              $("#address1").val($("#address").val());
              $("#regusername_p").prop('readonly', true);
              $("#email_p").prop('readonly', true);
              $("#phone_p").prop('readonly', true);
              $("#city").prop('readonly', true);
              $("#address").prop('readonly', true);
          }else{
              $("#name1").val("");
              $("#email1").val("");
              $("#mobile1").val("");
              $("#pincode1").val("");
              $("#address1").val("");
              $("#regusername_p").prop('readonly', false);
              $("#email_p").prop('readonly', false);
              $("#city").prop('readonly', false);
              $("#address").prop('readonly', false);
          }
       }); 
    });
    function apply_promocode()
    {
        var promocode = $("#promocode").val();
        
        if(promocode == 'BALAJI-1' || promocode == 'BALAJI-2' || promocode == 'BALA3' || promocode == 'BALA4')
        {
            var amount = $("#merchant_amount").val();
            var per_amount = (parseFloat(amount)*parseFloat(5)/parseFloat(100));
            var net_amount = parseFloat(amount)-parseFloat(per_amount);
            var total_amount = parseFloat(net_amount)*parseFloat(100);
            $("#merchant_amount").val(net_amount);
            $("#merchant_total").val(total_amount);
            alert("Promocode applied successfully");
            return false;
        }
        else
        {
            alert('Promocode is wrong. Please try again.');
            return false;
        }
    }
</script>
	</body>
</html>