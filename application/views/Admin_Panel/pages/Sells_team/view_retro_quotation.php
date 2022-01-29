
  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Retro Quotation List</li>
      </ol>
    </nav>
    
     <!-- data tables -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <h3 class="card__title position-absolute">Retro Quotation Info</h3>
            <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                  <tr>     
                           <th>S.no</th>
                           <th>Emp Id</th>
                           <th>Name</th>
                           <th>View</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                        $r=1; 
                      foreach($allleads as $rv){
                      
                      ?>
                         <tr>
                             <td><?=$r++;?></td>
                             <td><?=$rv->emp_id;?></td>
                             <td><?=$rv->fname.' '.$rv->lname ;?></td>
                             <td>
                                 <a href="<?=base_url('Admin_Control/open_retro_quotation/'.$rv->id);?>">View Quotation</a>
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

 