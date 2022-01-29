

  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Assign Form</li>
      </ol>
    </nav>
    <form id="form1" method="POST" action="<?=base_url('Admin_Control/assign_retro/');?>" enctype="multipart/form-data">
        

     <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Select From Following<span></span></h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table " id="example">
                            <thead>
                                <th>Select</th>
                                <th>Emp Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </thead>
                            <tbody>
                                
                                 <?php foreach($all_retro as $ac){  ?>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-control   p_id" id="customCheck" name="p_id[]" value="<?=$ac->id;?>" >
                                    </td>
                                    <td><?=$ac->emp_id;?></td>
                                    <td><?=$ac->fname.' '.$ac->lname;?></td>
                                    <td><?=$ac->email;?></td>
                                    <td><?=$ac->mobile;?></td>
                                </tr>
                     
                                <?php } ?>
                    
                               
                            </tbody>
                        </table>
                    </div>
                    
                   
                    <input  name="lead_id" type="hidden" required value="<?=$lead_id;?>" >
                     
                </div>
            </div>
     
     
       
            
             <div class="card card_border py-2 mb-4">
             
                <div class="card-body">
                    
                   
                        <div class="custom-file">
                            <a   class="form-control input-style" id="sem">Submit</a>
                        </div>
                     
                   
                </div>
            </div>
            
              
            
      
            
           
            
            
   

    
</form>
  </div>
  <!-- //content -->
</div>
<!-- main content end-->



 