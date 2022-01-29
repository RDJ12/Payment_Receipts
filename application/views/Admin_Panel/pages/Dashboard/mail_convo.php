 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
 
 <style>
     .select2-container
     {
         width:100%!important;
     }
     .select2-container--default .select2-selection--single
     {
         height:50px!important;
     }
     .select2-container--default .select2-selection--single .select2-selection__rendered
     {
         padding: 7px 1px 0px 17px!important;
         
     }
 </style>
  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
<center>
<?php if($this->session->flashdata('success')) { ?>
     <span class="alert alert-success"><?=$this->session->flashdata('success');?></span>
<?php } ?>

<?php if($this->session->flashdata('warning')) { ?>
     <span class="alert alert-warning"><?=$this->session->flashdata('warning');?></span>
<?php } ?>
</center>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Mails</li>
      </ol>
    </nav>
    
     <!-- mail inbox-->
    <div class="card card_border p-1 mb-4">
      <!-- card heading -->
      <div class="cards__heading">
        <h3>Mailbox</h3>
      </div>
      <!-- //card heading -->
      <div class="card-body">
        <div class="d-grid align-mails-block">
          <div class="mail-inbox-left">
            <nav class="navbar p-0">
              <ul class="nav nav-pills nav-stacked mail-nav">
                  
                <li role="presentation" class="cs-3"><button class="btn btn-primary btn-style btn-block"
                    data-toggle="modal" data-target="#compose"><span class="fa fa-external-link"
                      aria-hidden="true"></span>
                    Compose</button></li>
                    
                <li role="presentation" class="<?php if($this->uri->segment('3')!='sent' && $this->uri->segment('3')!='trash' ){echo"active";} ?>"><a href="<?=base_url('Admin_Control/mail_convo');?>"><span class="fa fa-envelope-open"
                      aria-hidden="true"></span> Inbox </a></li>
                
                <li role="presentation"  class="<?php if($this->uri->segment('3')=='sent'){echo"active";} ?>"><a href="<?=base_url('Admin_Control/mail_convo/sent');?>"><span class="fa fa-send" aria-hidden="true"></span>
                    Sent </a></li>
                    
                <!--<li role="presentation"  class="<?php if($this->uri->segment('3')=='trash'){echo"active";} ?>"><a href="<?=base_url('Admin_Control/mail_convo/trash');?>"><span class="fa fa-trash" aria-hidden="true"></span>-->
                <!--    Trash </a></li>-->
                    
               
               
              </ul>
            </nav>
          </div>

          <div class="mail-messages-view mt-md-0 mt-4">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-heading pl-4 py-3"><span class="fa fa-envelope-open" aria-hidden="true"></span>
                    <?php if($this->uri->segment('3')=='sent'){echo"Sent";}else{echo"Inbox";} ?></div>
                  <nav class="navbar p-0" id="navbarNav">
                    <div class="card-body">
                      <div class="row justify-content-between">
                        <div class="col-lg-8 mail-option-buttons">
                          
                         
                          <!--<button class="btn btn-default btn-mail" type="submit"><span class="fa fa-trash"-->
                          <!--    aria-hidden="true"></span>-->
                          <!--  <label class="d-md-inline-block d-none">Trash</label></button>-->
                            
                          
                          
                        </div>
                        <div class="col-lg-4 mt-md-0 mt-4 mail-toolbar text-right">

                          
                          
                        </div>
                      </div>
                    </div>
                  </nav>
                  <table class="table inbox-messages">
                      
              <?php if(empty($inbox)){ ?>
              <center><h3>No Mails..</h3></center>
              <?php }
              foreach($inbox as $r){ ?>
              
                    <tr>
                      <td>
                        <div class="inbox__grid">
                          <div class="select-mail">
                            <input type="checkbox" id="check2" class="cs-4" />
                            <label class="fa fa-square-o" for="check2"></label>
                            <label class="fa fa-check-square-o" for="check2"></label>
                          </div>
                          <div class="inbox-main">
                            <strong><a href="#" onclick="open_mail('<?=$r->id;?>','<?=$r->sfname." ".$r->slname;?>','<?=$r->email;?>')"><?=$r->sfname." ".$r->slname;?></a></strong>
                          </div>
                          <div class="cs-5">
                            <p><a href="#" onclick="open_mail('<?=$r->id;?>','<?=$r->sfname." ".$r->slname;?>','<?=$r->email;?>')"><strong><?=$r->subject;?> - </strong><?=$r->message;?>.</a></p>
                          </div>
                          <div class="time">
                            <h6><?=$r->created_on;?></h6>
                          </div>
                          
                        </div>
                      </td>
                    </tr>
                    <?php } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="compose" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Compose New Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body p-4">
                <form action="<?=base_url('Admin_Control/mail_convo');?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="to" class="input__label">Send to :</label>
                    <select class="form-control input-style select2" name="to" placeholder="examplemail@mail.com" required>
                        <?php foreach($user_detail as $v){ ?>
                        <option value="<?=$v->id;?>"><span><?=$v->email;?></span> - <span><?=$v->fname;?> <?=$v->lname;?></span></option>
                        <?php } ?>
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="subject" class="input__label">Subject :</label>
                    <input type="text" class="form-control input-style" name="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group">
                    <label for="message" class="input__label">Message :</label>
                    <textarea rows="7" class="form-control input-style" name="message" inbox__grids="15" required></textarea>
                  </div>
                  <div class="form-group">
                    <label class="input__label">Attachment :</label>
                    <input type="file" class="form-control input-style" name="attachment" >
                  </div>
                  <button type="button" class="btn btn-style border-btn" data-dismiss="modal">Cancel</button>
                  <input type="submit" class="btn btn-style btn-primary" value="Send">
                </form>
              </div>
              <div class="modal-footer">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //mail inbox-->
   

    

  </div>
  <!-- //content -->
</div>
<!-- main content end-->


 <div class="modal fade" id="show_message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body p-4">
                
                  <div class="form-group">
                    <label for="to" class="input__label">To :<span id="nm"></span></label>
                    <input type="text" class="form-control input-style" id="to" readonly required>
                  </div>
                  <div class="form-group">
                    <label for="subject" class="input__label">Subject :</label>
                    <input type="text" class="form-control input-style" id="subject" readonly required>
                  </div>
                  <div class="form-group">
                    <label for="message" class="input__label">Message :</label>
                    <textarea rows="10" class="form-control input-style" id="message" inbox__grids="15" readonly required></textarea>
                  </div>
                  
                 <div class="form-group">
                    <label for="message" class="input__label">Attachment : </label>
                    <span id="aatt"></span>
                  </div>
                  
                </form>
              </div>
              <div class="modal-footer">
                 <button type="button" class="btn btn-style border-btn" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>

 