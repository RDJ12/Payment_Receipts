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
						<h4>Welcome to Oxi Care</h4>
					<form action="<?=base_url('/home_welcome');?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
          
          <div class="form-group">
            <label>Amount</label>
            <input type="file" name="welcome_image" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Comment</label>
            <textarea name="welcome_text" class="form-control" required><?=$home_welcome->welcome_text;?></textarea>
          </div>

          <div>
            <input type="submit"  value="Submit" class="btn btn-success">
          </div>
        </form>
					</div>
				</div>
			</div>
		</div>






