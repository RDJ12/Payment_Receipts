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
						<h4>Be at ease with our AMC plans</h4>
					<form action="<?=base_url('/be_at_ease');?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
          
          

          <div class="form-group">
            <label>Comment</label>
            <textarea name="be_at_ease" class="form-control" required><?=$be_at_ease->be_at_ease;?></textarea>
          </div>

          <div>
            <input type="submit"  value="Submit" class="btn btn-success">
          </div>
        </form>
					</div>
				</div>
			</div>
		</div>






