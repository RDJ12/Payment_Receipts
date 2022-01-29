<div id="page-wrapperbf">

			<div class="main-page">
				<div class="tables">
					<center><?=(($this->session->flashdata('mess'))?$this->session->flashdata('mess'):'');?></center>
					
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>FAQ List: <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal_faq">ADD</button></h4>
						
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
									<th>S.no</th> 
									<th>Question</th> 
									<th>Answer</th> 
									<th>Action</th> 
								</tr> 
								</thead> 
								<tbody> 
									<?php $i=0; foreach ($all_faq as $value) {  $i++;?>
										
									<tr> 
										<th scope="row"><?=$i;?></th> 
										<td><?=$value->faq_que;?></td>
										<td><?=$value->faq_ans;?></td>
									    <td><a class="btn btn-xs btn-primary" onclick="open_edit_faq('<?=$value->id;?>','<?=$value->faq_que;?>','<?=$value->faq_ans;?>')"><i class="fa fa-pencil"></i></a></td>
									</tr>

                                   <?php } ?>
									</tbody> 
								</table> 
					</div>
				</div>
			</div>
		</div>




<!-- Modal -->
<div id="myModal_faq" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <!--  <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4> -->
      </div>
      <div class="modal-body">
        <form action="<?=base_url('/faq');?>" method="post">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
          
        	<input type="hidden" name="edit_id" id="edit_id" required>
        

        	<div class="form-group">
        		<label>FAQ Question</label>
        		<input name="faq_que" id="edit_faq_que" class="form-control" required>
        	</div>
        	
        	<div class="form-group">
        		<label>FAQ Answer</label>
        		<input name="faq_ans" id="edit_faq_ans" class="form-control" required>
        	</div>

        	<div>
        		<input type="submit"  value="Submit" class="btn btn-success">
        	</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->


    



