
  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">User Type List</li>
      </ol>
    </nav>
    
     <!-- data tables -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <h3 class="card__title position-absolute">User Type Info</h3>
            <div class="table-responsive mt-5">
              <table id="example" class="table table-bordered">
                <thead>
                  <tr>     
                           <th>S.no</th>
                           <th>Title</th>
                           <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                        $r=1; 
                      foreach($allUserType as $rv){
                      $status=['0'=>'<span class="bg-danger">Inactive</span>','1'=>'<span  class="bg-success">Active</span>'];
                      ?>
                         <tr>
                             <td><?=$r++;?></td>
                             <td><?=$rv->title;?></td>
                             <td><?=$status[$rv->status];?></td>
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

 