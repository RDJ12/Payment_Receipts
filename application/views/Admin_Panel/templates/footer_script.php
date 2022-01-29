 <!--footer section start-->
<footer class="dashboard">
  <p>&copy<?=date('Y');?>. All Rights Reserved </p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<!--<script src="<?=base_url();?>/assets/admin/js/jquery-3.3.1.min.js"></script>-->
<!--<script src="<?=base_url();?>/assets/admin/js/jquery-1.10.2.min.js"></script>-->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>

<!-- chart js -->
<script src="<?=base_url();?>/assets/admin/js/Chart.min.js"></script>
<script src="<?=base_url();?>/assets/admin/js/utils.js"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="<?=base_url();?>/assets/admin/js/bar.js"></script>
<script src="<?=base_url();?>/assets/admin/js/linechart.js"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="<?=base_url();?>/assets/admin/js/jquery.nicescroll.js"></script>
<script src="<?=base_url();?>/assets/admin/js/scripts.js"></script>

 <!-- loading-gif Js -->
 <script src="<?=base_url();?>/assets/admin/js/modernizr.js"></script>
 
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
  $( function() {
 
  
  $('.datepicker').datepicker({
      dateFormat: 'yy-mm-dd'
});
});
  </script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->



<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url();?>/assets/admin/js/bootstrap.min.js"></script>

<!-- data tables js -->

<!-- //data tables js -->

<!--<script type="text/javascript" src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>-->
<!--<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>-->
<!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>-->




<script>
 $(document).ready(function() {
     
       
        var state_id=$('#state').val();
           var saved_city=$('#saved_city').val();
        if($('#state').val()!='')
        {
            $.post('<?=base_url('Admin_Control/get_cities/');?>',{state_id:state_id},function(response){
                $('#city').html(response);
            });
            
            $('#city [value='+saved_city+']').attr('selected', 'true');
            $('#city').attr('disabled', 'true');
        }
        else
        {
            $('#city').html('');
        }
$('#case_div').hide();
    if($('#new_existing').val()=='Existing')
    {
        $('#case_div').show();
    }
    
     
     $('#other_div').hide();
     if($('#payment_recieved_for').val()=='Other')
    {
        $('#other_div').show();
    }
    
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'print'
        ]
    } );
} );
</script>
 <!--<script-->
 <!--     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&libraries=places&v=weekly"-->
 <!--     async-->
 <!--   ></script>-->

<script>
//     function initMap() {
//   const map = new google.maps.Map(document.getElementById("map"), {
//     center: { lat: 40.749933, lng: -73.98633 },
//     zoom: 13,
//   });
//   const card = document.getElementById("pac-card");
//   const input = document.getElementById("pac-input");
//   const biasInputElement = document.getElementById("use-location-bias");
//   const strictBoundsInputElement = document.getElementById("use-strict-bounds");
//   const options = {
//     componentRestrictions: { country: "us" },
//     fields: ["formatted_address", "geometry", "name"],
//     origin: map.getCenter(),
//     strictBounds: false,
//     types: ["establishment"],
//   };
//   map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);
//   const autocomplete = new google.maps.places.Autocomplete(input, options);
//   // Bind the map's bounds (viewport) property to the autocomplete object,
//   // so that the autocomplete requests use the current map bounds for the
//   // bounds option in the request.
//   autocomplete.bindTo("bounds", map);
//   const infowindow = new google.maps.InfoWindow();
//   const infowindowContent = document.getElementById("infowindow-content");
//   infowindow.setContent(infowindowContent);
//   const marker = new google.maps.Marker({
//     map,
//     anchorPoint: new google.maps.Point(0, -29),
//   });
//   autocomplete.addListener("place_changed", () => {
//     infowindow.close();
//     marker.setVisible(false);
//     const place = autocomplete.getPlace();

//     if (!place.geometry || !place.geometry.location) {
//       // User entered the name of a Place that was not suggested and
//       // pressed the Enter key, or the Place Details request failed.
//       window.alert("No details available for input: '" + place.name + "'");
//       return;
//     }

//     // If the place has a geometry, then present it on a map.
//     if (place.geometry.viewport) {
//       map.fitBounds(place.geometry.viewport);
//     } else {
//       map.setCenter(place.geometry.location);
//       map.setZoom(17);
//     }
//     marker.setPosition(place.geometry.location);
//     marker.setVisible(true);
//     infowindowContent.children["place-name"].textContent = place.name;
//     infowindowContent.children["place-address"].textContent =
//       place.formatted_address;
//     infowindow.open(map, marker);
//   });

//   // Sets a listener on a radio button to change the filter type on Places
//   // Autocomplete.
//   function setupClickListener(id, types) {
//     const radioButton = document.getElementById(id);
//     radioButton.addEventListener("click", () => {
//       autocomplete.setTypes(types);
//       input.value = "";
//     });
//   }
//   setupClickListener("changetype-all", []);
//   setupClickListener("changetype-address", ["address"]);
//   setupClickListener("changetype-establishment", ["establishment"]);
//   setupClickListener("changetype-geocode", ["geocode"]);
//   biasInputElement.addEventListener("change", () => {
//     if (biasInputElement.checked) {
//       autocomplete.bindTo("bounds", map);
//     } else {
//       // User wants to turn off location bias, so three things need to happen:
//       // 1. Unbind from map
//       // 2. Reset the bounds to whole world
//       // 3. Uncheck the strict bounds checkbox UI (which also disables strict bounds)
//       autocomplete.unbind("bounds");
//       autocomplete.setBounds({ east: 180, west: -180, north: 90, south: -90 });
//       strictBoundsInputElement.checked = biasInputElement.checked;
//     }
//     input.value = "";
//   });
//   strictBoundsInputElement.addEventListener("change", () => {
//     autocomplete.setOptions({
//       strictBounds: strictBoundsInputElement.checked,
//     });

//     if (strictBoundsInputElement.checked) {
//       biasInputElement.checked = strictBoundsInputElement.checked;
//       autocomplete.bindTo("bounds", map);
//     }
//     input.value = "";
//   });
// }
</script>

<script>
    $(document).on('click','#sub',function(){
        
            var pwd = $('#hiring_file_number').val();
            
            
            var Exp = /((^[0-9]+[a-z]+)|(^[a-z]+[0-9]+))+[0-9a-z]+$/i;
            
            if(!pwd.match(Exp))
            {   
                $('#hiring_file_number').val('');
                alert("File Number Should Be Alpha Numeric");
            }
                
            else
            {
                //alert("SUCCESS");
            }
                

         
    });
    
    
    
    
</script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.8.3/tinymce.min.js"></script>

<script>
  tinymce.init({
  selector: 'textarea#product_description,textarea#product_d,textarea#product_t,textarea#price_t,textarea#qty_t',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});
</script>

<script>
$(document).on('change','#email_lead,#email_lead2',function(){
    
    var  email=$(this).val();
    var  lead_id=$('#lid').val();
    
    $.post('<?=base_url();?>/Admin_Control/email_lead_check',{
       email_id:email,leadid:lead_id
         },function(response1){
             if(response1!='')
             {
                 $(this).val('');
                 $('#err_email').html(response1);
             }
             else
             {
                 $('#err_email').html('');
             }
         });
});

$(document).on('change','#mobile_lead,#mobile_lead2',function(){
    
    var  mobile=$(this).val();
    var  lead_id=$('#lid').val();
    
    $.post('<?=base_url();?>/Admin_Control/mobile_lead_check',{
       mobile:mobile,leadid:lead_id
         },function(response1){
             if(response1!='')
             {
                 $(this).val('');
                 $('#err_mobile').html(response1);
             }
             else
             {
                 $('#err_mobile').html('');
             }
         });
});


</script>


<script>
$(document).on('change','#email',function(){
    
    var  email=$('#email').val();
    var  user_id=$('#user_id').val();
    
    $.post('<?=base_url();?>/Admin_Control/check_email',{
       email_id:email,table:'users',userid:user_id
         },function(response1){
             if(response1==1)
             {
                 $('#email').val('');
                 $('#err_email').html('Email Id Already In Use.');
             }
             else
             {
                 $('#err_email').html('');
             }
         });
});

</script>
<script>
$(document).on('change','#mobile',function(){
    
    var  mobile=$('#mobile').val();
     var  user_id=$('#user_id').val();
     
    $.post('<?=base_url();?>/Admin_Control/mobile_check',{
       mobile_no:mobile,table:'users',userid:user_id
         },function(response1){
             if(response1==1)
             {
                 $('#mobile').val('');
                 $('#err_mobile').html('Mobile No. Already In Use.');
             }
             else
             {
                 $('#err_mobile').html('');
             }
         });
});


$(document).on('change','#mobile_check_vendor',function(){
    
    var  mobile=$('#mobile_check_vendor').val();
     var  user_id=$('#user_id').val();
     
    $.post('<?=base_url();?>/Admin_Control/mobile_check',{
       mobile_no:mobile,table:'vendor',userid:user_id
         },function(response1){
             if(response1==1)
             {
                 $('#mobile_check_vendor').val('');
                 $('#err_mobile').html('Mobile No. Already In Use.');
             }
             else
             {
                 $('#err_mobile').html('');
             }
         });
});


$(document).on('change','#email_check_vendor',function(){
    
    var  email=$('#email_check_vendor').val();
     var  user_id=$('#user_id').val();
     
    $.post('<?=base_url();?>/Admin_Control/email_check',{
       email:email,table:'vendor',userid:user_id
         },function(response1){
             if(response1==1)
             {
                 $('#email_check_vendor').val('');
                 $('#err_email').html('Email Already In Use.');
             }
             else
             {
                 $('#err_email').html('');
             }
         });
});

$(document).on('change','#gst_check_vendor',function(){
    
    var  gst_no=$('#gst_check_vendor').val();
     var  user_id=$('#user_id').val();
     
    $.post('<?=base_url();?>/Admin_Control/gst_check',{
       gst_no:gst_no,table:'vendor',userid:user_id
         },function(response1){
             if(response1==1)
             {
                 $('#gst_check_vendor').val('');
                 $('#err_gst').html('GST No. Already In Use.');
             }
             else
             {
                 $('#err_gst').html('');
             }
         });
});

</script>


<script>
$(document).on('change','#email_sales',function(){
    
    var  email=$('#email').val();
    $.post('<?=base_url();?>/Admin_Control/check_email',{
       email_id:email,table:'leads'
         },function(response1){
             if(response1==1)
             {
                 $('#email').val('');
                 $('#err_email').html('Email Id Already In Use.');
             }
             else
             {
                 $('#err_email').html('');
             }
         });
});

</script>
<script>
$(document).on('change','#mobile_sales',function(){
    
    var  mobile=$('#mobile').val();
    $.post('<?=base_url();?>/Admin_Control/mobile_check',{
       mobile_no:mobile,table:'leads'
         },function(response1){
             if(response1==1)
             {
                 $('#mobile').val('');
                 $('#err_mobile').html('Mobile No. Already In Use.');
             }
             else
             {
                 $('#err_mobile').html('');
             }
         });
});

</script>


<script>
$(document).on('click','#sem',function(){

     if($('.p_id:checkbox:checked').length > 0)
     {    
         $('#form1').submit();
          return true;
     }
      else
      {   
          alert('Please Check Atleast 1 User');
          return false;
      }
});

$(document).ready(function() {
    $('.toggle-btn').click();
    $('.select2').select2();
});
   
   
      function open_mail(vid,name,email)
   {   
       $('#to').val(email);
       $('#nm').html(' '+name);
       
       $.post('<?=base_url();?>Admin_Control/msg_detail',{
           v_id:vid
         },function(response1){
          response1=JSON.parse(response1);
          console.log(response1);
       $('#subject').val(response1.subject);
       $('#message').val(response1.message);
       if(response1.attachment)
       {
           $('#aatt').html('<a target="_blank" href="<?=base_url('assets/attachment/');?>'+response1.attachment+'">View</a>');
       }
        
         });
     $('#show_message').modal('show');
   }
   
   
   $(document).on('click','#add_new',function(){
       $('#tbody').append('<tr><td><input type="text" name="product_name[]" required></td><td><input type="number" name="qty[]" step="any" required></td><td><input type="number" name="price[]"  step="any" required></td><td><input type="number" name="gst[]"  step="any" required></td><td><input type="text" name="description[]"   required></td><td><a class="btn btn-xs btn-danger  text-white" id="rmv">-</a></td></tr>');
   });
   
      $(document).on('click','#rmv',function(){
       $(this).closest('tr').remove();
   });
   
   function show_old_mapping(id)
   {
       $.post("<?=base_url('Admin_Control/show_old_mapping');?>",{o_id:id },function( data ) {
           $( "#oldm" ).html(data);
           $( "#myModalold" ).modal('show');
       });

   }
   
   function show_vendor_mapping(id)
   {
       $.post("<?=base_url('Admin_Control/show_vendor_mapping');?>",{o_id:id },function( data ) {
           $( "#vendorm" ).html(data);
           $( "#myModalvendor" ).modal('show');
       });

   }
   
   
   if(window.location.href === "http://crm.lexbax.com/Admin_Control/domestic_lead"){
   setInterval(function(){ window.location.reload(); }, 120000);

    }
    
     if(window.location.href === "http://crm.lexbax.com/Admin_Control/export_lead"){
   setInterval(function(){ window.location.reload(); }, 120000);

    }
    
    $(document).on('change','#hot_cold',function(){
        
        var lead_id=$(this).attr('data-row-id');
        var this_val=$(this).find(':selected').val();
        
        if(confirm('Do You Want To Change Status ?'))
        {
            $.post('<?=base_url("Admin_Control/hot_cold");?>',{lead_id:lead_id,this_val:this_val},function(response){
            alert('Status Updated !');
            window.location.reload();
           });
        }
        
        
    });
    
    $(document).on('change','#new_existing',function(){
        
        if($('#new_existing').val()=='Existing')
        {
            $('#case_div').show();
        }
        else
        {
            $('#case_div').hide();
        }
    });
    
      $(document).on('change','#payment_recieved_for',function(){
        
        if($('#payment_recieved_for').val()=='Other')
        {
            $('#other_div').show();
        }
        else
        {
            $('#other_div').hide();
        }
    });
    
       $(document).on('change','#state',function(){
        var state_id=$('#state').val();
        if($('#state').val()!='')
        {
            $.post('<?=base_url('Admin_Control/get_cities/');?>',{state_id:state_id},function(response){
                $('#city').html(response);
            });
        }
        else
        {
            $('#city').html('');
        }
    });
    
    
    $(document).keydown(function(event) {
        if (event.ctrlKey==true && (event.which == '80')) { //cntrl + p
            event.preventDefault();
            printAssessment();
        }
    });

    function printAssessment() {
        //alert("Print the little page");
        window.print();
    }
    
    
    function set_verification(id)
    {
        var new_st=$('#set_v'+id).val();
        
        if (confirm('You Want to Change Verification ?')) {
               if(new_st>=0)
        {
            $.post('<?=base_url("Admin_Control/set_v");?>',{id:id,new_st:new_st},function(response){
                alert(response);
            });
        }
          } 
        
        
    }
</script>
