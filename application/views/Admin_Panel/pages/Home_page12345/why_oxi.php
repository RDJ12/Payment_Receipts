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
						<h4>Why Oxi care?</h4>
					<form action="<?=base_url('/why_oxi');?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
          
         
         <div class="row">
    <div class="form-group">
      <label class="control-label col-sm-2" >Count 1</label>
      <div class="col-sm-4">          
        <input type="number" class="form-control" value="<?=$why_oxi->count1;?>" name="count1" required>
      </div>
      <label class="control-label col-sm-2" >Title 1</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control"  value="<?=$why_oxi->title1;?>" name="title1" required>
      </div>
    </div>
    </div> 
    <div class="row">
    <div class="form-group">
      <label class="control-label col-sm-2" >Count 2</label>
      <div class="col-sm-4">          
        <input type="number" class="form-control" name="count2"  value="<?=$why_oxi->count2;?>"  required>
      </div>
      <label class="control-label col-sm-2" >Title 2</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control"  value="<?=$why_oxi->title2;?>" name="title2" required>
      </div>
    </div>
    </div> 
    <div class="row">
    <div class="form-group">
      <label class="control-label col-sm-2" >Count 3</label>
      <div class="col-sm-4">          
        <input type="number" class="form-control"  value="<?=$why_oxi->count3;?>"  name="count3" required>
      </div>
      <label class="control-label col-sm-2" >Title 3</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control"  value="<?=$why_oxi->title3;?>" name="title3" required>
      </div>
    </div>
    </div> 
    <div class="row">
    <div class="form-group">
      <label class="control-label col-sm-2" >Count 4</label>
      <div class="col-sm-4">          
        <input type="number" class="form-control"  value="<?=$why_oxi->count4;?>"  name="count4" required>
      </div>
      <label class="control-label col-sm-2" >Title 4</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control"  value="<?=$why_oxi->title4;?>"  name="title4" required>
      </div>
    </div>
<div>
          <div>
            <input type="submit"  value="Submit" class="btn btn-success">
          </div>
        </form>
					</div>
				</div>
			</div>
		</div>






