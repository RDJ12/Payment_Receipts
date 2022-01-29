<center>
    <?php
    if($this->session->flashdata('mes'))
    {
         echo $this->session->flashdata('mes');
    }
    ?>
</center>
<div id="page-wrapperbf">

			<div class="main-page">
				<div class="tables">
					<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
					
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>Team</h4>
					<form action="<?=base_url('/team');?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
          <div class="row">
         <label class="control-label col-sm-2" >Main Text</label>
      <div class="col-sm-12">          
        <textarea class="form-control" name="main_text" required><?=$team->main_text;?></textarea>
      </div>
      </div>
         <div class="row">
    <div class="form-group">
      
      <div class="col-sm-3">   
      <label class="control-label" >Name 1</label>
        <input type="text" class="form-control" value="<?=$team->name1;?>" name="name1" required>
      </div>
      
      <div class="col-sm-3">        
      <label class="control-label" >Designation 1</label>
        <input type="text" class="form-control"  value="<?=$team->designation1;?>" name="designation1" required>
      </div>
       
      <div class="col-sm-6">          
      <label class="control-label" >Content 1</label>
        <textarea rows="3" class="form-control"  name="content1" required><?=$team->content1;?></textarea>
      </div>
    </div>
    </div> 
     <div class="row">
    <div class="form-group">
      
      <div class="col-sm-3">   
      <label class="control-label" >Name 2</label>
        <input type="text" class="form-control" value="<?=$team->name2;?>" name="name2" required>
      </div>
      
      <div class="col-sm-3">        
      <label class="control-label" >Designation 2</label>
        <input type="text" class="form-control"  value="<?=$team->designation2;?>" name="designation2" required>
      </div>
       
      <div class="col-sm-6">          
      <label class="control-label" >Content 2</label>
        <textarea rows="3" class="form-control"  name="content2" required><?=$team->content2;?></textarea>
      </div>
    </div>
    </div>   
     <div class="row">
    <div class="form-group">
      
      <div class="col-sm-3">   
      <label class="control-label" >Name 3</label>
        <input type="text" class="form-control" value="<?=$team->name3;?>" name="name3" required>
      </div>
      
      <div class="col-sm-3">        
      <label class="control-label" >Designation 3</label>
        <input type="text" class="form-control"  value="<?=$team->designation3;?>" name="designation3" required>
      </div>
       
      <div class="col-sm-6">          
      <label class="control-label" >Content 3</label>
        <textarea rows="3" class="form-control"  name="content3" required><?=$team->content3;?></textarea>
      </div>
    </div>
    </div>  
       <div class="row">
    <div class="form-group">
      
      <div class="col-sm-3">   
      <label class="control-label" >Name 4</label>
        <input type="text" class="form-control" value="<?=$team->name4;?>" name="name4" required>
      </div>
      
      <div class="col-sm-3">        
      <label class="control-label" >Designation 4</label>
        <input type="text" class="form-control"  value="<?=$team->designation4;?>" name="designation4" required>
      </div>
       
      <div class="col-sm-6">          
      <label class="control-label" >Content 4</label>
        <textarea rows="3" class="form-control"  name="content4" required><?=$team->content4;?></textarea>
      </div>
    </div>
    </div> 
          <div>
            <input type="submit"  value="Submit" class="btn btn-success">
          </div>
        </form>
					</div>
				</div>
			</div>
		</div>






