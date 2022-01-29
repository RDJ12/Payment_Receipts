<!-- PRODUCT SLIDER AREA START -->

<div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90 plr--7">
<div class="container-fluid">
<div class="row">
    
<div class="col-lg-12">
<div class="section-title-area ltn__section-title-2--- text-center">
<h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Properties</h6>
<h1 class="section-title">Residential Properties</h1>
</div>
</div>
</div>
<div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1">
    
    <?php foreach($product_detail as $p_detail){ ?>
          <!-- ltn__product-item -->
<div class="col-lg-12">
<div class="ltn__product-item ltn__product-item-4 text-center---">
<div class="product-img">
<a class="<?php if(isset($_SESSION['allowed_user_id'])){ }else{echo " ask_detail ";} ?> "><img src="<?=base_url();?>/assets/images/product_images/<?php $img=json_decode($p_detail->product_images);echo $img['0'];?>" alt="#"></a>
<div class="product-badge">
<ul>
<li class="sale-badge bg-green <?php if(isset($_SESSION['allowed_user_id'])){ }else{echo " ask_detail ";} ?> ">3BHK</li>
</ul>
</div>
<div class="product-img-location-gallery">
<div class="product-img-location">
<ul>
<li>
<a class="<?php if(isset($_SESSION['allowed_user_id'])){ }else{echo " ask_detail ";} ?> "><i class="flaticon-pin"></i> <?=$p_detail->location;?></a>
</li>
</ul>
</div>
<div class="product-img-gallery">
<ul>
<li>
<a href="product-details.html"><i class="fas fa-camera"></i> <?=count($img);?></a>
</li>
<li>
<a href="product-details.html"><i class="fas fa-film"></i> 2</a>
</li>
</ul>
</div>
</div>
</div>
<div class="product-info">
<div class="product-price">
<span>Price - <label><?=$p_detail->product_price;?> Cr</label></span>
</div>
<h2 class="product-title"><a  class="<?php if(isset($_SESSION['allowed_user_id'])){ }else{echo " ask_detail ";} ?> "><?=$p_detail->product_name;?></a></h2>
<div class="product-description">
<p><?=$p_detail->product_description;?></p>
</div>
<ul class="ltn__list-item-2 ltn__list-item-2-before">
<li><span><?=$p_detail->bedroom;?> <i class="flaticon-bed"></i></span>
Bedrooms
</li>
<li><span><?=$p_detail->hall;?> <i class="flaticon-clean"></i></span>
Hall
</li>
<li><span><?=$p_detail->kitchen;?> <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
Kitchen
</li>
</ul>
</div>
<div class="product-info-bottom">
    <div class="btn-wrapper animated text-center">
        <!--<a href="<?php if(isset($_SESSION['allowed_user_id'])){ echo base_url()."/Home/view_product_detail/".$p_detail->product_id; }else{} ?>" class=" <?php if(isset($_SESSION['allowed_user_id'])){ }else{echo " ask_detail ";} ?>  theme-btn-1 btn btn-effect-1">View</a>-->
        
         <a <?php if(isset($_SESSION['allowed_user_id'])){ ?> href="<?=base_url()."/Home/view_product_detail/".$p_detail->product_id;?>" <?php }?>  class=" <?php if(isset($_SESSION['allowed_user_id'])){ }else{echo " ask_detail ";} ?>  theme-btn-1 btn btn-effect-1">View</a>
        </div>
</div>
</div>
</div>
<!-- ltn__product-item -->
    <?php  } ?>
    



<!--  -->
</div>
<div class="ltn__product-slider-area ltn__product-gutter pt-115  plr--7">
<div class="container-fluid">
<div class="row">
    
<div class="col-lg-12">
<div class="section-title-area ltn__section-title-2--- text-center">
<h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Properties</h6>
<h1 class="section-title">Residential Properties</h1>
</div>
</div>
</div>
<div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1">
    
              <!-- ltn__product-item -->
<div class="col-lg-12">
<div class="ltn__product-item ltn__product-item-4 text-center---">
<div class="product-img">
<a href="product-details.html"><img src="https://www.oxicare.in/new_homesolutions//assets/images/product_images/1.jpg" alt="#"></a>
<div class="product-badge">
<ul>
<li class="sale-badge bg-green">3BHK</li>
</ul>
</div>
<div class="product-img-location-gallery">
<div class="product-img-location">
<ul>
<li>
<a href="locations.html"><i class="flaticon-pin"></i>  Sector 82 A, International Airport Road, Mohali</a>
</li>
</ul>
</div>
<div class="product-img-gallery">
<ul>
<li>
<a href="product-details.html"><i class="fas fa-camera"></i> 2</a>
</li>
<li>
<a href="product-details.html"><i class="fas fa-film"></i> 2</a>
</li>
</ul>
</div>
</div>
</div>
<div class="product-info">
<div class="product-price">
<span>Price - <label>12345 Cr</label></span>
</div>
<h2 class="product-title"><a href="product-details.html">Marbell Grand</a></h2>
<div class="product-description">
<p></p><p>Beautiful Huge 1 Family House In Heart Of</p><p></p>
</div>
<ul class="ltn__list-item-2 ltn__list-item-2-before">
<li><span>2 <i class="flaticon-bed"></i></span>
Bedrooms
</li>
<li><span>1 <i class="flaticon-clean"></i></span>
Hall
</li>
<li><span>11 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
Kitchen
</li>
</ul>
</div>
<div class="product-info-bottom">
    <div class="btn-wrapper animated text-center">
        <a href="service.html" class="theme-btn-1 btn btn-effect-1">Residential Properties in Mohali</a>
        </div>
</div>
</div>
</div>
<!-- ltn__product-item -->
        



<!--  -->
</div>

<div class="ltn__about-us-area pt-120 pb-40 ">
<div class="container">
<div class="row">
    <div class="col-12 text-center">
        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Projects</h6>
<h1 class="section-title">Most Luxurious Project In Town<span>.</span></h1>
<p class="mb-40">Our Location Is right on the PR7 Airport road and the advantage of the same is that we are connected with Punjab , Himachal and Haryana, being on Airport road.</p>
    </div>
<div class="col-lg-6 align-self-center">
<div class="about-us-img-wrap about-img-left">
<img src="https://www.oxicare.in/homesolutions/img/others/7.png" alt="About Us Image">
</div>
</div>
<div class="col-lg-6 align-self-center">
<div class="about-us-info-wrap">
<div class="section-title-area ltn__section-title-2--- mb-20">

<h4>Location</h4>
<p>Our project is connected with the 3rd Phase of Airport road which is connected directly with Panchkula. Moreover, the project is connected with NH 22 which is Chandigarh New Delhi Expressway and here you can find every brand of your choice also. We have Manav Mangal Smart School just adjoining to our project. So, we are best located project from every aspect.

</p>


<h4 class="not-first">Master plan

</h4>
<p>It is 23 Acre development with Premium Homes only . Our project is the least dense project of the region with only 39 homes per acre which will have Openness like Chandigarh and there is no match for this point in whole Tricity.

</p><h4 class="not-first">KITCHEN</h4>
<p>Kithcen is designed to ensure working triangle between hob , sync and refrigerator. You can search about this triangle concept over internet and would find that it ensure maximum efficiency when you work in kitchen.Utility balcony is attached to your kitchen which you can use for washing .</p>
</div>

<div class="btn-wrapper animated">
<a href="service.html" class="theme-btn-1 btn btn-effect-1">Download Floor Plan</a>
    
<a href="service.html" class="theme-btn-2 btn btn-effect-1">Download Price List</a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="tn__about-us-area pt-40 pb-80">
    <div class="container">
<div class="row">
    <div class="col-12 text-center">
<h1 class="section-title">Sushma Valencia Location Advantages<span>.</span></h1>
</div>
</div>
<div class="imgholder">
                <img src="https://www.investandreinvest.com/assets/img/sushma-valencia/Icons.jpg" class="img-fluid" alt="">

                </div>
            
    </div>
</div>
<div class="ltn__about-us-area pt-80 pb-40 ">
<div class="container">
<div class="row">
    <div class="col-12 text-center">

<h1 class="section-title">Every House In Project Has Service Road On The Backside Ensuring Maximum Ventilation<span>.</span></h1>

    </div>
    <div class="col-lg-6 align-self-center">
<div class="about-us-info-wrap">
<div class="section-title-area ltn__section-title-2--- mb-20">
<p>Landscaping is also done by professional consultants SJA (For your info – Sachin Jain Archictects from Delhi). We have covered so minor points while doing landscaping that you would feel the difference yourself e.g. we have planted all season blooming trees, not the seasonal only. Moreover, small plants that will take 5 to 6 years to grow and this makes the difference only.
</p>


<h4 class="not-first">Renders</h4>
<p>
Valencia is a city in spain and our project is Inspired by city of Valencia with Spanish Architecture.
</p>
<p>
65ft wide gap slide – As you can see in the Mater Layout, We have provided 65 feet wide roads with 40 feet road 8 feet walkways and Cycling track of 5 feet on both sides..

</p><h4 class="not-first">Club Plan
</h4>
<p>Lavish Club plan which includes –
<br/>
Multipurpose hall, Gym, Changing rooms, Reception Lounge, Seprate Provisions for Hobby Classes.</p>
</div>


</div>
</div>
<div class="col-lg-6 align-self-center">
<div class="about-us-img-wrap about-img-left">
<img src="https://www.oxicare.in/homesolutions/img/others/7.png" alt="About Us Image">
</div>
</div>

</div>
</div>
</div>
<div class="tn__about-us-area pt-40">
    <div class="container">
<div class="row">
    <div class="col-12 text-center">
<h1 class="section-title">Project With Maximum Open Area And Unique Amenities
<span>.</span></h1>
</div>
</div>
<div class="imgholder">
                <img src="https://www.investandreinvest.com/assets/img/sushma-valencia/Icons.jpg" class="img-fluid" alt="">

                </div>
            
    </div>
</div>
   
</div>
</div>

   
</div>
</div>
<!-- PRODUCT SLIDER AREA END -->




<div id="ask_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Please Fill The Detail.</h4>
      </div>
      <div class="modal-body">
        <form  id="form1">
              <div class="form-group">
                <label >Name:</label>
                <input type="text" class="form-control" required style="height: 35px;margin-bottom:0px;" id="name" name="name">
              </div>
              <div class="form-group">
                <label >Email:</label>
                <input type="email" class="form-control" required  style="height: 35px;margin-bottom:0px;" id="email" name="email">
              </div>
              <div class="form-group">
                <label >Phone:</label>
                <input type="number" step="any" class="form-control" required id="phone" name="phone">
              </div>
             
   <input type="submit"  style="padding:0px;color:#fff;"  class="btn btn-primary" id="submit_detail1" value="Submit">
</form>

 <form  id="form2">
              <div class="form-group">
                <label >Enter OTP:</label>
                <input type="number" step="any" class="form-control" required style="height: 35px;margin-bottom:0px;" id="otp" name="otp">
                <span id="err" style="color:red;"></span>
              </div>
             
   <input type="submit"  style="padding:0px;color:#fff;"  class="btn btn-primary" id="submit_otp" value="Submit">
</form>
      </div>
    </div>

  </div>
</div>
