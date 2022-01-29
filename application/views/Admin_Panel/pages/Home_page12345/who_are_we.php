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
						<h4>Who Are We</h4>
					<form action="<?=base_url('/who_are_we');?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
          
          

          <div class="form-group">
            <label>Comment</label>
            <textarea name="who_text" class="form-control" required><?=$who_are_we->who_text;?></textarea>
          </div>

          <div>
            <input type="submit"  value="Submit" class="btn btn-success">
          </div>
        </form>
					</div>
				</div>
			</div>
		</div>






