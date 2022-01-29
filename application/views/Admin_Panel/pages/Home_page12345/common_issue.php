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
						<h4>What common issues can come up?</h4>
					<form action="<?=base_url('/common_issue');?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
          <div class="row">
         <label class="control-label col-sm-2" >Main Text</label>
      <div class="col-sm-12">          
        <textarea class="form-control" name="main_text" required><?=$common_issues->main_text;?></textarea>
      </div>
      </div>
         <div class="row">
    <div class="form-group">
      <label class="control-label col-sm-2" >Title 1</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" value="<?=$common_issues->title1;?>" name="title1" required>
      </div>
      <label class="control-label col-sm-2" >Content 1</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control"  value="<?=$common_issues->content1;?>" name="content1" required>
      </div>
    </div>
    </div> 
    <div class="row">
    <div class="form-group">
      <label class="control-label col-sm-2" >Title 2</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" name="title2"  value="<?=$common_issues->title2;?>"  required>
      </div>
      <label class="control-label col-sm-2" >Content 2</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control"  value="<?=$common_issues->content2;?>" name="content2" required>
      </div>
    </div>
    </div> 
  <div class="row">
    <div class="form-group">
      <label class="control-label col-sm-2" >Title 3</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" name="title3"  value="<?=$common_issues->title3;?>"  required>
      </div>
      <label class="control-label col-sm-2" >Content 3</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control"  value="<?=$common_issues->content3;?>" name="content3" required>
      </div>
    </div>
    </div>  
    <div class="row">
    <div class="form-group">
      <label class="control-label col-sm-2" >Title 4</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" name="title4"  value="<?=$common_issues->title4;?>"  required>
      </div>
      <label class="control-label col-sm-2" >Content 4</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control"  value="<?=$common_issues->content4;?>" name="content4" required>
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






