<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Control extends CI_Controller
{
    function __construct()
    {
        parent::__construct(); 
        
        $this->load->model('Users_Model');
        $this->load->library('Pdf');
        //$this->load->library('m_pdf');
        
        if(isset($_SESSION['user_id']))
        {
            
        }
        else
        {
            redirect('/admin');
        }
        
    }
    
      function active()
    {
        $this->db->where('id',$this->uri->segment(3));
        $this->db->set('cancel',0);
        $this->db->set('cancelled_on','');
        $this->db->update('leads');
        
        $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Receipt Activated!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
        
        redirect('Admin_Control/cancelled_leads_list');
    }
    
    
    function cancel()
    {
        $this->db->where('id',$this->uri->segment(3));
        $this->db->set('cancel',1);
        $this->db->set('cancelled_on',date('Y-m-d H:i:s'));
        if($this->db->update('leads'))
        {
            
        $user_email=$this->db->select('email,created_by')->where('id',$this->uri->segment(3))->get()->row();
        
        $to = $user_email->email;
         $subject = "Receipt Rejected";
         
         $message = "<b>Receipt No 000".$this->uri->segment(3)." is Rejected.</b>";
         
         
         $header = "From:receipt@32watts.com \r\n";
         $header .= "Cc:info@32watts.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
        
        $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Receipt Cancelled!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
        }
        redirect('Admin_Control/leads_list');
    }
    
      function invoice()
   {        $id=$this->uri->segment(3);
            $d['lead_detail']=$this->db->select('*')->where('id',$id)->get('leads')->row();
            $html = $this->load->view('pdf/pdf', $d, true);
			$name = 'print';
			$this->pdf->createPDF($html, $name, true);
			//redirect('Admin_Control/leads_list');
}
    
    
   
    
    function hot_cold()
    {
        $lead_id= $_POST['lead_id'];
        $this_val=$_POST['this_val'];
        
        $this->db->where('id',$lead_id);
        $this->db->set('hot_cold',$this_val);
        $this->db->update('leads');
    }
    
    function junk()
    {
        $lead_id= $this->uri->segment(3);
        
        $l['lead_id']=$lead_id;
        $l['created_by']=$_SESSION['user_id'];
       
        $this->db->insert('junk_lead',$l);
        
        $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Sent To Junk!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
                           
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    
   function generate_view($data)
   {    $d['profile']=get_column('*','users',['id'=>$_SESSION['user_id']]);
        
        $setting_data['website_setting']='';
        $data['header'] = $this->load->view('Admin_Panel/templates/header_script', $setting_data, TRUE);
        $data['sidebar'] = $this->load->view('Admin_Panel/templates/sidebar',  $d, TRUE);
        $data['top_navi'] = $this->load->view('Admin_Panel/templates/top_nav', $d, TRUE);
        $data['footer'] = $this->load->view('Admin_Panel/templates/footer_script', '', TRUE);
        //$data['extra_footer'] = $this->load->view('footers/extra_footer', '', TRUE);
        $this->load->view('Admin_Panel/templates/home',$data);        
   }
   
   
   
    
   public function logout()
    {
       $this->session->sess_destroy();
      $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Logged Out!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
      redirect('/admin');
    }
    
  
       function update_user_profile()
    {   
        if(isset($_SESSION['user_id']))
        {
          if($_POST)
        {   
            $rr['fname']=$_POST['fname'];
            $rr['lname']=$_POST['lname'];
            if($_POST['password']!='')
            {
                $rr['password']=md5($_POST['password']);
            }
            
            $rr['mobile']=$_POST['mobile'];
            $rr['email']=$_POST['email'];
            
             $newimage = time().'-'.$_FILES['profile_picture']['name'];
              $config = array(
                    'upload_path' => "./assets/profile_picture/",
                    'allowed_types' => "jpg|png",
                    'overwrite' => TRUE,
                    'file_name' => $newimage
              );

              $this->load->library('upload', $config);      

                if ($this->upload->do_upload('profile_picture'))
                {
                     $rr['profile_picture'] = $newimage;  
                }

            
            
            $result=update_table('users',$rr,['id'=>$_POST['id']]);
             
            
            if($result>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Updated Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
            }
            redirect('/Admin_Control/update_user_profile/');
        }
        
        $d['profile']=get_column('*','users',['id'=>$_SESSION['user_id']]);
        $data['main_content']=$this->load->view('Admin_Panel/pages/Dashboard/update_user_profile',$d,TRUE);

      $this->generate_view($data);
    
    
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }

}


       function user_type()
    {   
        if(isset($_SESSION['user_id']))
        {
       
            $d['allUserType']=get_result('*','user_type');
             $data['main_content']=$this->load->view('Admin_Panel/pages/user_type/list_type',$d,TRUE);
             $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }

}


function assign_retro()
    {   
        if(isset($_POST['lead_id']))
        {   
           $d_user_id=$_POST['p_id'];
           
           for($r=0;$r<count($d_user_id);$r++)
           {   
               $de['lead_id']=$_POST['lead_id'];
               $de['user_id']=$d_user_id[$r];
               $de['assigned_by']=$_SESSION['user_id'];
               $this->db->insert('lead_retro_mapping',$de);
           }
               if($this->db->insert_id()>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Assigned Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
              redirect('Admin_Control/leads_assigned');
        }
        $id=$this->uri->segment(3);
        if(isset($_SESSION['user_id']))
        {
            $d['lead_id']=$id;
            $d['all_retro']=get_result('*','users',['user_type'=>5,'status'=>1]);
             $data['main_content']=$this->load->view('Admin_Panel/pages/Purchase/assign_retro',$d,TRUE);
             $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }

}

function assign()
    {   
        if(isset($_POST['lead_id']))
        {   
           $d_user_id=$_POST['p_id'];
           
           for($r=0;$r<count($d_user_id);$r++)
           {   
               $de['lead_id']=$_POST['lead_id'];
               $de['user_id']=$d_user_id[$r];
               $de['assigned_by']=$_SESSION['user_id'];
               $this->db->insert('lead_purchase_mapping',$de);
           }
               if($this->db->insert_id()>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Assigned Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
              redirect($_SERVER['HTTP_REFERER']);
        }
        $id=$this->uri->segment(3);
        if(isset($_SESSION['user_id']))
        {
            $d['lead_id']=$id;
            $d['purchase']=get_result('*','users',['user_type'=>4,'status'=>1]);
             $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/assign',$d,TRUE);
             $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }

}


function domestic_assign()
    {   
        if(isset($_POST['lead_id']))
        {   
           $d_user_id=$_POST['p_id'];
           
           for($r=0;$r<count($d_user_id);$r++)
           {   
               $de['lead_id']=$_POST['lead_id'];
               $de['user_id']=$d_user_id[$r];
               $de['assigned_by']=$_SESSION['user_id'];
               $this->db->insert('lead_purchase_mapping',$de);
           }
               if($this->db->insert_id()>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Assigned Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
              redirect('Admin_Control/domestic_lead');
        }
        $id=$this->uri->segment(3);
        if(isset($_SESSION['user_id']))
        {
            $d['lead_id']=$id;
            $d['purchase']=get_result('*','users',['user_type'=>4,'status'=>1]);
             $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/assign',$d,TRUE);
             $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }

}

function export_assign()
    {   
        if(isset($_POST['lead_id']))
        {   
           $d_user_id=$_POST['p_id'];
           
           for($r=0;$r<count($d_user_id);$r++)
           {   
               $de['lead_id']=$_POST['lead_id'];
               $de['user_id']=$d_user_id[$r];
               $de['assigned_by']=$_SESSION['user_id'];
               $this->db->insert('lead_purchase_mapping',$de);
           }
               if($this->db->insert_id()>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Assigned Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
              redirect('Admin_Control/export_lead');
        }
        $id=$this->uri->segment(3);
        if(isset($_SESSION['user_id']))
        {
            $d['lead_id']=$id;
            $d['purchase']=get_result('*','users',['user_type'=>4,'status'=>1]);
             $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/assign',$d,TRUE);
             $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }

}

   function open_retro_quotation()
   {   
        $id=$this->uri->segment(3);
        if(isset($_SESSION['user_id']))
        {
            $d['remark_detail']=$this->db->select('lead_id,rate,remark')->where('id',$id)->get('retro_quotation')->row();
             $data['main_content']=$this->load->view('Admin_Panel/pages/Sells_team/open_retro_quotation',$d,TRUE);
             $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }

}

  function pdf_quotation()
   {     
            $d['remark_detail']=$this->db->select('lead_id,rate,remark')->where('id',$id)->get('retro_quotation')->row();
            $html = $this->load->view('Admin_Panel/pages/Sells_team/pdf_quotation', $d, true);
			$name = 'print';
			$this->pdf->createPDF($html, $name, false);
}

    function add_remark()
    {   
        if(isset($_POST['id']))
        {   
            $rr=['remark'=>$_POST['remark']];
            
            if($_FILES['remark_photo']!='')
            {
              
              $temp = explode(".", $_FILES["remark_photo"]["name"]);
              $newfilename = time() . '.' . end($temp);
              if(move_uploaded_file($_FILES["remark_photo"]["tmp_name"], "./assets/remark_photo/" . $newfilename))
              {
                  $rr['remark_photo']=$newfilename;
              }
                    
            }
            
            $res=update_table('leads',$rr,['id'=>$_POST['id']]);
                
                 if($res>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Updated Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
              redirect($_SERVER['HTTP_REFERER']);

        }
        $id=$this->uri->segment(3);
        if(isset($_SESSION['user_id']))
        {
            $d['lead_id']=$id;
            $d['remark']=get_column('remark','leads',['id'=>$id],'remark');
            $d['remark_photo']=get_column('remark_photo','leads',['id'=>$id],'remark_photo');
             $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/lead_remark',$d,TRUE);
             $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }

}

    function view_rate_quotation()
    {   
        if(isset($_POST['id']))
        {   
            $rr['remark']=$_POST['remark'];
            $rr['lead_id']=$_POST['id'];
            $rr['user_id']=$_SESSION['user_id'];
            $rr['rate']=$_POST['rate'];
            
            if($_POST['rq_id']!='')
            {   
                $this->db->where('id',$_POST['rq_id']);
                $this->db->update('retro_quotation',$rr);
                $res=$this->db->affected_rows();
            }
            else
            {
                $this->db->insert('retro_quotation',$rr);
                $res=$this->db->insert_id();
            }
            
            
                
                 if($res>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Updated Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
              redirect('Admin_Control/retro_leads_assigned');
        }
        $id=$this->uri->segment(3);
        if(isset($_SESSION['user_id']))
        {   
            $d['lead_id']=$id;
            $rs['lead_id']=$id;
            $d['remark_detail']=$this->db->select('quotation.*')->where('quotation.lead_id',$id)->join('lead_retro_mapping','lead_retro_mapping.assigned_by=quotation.user_id')->get('quotation')->row();
            
            $rdf['lead_id']=$id;
            $rdf['user_id']=$_SESSION['user_id'];
            $d['retro_remark_detail']=$this->db->select('*')->where($rdf)->get('retro_quotation')->row();
             $data['main_content']=$this->load->view('Admin_Panel/pages/Retro/view_rate_quotation',$d,TRUE);
             $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }

}

    function rate_quotation()
    {   
        if(isset($_POST['id']))
        {   
            $rr['remark']=$_POST['remark'];
            $rr['lead_id']=$_POST['id'];
            $rr['user_id']=$_SESSION['user_id'];
            $rr['rate']=$_POST['rate'];
            
            if($_POST['q_id']!='')
            {   
                $this->db->where('id',$_POST['q_id']);
                $this->db->update('quotation',$rr);
                $res=$this->db->affected_rows();
            }
            else
            {
                $this->db->insert('quotation',$rr);
                $res=$this->db->insert_id();
            }
            
            
                
                 if($res>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Updated Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
              redirect('Admin_Control/leads_assigned');
        }
        $id=$this->uri->segment(3);
        if(isset($_SESSION['user_id']))
        {
            $d['lead_id']=$id;
            $rs['lead_id']=$id;
            if($_SESSION['user_type']!=5){
            $rs['user_id']=$_SESSION['user_id'];
            }
            $d['remark_detail']=$this->db->select('*')->where($rs)->get('quotation')->row();
             $data['main_content']=$this->load->view('Admin_Panel/pages/Purchase/rate_quotation',$d,TRUE);
             $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }

}

    function lead_distributor_list()
    {   
        if(isset($_SESSION['user_id']))
        {
       
            $d['allUser']=get_result('*','users',['user_type'=>2],'');
             $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/Lead_distributor_type',$d,TRUE);
             $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }

}


    function sell_team_list()
    {   
        if(isset($_SESSION['user_id']))
        {
       
            $d['allUser']=get_result('*','users',['user_type'=>3],'');
             $data['main_content']=$this->load->view('Admin_Panel/pages/Sells_team/sells_team_list',$d,TRUE);
             $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }

}

   function purchase_list()
    {   
        if(isset($_SESSION['user_id']))
        {
       
            $d['allUser']=get_result('*','users',['user_type'=>4],'');
             $data['main_content']=$this->load->view('Admin_Panel/pages/Purchase/purchase_list',$d,TRUE);
             $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }

}

  function retro_list()
    {   
        if(isset($_SESSION['user_id']))
        {
       
            $d['allUser']=get_result('*','users',['user_type'=>5],'');
             $data['main_content']=$this->load->view('Admin_Panel/pages/Retro/retro_list',$d,TRUE);
             $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }

}


    public function check_email()
    {          $this->db->select('id');
               $this->db->where('email',$_POST['email_id']);
               if(isset($_POST['userid']))
               {
                   $this->db->where('id !=',$_POST['userid']);
               }
               $data=$this->db->get($_POST['table'])->row();
        
        if(!empty($data))
        {
            echo 1;
        }
    }
    
    
      public function email_lead_check()
    {           $this->db->select('users.fname,users.lname,U.fname as ufname,U.lname');
               $this->db->where('leads.email',$_POST['email_id']);
               $this->db->or_where('leads.email2',$_POST['email_id']);
               
               if(isset($_POST['leadid']))
               {
                   $this->db->where('leads.id !=',$_POST['leadid']);
               }
               $this->db->join('users','users.id=leads.created_by');
               $this->db->join('users as U','U.id=leads.sales_member');
               $data=$this->db->get('leads')->row();
        
        if(!empty($data))
        {
            echo "This Email Id Is Already Associated with LD- ".$data->fname." ".$data->lname.", ST- ".$data->ufname;
        }
        
    }
    
     public function mobile_lead_check()
    {          $this->db->select('users.fname,users.lname,U.fname as ufname,U.lname');
               $this->db->where('leads.mobile',$_POST['mobile']);
               $this->db->or_where('leads.mobile2',$_POST['mobile']);
               
               if(isset($_POST['leadid']))
               {
                   $this->db->where('leads.id !=',$_POST['leadid']);
               }
               $this->db->join('users','users.id=leads.created_by');
               $this->db->join('users as U','U.id=leads.sales_member');
               $data=$this->db->get('leads')->row();
        
        if(!empty($data))
        {
            echo "This Mobile No. Is Already Associated with LD- ".$data->fname." ".$data->lname.", ST- ".$data->ufname;
        }
        
    }
    
     public function mobile_check()
    {
         $this->db->select('id');
               $this->db->where('mobile',$_POST['mobile_no']);
               if(isset($_POST['userid']))
               {
                   $this->db->where('id !=',$_POST['userid']);
               }
               $data=$this->db->get($_POST['table'])->row();
        if(!empty($data))
        {
            echo 1;
        }
    }
    
     public function gst_check()
    {
         $this->db->select('id');
               $this->db->where('gst_no',$_POST['gst_no']);
               if(isset($_POST['userid']))
               {
                   $this->db->where('id !=',$_POST['userid']);
               }
               $data=$this->db->get($_POST['table'])->row();
        if(!empty($data))
        {
            echo 1;
        }
    }
    
      public function email_check()
    {
         $this->db->select('id');
               $this->db->where('email',$_POST['email']);
               if(isset($_POST['userid']))
               {
                   $this->db->where('id !=',$_POST['userid']);
               }
               $data=$this->db->get($_POST['table'])->row();
        if(!empty($data))
        {
            echo 1;
        }
    }


function add_lead_distributor()
{
    $edit_id=$this->uri->segment(3);
    $dd['editData']='';
    if(isset($_SESSION['user_id']))
    {   
       
         if($_POST)
         {
            $rr['fname']=$_POST['fname'];
            $rr['lname']=$_POST['lname'];
            if($_POST['password']!='')
            {
                $rr['password']=md5($_POST['password']);
            }
            
            $rr['mobile']=$_POST['mobile'];
            $rr['email']=$_POST['email'];
            
            if($_FILES['offer_letter']!='')
            {
              
              $temp = explode(".", $_FILES["offer_letter"]["name"]);
              $newfilename = time() . '.' . end($temp);
              if(move_uploaded_file($_FILES["offer_letter"]["tmp_name"], "./assets/offer_letter/" . $newfilename))
              {
                  $rr['offer_letter']=$newfilename;
              }
                    
            }
                    
             if($_FILES['agreement']!='')
            {
                 $temp1 = explode(".", $_FILES["agreement"]["name"]);
              $newfilename1 = time() . '.' . end($temp1);
              if(move_uploaded_file($_FILES["agreement"]["tmp_name"], "./assets/agreement/" . $newfilename1))
              {
                  $rr['agreement']=$newfilename1;
              }
            }
            
            if($_POST['id']!='')
            {
                $res=update_table('users',$rr,['id'=>$_POST['id']]);
                
                 if($res>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Updated Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
              redirect($_SERVER['HTTP_REFERER']);
            }
            else
            {   
                $rr['user_type']=2;
                $last_emp_id=0;
                $last_emp_id=$this->db->select('emp_id')->where('user_type',2)->order_by('id','desc')->get('users')->row();
                if($last_emp_id->emp_id!='')
                {
                    $last_emp_id=str_replace('LD00','',$last_emp_id->emp_id);
                }
                
                $rr['emp_id']='LD00'.($last_emp_id+1);
                $this->db->insert('users',$rr);
                $insert_id=$this->db->insert_id();
                
                 if($insert_id>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Added Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
            }
            
            redirect('Admin_Control/lead_distributor_list');
         }
         
         if(!empty($edit_id))
         {
              $dd['editData']=$this->db->select('*')->where('id',$edit_id)->get('users')->row();
         }
         
         $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/lead_form',$dd,TRUE);

      $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }
}


function add_sells_team()
{
    $edit_id=$this->uri->segment(3);
    $dd['editData']='';
    if(isset($_SESSION['user_id']))
    {
         if($_POST)
         {
            $rr['fname']=$_POST['fname'];
            $rr['lname']=$_POST['lname'];
            if(!empty($_POST['password']))
            {
                $rr['password']=md5($_POST['password']);
            }
            
            $rr['mobile']=$_POST['mobile'];
            $rr['email']=$_POST['email'];
            $rr['sells_type']=$_POST['sells_type'];
            
             if($_FILES['offer_letter']!='')
            {
              
              $temp = explode(".", $_FILES["offer_letter"]["name"]);
              $newfilename = time() . '.' . end($temp);
              if(move_uploaded_file($_FILES["offer_letter"]["tmp_name"], "./assets/offer_letter/" . $newfilename))
              {
                  $rr['offer_letter']=$newfilename;
              }
                    
            }
                    
             if($_FILES['agreement']!='')
            {
                 $temp1 = explode(".", $_FILES["agreement"]["name"]);
              $newfilename1 = time() . '.' . end($temp1);
              if(move_uploaded_file($_FILES["agreement"]["tmp_name"], "./assets/agreement/" . $newfilename1))
              {
                  $rr['agreement']=$newfilename1;
              }
            }
            
            
            if($_POST['id']!='')
            {
                $res=update_table('users',$rr,['id'=>$_POST['id']]);
                
                 if($res>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Updated Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
              redirect($_SERVER['HTTP_REFERER']);
            }
            else
            {   
                $rr['user_type']=3;
                $last_emp_id=0;
                $last_emp_id=$this->db->select('emp_id')->where('user_type',3)->order_by('id','desc')->get('users')->row();
                if(!empty($last_emp_id) )
                {
                    if($last_emp_id->emp_id!='')
                    {
                      $last_emp_id=str_replace('ST00','',$last_emp_id->emp_id);
                    }
                    
                }
                
                $rr['emp_id']='ST00'.($last_emp_id+1);
                $this->db->insert('users',$rr);
                $insert_id=$this->db->insert_id();
                
                 if($insert_id>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Added Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
            }
            
            redirect('Admin_Control/sell_team_list');
         }
         
         if(!empty($edit_id))
         {
              $dd['editData']=$this->db->select('*')->where('id',$edit_id)->get('users')->row();
         }
         
         $data['main_content']=$this->load->view('Admin_Panel/pages/Sells_team/sells_team_form',$dd,TRUE);

      $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }
}

function add_purchase()
{
    $edit_id=$this->uri->segment(3);
    $dd['editData']='';
    if(isset($_SESSION['user_id']))
    {
         if($_POST)
         {
            $rr['fname']=$_POST['fname'];
            $rr['lname']=$_POST['lname'];
            $rr['password']=md5($_POST['password']);
            $rr['mobile']=$_POST['mobile'];
            $rr['email']=$_POST['email'];
            
             if($_FILES['offer_letter']!='')
            {
              
              $temp = explode(".", $_FILES["offer_letter"]["name"]);
              $newfilename = time() . '.' . end($temp);
              if(move_uploaded_file($_FILES["offer_letter"]["tmp_name"], "./assets/offer_letter/" . $newfilename))
              {
                  $rr['offer_letter']=$newfilename;
              }
                    
            }
                    
             if($_FILES['agreement']!='')
            {
                 $temp1 = explode(".", $_FILES["agreement"]["name"]);
              $newfilename1 = time() . '.' . end($temp1);
              if(move_uploaded_file($_FILES["agreement"]["tmp_name"], "./assets/agreement/" . $newfilename1))
              {
                  $rr['agreement']=$newfilename1;
              }
            }
            
            
            if($_POST['id']!='')
            {
                $res=update_table('users',$rr,['id'=>$_POST['id']]);
                
                 if($res>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Updated Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
              redirect($_SERVER['HTTP_REFERER']);
            }
            else
            {   
                $rr['user_type']=4;
                $last_emp_id=0;
                $last_emp_id=$this->db->select('emp_id')->where('user_type',4)->order_by('id','desc')->get('users')->row();
                if(!empty($last_emp_id) )
                {
                    if($last_emp_id->emp_id!='')
                    {
                      $last_emp_id=str_replace('P00','',$last_emp_id->emp_id);
                    }
                    
                }
                
                $rr['emp_id']='P00'.($last_emp_id+1);
                $this->db->insert('users',$rr);
                $insert_id=$this->db->insert_id();
                
                 if($insert_id>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Added Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
            }
            
            redirect('Admin_Control/purchase_list');
         }
         
         if(!empty($edit_id))
         {
              $dd['editData']=$this->db->select('*')->where('id',$edit_id)->get('users')->row();
         }
         
         $data['main_content']=$this->load->view('Admin_Panel/pages/Purchase/purchase_form',$dd,TRUE);

      $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }
}

function add_retro()
{
    $edit_id=$this->uri->segment(3);
    $dd['editData']='';
    if(isset($_SESSION['user_id']))
    {
         if($_POST)
         {
            $rr['fname']=$_POST['fname'];
            $rr['lname']=$_POST['lname'];
            if($_POST['password']!='')
            {
                $rr['password']=md5($_POST['password']);
            }
            
            $rr['mobile']=$_POST['mobile'];
            $rr['email']=$_POST['email'];
            
             if($_FILES['offer_letter']!='')
            {
              
              $temp = explode(".", $_FILES["offer_letter"]["name"]);
              $newfilename = time() . '.' . end($temp);
              if(move_uploaded_file($_FILES["offer_letter"]["tmp_name"], "./assets/offer_letter/" . $newfilename))
              {
                  $rr['offer_letter']=$newfilename;
              }
                    
            }
                    
             if($_FILES['agreement']!='')
            {
                 $temp1 = explode(".", $_FILES["agreement"]["name"]);
              $newfilename1 = time() . '.' . end($temp1);
              if(move_uploaded_file($_FILES["agreement"]["tmp_name"], "./assets/agreement/" . $newfilename1))
              {
                  $rr['agreement']=$newfilename1;
              }
            }
            
            
            if($_POST['id']!='')
            {
                $res=update_table('users',$rr,['id'=>$_POST['id']]);
                
                 if($res>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Updated Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
               redirect($_SERVER['HTTP_REFERER']);
            }
            else
            {   
                $rr['user_type']=5;
                $last_emp_id=0;
                $last_emp_id=$this->db->select('emp_id')->where('user_type',5)->order_by('id','desc')->get('users')->row();
                if(!empty($last_emp_id) )
                {
                    if($last_emp_id->emp_id!='')
                    {
                      $last_emp_id=str_replace('R00','',$last_emp_id->emp_id);
                    }
                    
                }
                
                $rr['emp_id']='R00'.($last_emp_id+1);
                $this->db->insert('users',$rr);
                $insert_id=$this->db->insert_id();
                
                 if($insert_id>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Added Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
            }
            
            redirect('Admin_Control/retro_list');
         }
         
         if(!empty($edit_id))
         {
              $dd['editData']=$this->db->select('*')->where('id',$edit_id)->get('users')->row();
         }
         
         $data['main_content']=$this->load->view('Admin_Panel/pages/Retro/retro_form',$dd,TRUE);

      $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }
}

function mobileCheck()
{
   
    $dd['edit_data']='';
    if(isset($_SESSION['user_id']))
    {
       $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/mobile_check',$dd,TRUE);

      $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }
}
function add_lead()
{  
    $edit_id=$this->uri->segment(3);
    $dd['edit_data']='';
    if(isset($_SESSION['user_id']))
    {
       
       
         if($_POST)
         {
            // print_r($_POST);
            $rr['buyer_name']=$_POST['buyer_name'];
            $rr['address']=$_POST['address'];
            $rr['state']=$_POST['state'];
            $rr['city']=$_POST['city'];
            $rr['pincode']=$_POST['pincode'];
            $rr['product_name']=$_POST['product_name'];
            $rr['amount']=$_POST['amount'];
            $rr['mobile']=$_POST['mobile'];
            $rr['email']=$_POST['email'];
            $rr['mode']=$_POST['mode'];
            $rr['case_id']=$_POST['case_id'];
            $rr['other']=$_POST['other'];
            $rr['gst']=$_POST['gst'];
            $rr['new_existing']=$_POST['new_existing'];
            $rr['additonal_remarks']=$_POST['additonal_remarks'];
            $rr['payment_recieved_for']=$_POST['payment_recieved_for'];
            
            if($_POST['id']!='')
            {   
                $res=update_table('leads',$rr,['id'=>$_POST['id']]);
                
                 if($res>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Updated Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
              redirect('Admin_Control/add_lead');
            }
            else
            {   
                $rr['created_by']=$_SESSION['user_id'];
                $this->db->insert('leads',$rr);
                $insert_id=$this->db->insert_id();
                
                 if($insert_id>0){
                     
                     $edit_data=$this->db->select('*')->where('id',$insert_id)->get('leads')->row();
         $to = $_POST['email'];
         $subject = "Receipt No 000".$insert_id." is Created.";
         $message = '<html><body>';
         $message.= '<div class="main-content" style="margin-left:40px!important;">

  <div class="container-fluid content-top-gap" >

      <div id="frameContainer" class="payment-receipt" style="padding:50px 30px;">
  <div class="container" style="width:800px;">
  <h1 style="color: #f58220;font-size: 30px;line-height: 40px;margin: 0;margin-bottom:15px;">Payment Reciept</h1>
			<p><strong><small style="color:#a3a3a3;width: 100px;display: inline-block;">Receipt No#</small> 000'.$edit_data->id.'</strong> </p>
			<p><strong><small style="color:#a3a3a3;width: 100px;display: inline-block;">Date</small>  '.date('d-M-Y',strtotime($edit_data->created_on)).'</strong></p>';
		 if($edit_data->cancel==1){ 
			$message.='<p><strong><small style="color:#a3a3a3;width: 100px;display: inline-block;">Cancelled On</small>  '.date('d-M-Y',strtotime($edit_data->cancelled_on)).'</strong></p>';
			 } 
	$message.='<div class="site-logo" style="text-align:right;"><img src="https://www.32watts.com/images/logo.png" style="width: 90px;margin-top: -120px;"></div>
	<div class="row" style="display:flex;margin-top:20px;">
		<div class="col-md-6">
		<div class="det-box" style="background: #f5f5f5;padding: 30px;border-radius: 10px;">
			<h3 style="color: #f58220;font-size: 20px;line-height: 30px;margin: 0;margin-bottom:15px;">Payment Receipt</h3>
			<p><strong>Renderwise Solutions Private Ltd</strong></p>
			<p>GSTIN-
07AAICR0930R1ZX</p>
<p>Address: A-93/1-5, first floor, Wazirpur industrial area, New Delhi - 110052
</p>
<p>Delhi, India, 110052</p>
<p><strong>Phone:</strong> +919773900267</p>
		</div>
		</div>
		<div class="col-md-6">
		<div class="det-box" style="background: #f5f5f5;padding: 30px;border-radius: 10px;height:80%;">
			<h3 style="color: #f58220;font-size: 20px;line-height: 30px;margin: 0;margin-bottom:15px;">Receipt For Patient</h3>
			<p><strong>'.(($edit_data)?$edit_data->buyer_name:'').'</strong></p>
			<p>'.(($edit_data)?$edit_data->address:'').'</p>
			<p>'.(($edit_data)?$edit_data->pincode:'').'</p>
<p><strong>Email:</strong>'.(($edit_data)?$edit_data->email:'').'</p>
		</div>
		</div>
	</div>
	
		<div class="total-amount" style="margin-top:30px;display: flex;justify-content: space-between;">
		<div class="lft-part">
			<p><strong>Received Sum of Rs. ( '.getIndianCurrency($edit_data->amount).' Only  )  </strong></p>
		</div>
	</div>
		<div class="total-amount" style="margin-top:10px;display: flex;justify-content: space-between;">
		<div class="lft-part">
			<p><strong>Collected By - '.get_user_name1($edit_data->created_by).'   </strong></p>
		</div>
	</div>
	<div class="note" style="margin-top: 30px;">
		<p style="color: #f58220;margin-bottom: 0;"><strong>For Render Wise Solutions Private Limited</strong></p>
		<hr>
		<p style="color: #f58220;margin-bottom: 0;"><strong>Terms and Conditions</strong></p>
		<p>1.This is a payment receipt, Invoice will be subsequently issued and sent to your registered e-mail id</p>
		<p>2.Receipt is valid subject to realization of Payment in Company Account</p>
		<p>3.This is a computer-generated document and does not require Signature</p>
	</div>
	<div class="row">
       <div class="col-lg-12" style="display: flex;justify-content: center;margin-top: 20px;">
          <span style="
             width: 187px;
             display: inline-block;
             text-align: center;
             font-size: 18px;
             border-right: 1px solid #ccecf7;
             "><a href="https://www.32watts.com/" style="
             text-decoration: none;
             color: #f58220;
             ">www.32watts.com</a></span>
          <span style="
             width: 187px;
             display: inline-block;
             text-align: center;
             font-size: 18px;
             border-right: 1px solid #ccecf7;
             "><a href="tel:+919560570580" style="
             text-decoration: none;
             color: #f58220;
             ">9-560-570-580</a></span>
          <span style="
             width: 187px;
             display: inline-block;
             text-align: center;
             font-size: 18px;
             "><a href="mailto:#" style="
             text-decoration: none;
             color: #f58220;
             ">32watts@info.com</a></span>
       </div>
    </div>
  </div>
  
  </div>
  
  
  
  </div>
  
</div>

 ';
 

$message .= "</body></html>";
         
         
         $header = "From:receipt@32watts.com \r\n";
         $header .= "Cc:info@32watts.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Added Successfuly! Receipt ID: PR-000'.$insert_id.' <a href="'.base_url('Admin_Control/view_lead/'.$insert_id).'" style="color:white;">VIEW</a></div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
                           
                           redirect('Admin_Control/add_lead');
              }
            }
           
                
            
            
         }
         
         if(!empty($edit_id))
         {
              $dd['edit_data']=$this->db->select('*')->where('id',$edit_id)->get('leads')->row();
         }
         $dd['states']= $this->db->select('*')->get('state')->result();
         $dd['sales_team']= $this->db->select('fname,emp_id,id')->where('user_type',3)->get('users')->result();
         $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/add_lead',$dd,TRUE);

      $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }
    
}

function view_lead()
{
    $edit_id=$this->uri->segment(3);
    $dd['edit_data']='';
    if(isset($_SESSION['user_id']))
    {
        if(!empty($edit_id))
         {
              $dd['edit_data']=$this->db->select('*')->where('id',$edit_id)->get('leads')->row();
         }
         $dd['states']= $this->db->select('*')->get('state')->result();
         $dd['sales_team']= $this->db->select('fname,emp_id,id')->where('user_type',3)->get('users')->result();
         $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/view_lead',$dd,TRUE);

      $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }
    
}

function get_cities()
{  
    $dd='';
    if($_POST['state_id']>0) 
    {
        $rr=$this->db->select('*')->where('state_id',$_POST['state_id'])->get('cities')->result();
        if(!empty($rr))
        { 
            foreach($rr as $tt)
            {
                $dd.='<option  value="'.$tt->id.'">'.$tt->city_name.'</option>'; 
            }
           
        }
    }
    echo $dd;
}

function show_old_mapping()
{
    $result=$this->db->select('*')->where('old_id',$_POST['o_id'])->get('old_mapping')->result();
    
    $data='';
    if(!empty($result))
    {
        foreach($result as $rr)
        {
            $data.='<tr>';
            $data.='<td>'.$rr->product_name.'</td>';
            $data.='<td>'.$rr->qty.'</td>';
            $data.='<td>'.$rr->price.'</td>';
            $data.='<td>'.$rr->gst.'</td>';
            $data.='</tr>';
        }
    }
    echo $data;
}

function show_vendor_mapping()
{
    $result=$this->db->select('*')->where('vendor_id',$_POST['o_id'])->get('vendor_mapping')->result();
    
    $data='';
    
    if(!empty($result))
    {
        foreach($result as $rr)
        {
            $data.='<tr>';
            $data.='<td>'.$rr->product_name.'</td>';
            $data.='<td>'.$rr->qty.'</td>';
            $data.='<td>'.$rr->price.'</td>';
            $data.='<td>'.$rr->gst.'</td>';
            $data.='</tr>';
        }
    }
    echo $data;
}


function add_old()
{
    $edit_id=$this->uri->segment(3);
    $dd['edit_data']='';
    if(isset($_SESSION['user_id']))
    {
         if($_POST)
         {
           
            $rr['buyer_name']=$_POST['buyer_name'];
            $rr['buyer_address']=$_POST['buyer_address'];
            $rr['mobile']=$_POST['mobile'];
            $rr['email']=$_POST['email'];
            $rr['dated']=$_POST['dated'];
            
            $rr['company_name']=$_POST['company_name'];
           
            $rr['created_by']=$_SESSION['user_id'];
            
            
            if($_POST['id']!='')
            {
                $res=update_table('old',$rr,['id'=>$_POST['id']]);
                
                 if($res>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Updated Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
              redirect('/Admin_Control/add_old');
            }
            else
            {   
                $this->db->insert('old',$rr);
                $insert_id=$this->db->insert_id();
                
                 if($insert_id>0){
                       $product_name=$_POST['product_name'];
                       
                       for($r=0;$r<count($product_name);$r++)
                       {
                           $ss['product_name']=$_POST['product_name'][$r];
                           $ss['qty']=$_POST['qty'][$r];
                           $ss['price']=$_POST['price'][$r];
                           $ss['gst']=$_POST['gst'][$r];
                           $ss['old_id']=$insert_id;
                           
                           $this->db->insert('old_mapping',$ss);
                       }
                     
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Added Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
            }
            
            redirect('Admin_Control/add_old');
         }
         
         if(!empty($edit_id))
         {
              $dd['edit_data']=$this->db->select('*')->where('id',$edit_id)->get('old')->row();
         }
         $dd['allold']= $this->db->select('*')->where('created_by',$_SESSION['user_id'])->get('old')->result();
         $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/add_old',$dd,TRUE);

      $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }
}


function add_old_vendor()
{
    $edit_id=$this->uri->segment(3);
    $dd['edit_data']='';
    if(isset($_SESSION['user_id']))
    {
         if($_POST)
         {
            $rr['buyer_name']=$_POST['buyer_name'];
            $rr['buyer_address']=$_POST['buyer_address'];
            $rr['mobile']=$_POST['mobile'];
            $rr['email']=$_POST['email'];
            $rr['dated']=$_POST['dated'];
            $rr['company_name']=$_POST['company_name'];
            // $rr['product_name']=$_POST['product_name'];
            // $rr['qty']=$_POST['qty'];
            $rr['gst_no']=$_POST['gst_no'];
            $rr['created_by']=$_SESSION['user_id'];
            
            
            if($_POST['id']!='')
            {
                $res=update_table('vendor',$rr,['id'=>$_POST['id']]);
                
                 if($res>0){
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Updated Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
              redirect('/Admin_Control/add_old_vendor');
            }
            else
            {   
                $this->db->insert('vendor',$rr);
                $insert_id=$this->db->insert_id();
                
                 if($insert_id>0){
                     
                       $product_name=$_POST['product_name'];
                       
                       for($r=0;$r<count($product_name);$r++)
                       {
                           $ss['product_name']=$_POST['product_name'][$r];
                           $ss['qty']=$_POST['qty'][$r];
                           $ss['price']=$_POST['price'][$r];
                           $ss['gst']=$_POST['gst'][$r];
                           $ss['description']=$_POST['description'][$r];
                           $ss['vendor_id']=$insert_id;
                           
                           $this->db->insert('vendor_mapping',$ss);
                       }
            
            $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Added Successfuly!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
              }
            }
            
            redirect('Admin_Control/add_old_vendor');
         }
         
         if(!empty($edit_id))
         {
              $dd['edit_data']=$this->db->select('*')->where('id',$edit_id)->get('vendor')->row();
         }
         $dd['allold']= $this->db->select('*')->get('vendor')->result();
         $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/add_old_vendor',$dd,TRUE);

      $this->generate_view($data);
    }
    else
    {
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
    }
}


function mark_cheked()
{
     $id=$this->uri->segment(3);
     
     $this->db->set('checked',1);
     $this->db->where('id',$id);
     $this->db->update('leads');
     
     redirect($_SERVER['HTTP_REFERER']);
}

    function cancelled_leads_list()
    {   
        if(isset($_SESSION['user_id']))
        {            $this->db->select('leads.*,users.fname,users.emp_id');
                     $this->db->join('users','users.id=leads.created_by');
                     
                    if(isset($_GET['datefrom']) && $_GET['datefrom']!=""){
                         //$this->db->where('leads.created_on',$_GET['datefrom']);
                         
                         $this->db->like('leads.created_on', $_GET['datefrom'], 'both'); 
                     }
                     
                     
                     if(isset($_GET['dateto']) && $_GET['dateto']!=""){
                         $this->db->like('leads.created_on', $_GET['dateto'], 'both'); 
                     }
                 $this->db->where('leads.cancel',1);
                     $this->db->order_by('leads.id','DESC');
            $d['allleads']=$this->db->get('leads')->result();
           
             $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/cancelled_leads_list',$d,TRUE);
             $this->generate_view($data);
        }
        else
        {
            $this->load->view('Admin_Panel/pages/Login/admin_login_view');
        }

   }
   
    function leads_list()
    {   
        if(isset($_SESSION['user_id']))
        {            $this->db->select('leads.*,users.fname,users.emp_id');
                     $this->db->join('users','users.id=leads.created_by');
                     
                    if(isset($_GET['datefrom']) && $_GET['datefrom']!=""){
                         //$this->db->where('leads.created_on',$_GET['datefrom']);
                         
                         $this->db->like('leads.created_on', $_GET['datefrom'], 'both'); 
                     }
                     
                     
                     if(isset($_GET['dateto']) && $_GET['dateto']!=""){
                         $this->db->like('leads.created_on', $_GET['dateto'], 'both'); 
                     }
                 $this->db->where('leads.cancel',0);
                     $this->db->order_by('leads.id','DESC');
            $d['allleads']=$this->db->get('leads')->result();
           
             $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/all_lead',$d,TRUE);
             $this->generate_view($data);
        }
        else
        {
            $this->load->view('Admin_Panel/pages/Login/admin_login_view');
        }

   }
   
   function set_v()
   {
        $id=$_POST['id'];
        $new_st=$_POST['new_st'];
        
        $this->db->set('account_verification',$new_st);
        $this->db->where('id',$id);
        if($this->db->update('leads'))
        {
           echo "Status Changed"; 
        }
   }
   
   
   function set_invoice()
   {    
        $id=$_POST['l_id'];
        $dd['invoice_no']=$_POST['invoice_no'];
        $dd['invoice_date']=$_POST['invoice_date'];
        
        $this->db->where('id',$id);
        if($this->db->update('leads',$dd))
        {
           $this->session->set_flashdata('success','Invoice Updated.');
        }
        redirect('Admin_Control/leads_list');
   }

    function user_leads_list()
    {   
        if(isset($_SESSION['user_id']))
        {            $this->db->select('leads.*,users.fname,users.emp_id');
                     $this->db->join('users','users.id=leads.created_by');
                     
                    if(isset($_GET['datefrom']) && $_GET['datefrom']!=""){
                         //$this->db->where('leads.created_on',$_GET['datefrom']);
                         
                         $this->db->like('leads.created_on', $_GET['datefrom'], 'both'); 
                     }
                     
                     
                     if(isset($_GET['dateto']) && $_GET['dateto']!=""){
                         $this->db->like('leads.created_on', $_GET['dateto'], 'both'); 
                     }
                 $this->db->where('leads.cancel',0);
                 $this->db->where('leads.created_by',$this->uri->segment(3));
                     $this->db->order_by('leads.id','DESC');
            $d['allleads']=$this->db->get('leads')->result();
           
             $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/all_lead',$d,TRUE);
             $this->generate_view($data);
        }
        else
        {
            $this->load->view('Admin_Panel/pages/Login/admin_login_view');
        }

   }
   
    function leads_list_dash()
    {   
        if(isset($_SESSION['user_id']))
        {            $this->db->select('leads.*,users.fname,users.emp_id');
                     $this->db->join('users','users.id=leads.sales_member');
                     $this->db->where('company_type',$this->uri->segment(3));
                     if($_SESSION['user_type']=='2')
                     {   
                         $this->db->where('created_by',$_SESSION['user_id']);
                         
                        //  if($this->uri->segment(3)>0)
                        //  {
                        //      $this->db->where('sales_member',$this->uri->segment(3));
                        //  }
                         
                     }
                     if($_SESSION['user_type']=='3')
                     {
                         $this->db->where('sales_member',$_SESSION['user_id']);
                     }
            $d['allleads']=$this->db->get('leads')->result();
             $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/all_lead',$d,TRUE);
             $this->generate_view($data);
        }
        else
        {
            $this->load->view('Admin_Panel/pages/Login/admin_login_view');
        }

   }
   
    function cold_lead()
    {   
        if(isset($_SESSION['user_id']))
        {            $this->db->select('leads.*,users.fname,users.emp_id');
                     $this->db->join('users','users.id=leads.sales_member');
                     if($_SESSION['user_type']=='3')
                     {
                         $this->db->where('sales_member',$_SESSION['user_id']);
                     }
                     $this->db->where('hot_cold',3);
                     $this->db->order_by('leads.id','DESC');
            $d['allleads']=$this->db->get('leads')->result();
             $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/cold_lead',$d,TRUE);
             $this->generate_view($data);
        }
        else
        {
            $this->load->view('Admin_Panel/pages/Login/admin_login_view');
        }

   }
   
    function hot_lead()
    {   
        if(isset($_SESSION['user_id']))
        {            $this->db->select('leads.*,users.fname,users.emp_id');
                     $this->db->join('users','users.id=leads.sales_member');
                     if($_SESSION['user_type']=='3')
                     {
                         $this->db->where('sales_member',$_SESSION['user_id']);
                     }
                     $this->db->where('hot_cold',1);
                     $this->db->order_by('leads.id','DESC');
            $d['allleads']=$this->db->get('leads')->result();
             $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/hot_lead',$d,TRUE);
             $this->generate_view($data);
        }
        else
        {
            $this->load->view('Admin_Panel/pages/Login/admin_login_view');
        }

   }
   
    function warm_lead()
    {   
        if(isset($_SESSION['user_id']))
        {            $this->db->select('leads.*,users.fname,users.emp_id');
                     $this->db->join('users','users.id=leads.sales_member');
                     if($_SESSION['user_type']=='3')
                     {
                         $this->db->where('sales_member',$_SESSION['user_id']);
                     }
                     $this->db->where('hot_cold',2);
                     $this->db->order_by('leads.id','DESC');
            $d['allleads']=$this->db->get('leads')->result();
             $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/warm_lead',$d,TRUE);
             $this->generate_view($data);
        }
        else
        {
            $this->load->view('Admin_Panel/pages/Login/admin_login_view');
        }

   }
   
    function domestic_lead()
    {   
        if(isset($_SESSION['user_id']))
        {            $this->db->select('leads.*,users.fname,users.emp_id');
                     $this->db->join('users','users.id=leads.sales_member');
                     if($_SESSION['user_type']=='3')
                     {
                         $this->db->where('sales_member',$_SESSION['user_id']);
                     }
                     $this->db->where('sales_type',1);
                      $this->db->where('hot_cold IS NULL');
                      $this->db->or_where('hot_cold','0');
                     $this->db->order_by('leads.id','DESC');
            $d['allleads']=$this->db->get('leads')->result();
             $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/domestic_lead',$d,TRUE);
             $this->generate_view($data);
        }
        else
        {
            $this->load->view('Admin_Panel/pages/Login/admin_login_view');
        }

   }
   
    function export_lead()
    {   
        if(isset($_SESSION['user_id']))
        {            $this->db->select('leads.*,users.fname,users.emp_id');
                     $this->db->join('users','users.id=leads.sales_member');
                     if($_SESSION['user_type']=='3')
                     {
                         $this->db->where('sales_member',$_SESSION['user_id']);
                     }
                     $this->db->where('sales_type',2);
                     $this->db->where('hot_cold IS NULL');
                    $this->db->or_where('hot_cold','0');
                     $this->db->order_by('leads.id','DESC');
            $d['allleads']=$this->db->get('leads')->result();
             $data['main_content']=$this->load->view('Admin_Panel/pages/Lead_distributor/export_lead',$d,TRUE);
             $this->generate_view($data);
        }
        else
        {
            $this->load->view('Admin_Panel/pages/Login/admin_login_view');
        }

   }
   
       function view_retro_quotation()
    {   
        if(isset($_SESSION['user_id']))
        {            $this->db->select('retro_quotation.*,users.fname,users.lname,users.emp_id');
                     $this->db->join('users','users.id=retro_quotation.user_id');
                     $this->db->where('retro_quotation.lead_id',$this->uri->segment(3));
                     
            $d['allleads']=$this->db->get('retro_quotation')->result();
             $data['main_content']=$this->load->view('Admin_Panel/pages/Sells_team/view_retro_quotation',$d,TRUE);
             $this->generate_view($data);
        }
        else
        {
            $this->load->view('Admin_Panel/pages/Login/admin_login_view');
        }

   }


  function leads_assigned()
    {   
        if(isset($_SESSION['user_id']))
        {            $this->db->select('leads.*,users.fname,users.lname');
                     //$this->db->join('users','users.id=leads.sales_member');
                     
            $this->db->join('lead_purchase_mapping','lead_purchase_mapping.lead_id=leads.id');
            $this->db->join('users','users.id=lead_purchase_mapping.assigned_by');
            $this->db->where('lead_purchase_mapping.user_id',$_SESSION['user_id']);
            
            $this->db->where("leads.id NOT IN (select junk_lead.lead_id from junk_lead) ");
            
            $this->db->order_by('leads.id','DESC');
            $this->db->group_by('leads.id');
            $d['allleads']=$this->db->get('leads')->result();
            
             $data['main_content']=$this->load->view('Admin_Panel/pages/Purchase/assigned_lead',$d,TRUE);
             $this->generate_view($data);
        }
        else
        {
            $this->load->view('Admin_Panel/pages/Login/admin_login_view');
        }

   }
   
     function leads_junk()
    {   
        if(isset($_SESSION['user_id']))
        {            $this->db->select('leads.*,users.fname,,users.lname');
                     //$this->db->join('users','users.id=leads.sales_member');
                     
            $this->db->join('lead_purchase_mapping','lead_purchase_mapping.lead_id=leads.id');
            $this->db->join('users','users.id=lead_purchase_mapping.assigned_by');
            $this->db->where('lead_purchase_mapping.user_id',$_SESSION['user_id']);
            $this->db->where("leads.id IN (select junk_lead.lead_id from junk_lead) ");
            $this->db->order_by('leads.id','DESC');
            $this->db->group_by('leads.id');
            $d['allleads']=$this->db->get('leads')->result();
            
             $data['main_content']=$this->load->view('Admin_Panel/pages/Purchase/assigned_lead',$d,TRUE);
             $this->generate_view($data);
        }
        else
        {
            $this->load->view('Admin_Panel/pages/Login/admin_login_view');
        }

   }
   
   
     function retro_leads_assigned()
    {   
        if(isset($_SESSION['user_id']))
        {   
            $this->db->select('leads.*,users.fname,users.lname');
            $this->db->join('lead_retro_mapping','lead_retro_mapping.lead_id=leads.id');
            $this->db->join('users','users.id=lead_retro_mapping.assigned_by','left');
            $this->db->where('lead_retro_mapping.user_id',$_SESSION['user_id']);
            $this->db->order_by('leads.id','DESC');
            $d['allleads']=$this->db->get('leads')->result();
            
             $data['main_content']=$this->load->view('Admin_Panel/pages/Retro/retro_leads_assigned',$d,TRUE);
             $this->generate_view($data);
        }
        else
        {
            $this->load->view('Admin_Panel/pages/Login/admin_login_view');
        }

   }
   
     function mail_convo()
    {   
        if(isset($_SESSION['user_id']))
        {   
            if($_POST)
            {
                $arr['sender_id']=$this->session->userdata('user_id');
                $arr['receiver_id']=$this->input->post('to');
                $arr['subject']=$this->input->post('subject');
                $arr['message']=$this->input->post('message');
                
              $newimage = time().'-'.$_FILES['attachment']['name'];
              $config = array(
                    'upload_path' => "./assets/attachment/",
                    'allowed_types' => "*",
                    'overwrite' => TRUE,
                    'file_name' => $newimage
              );

              $this->load->library('upload', $config);      

                if ($this->upload->do_upload('attachment'))
                {
                     $arr['attachment'] = $newimage;  
                }
                // else
                // {
                //     $error = array('error' => $this->upload->display_errors());
                //     var_dump($error);die;
                // }
                
                if($this->db->insert('mail_convo',$arr))
                {
                    $this->session->set_flashdata('success','Mail Sent.');
                }
                else
                {
                    $this->session->set_flashdata('warning','Unable to sent mail.');
                }
                echo 
                redirect('Admin_Control/mail_convo');
            }
            
            $this->db->select('users.id,users.email,users.fname,users.lname');
            $this->db->where('status',1);
            $this->db->where('id !=',$_SESSION['user_id']);
            $d['user_detail']=$this->db->get('users')->result();
            
            
            $this->db->select('mail_convo.id,mail_convo.created_on,mail_convo.subject,mail_convo.message,users.email,users.fname as sfname,users.lname as slname');
            
            if($this->uri->segment('3')=='sent')
            {
                $this->db->join('users','users.id=mail_convo.receiver_id','left');
                $this->db->where('mail_convo.sender_id',$_SESSION['user_id']);
            }
            else
            {
                $this->db->join('users','users.id=mail_convo.sender_id','left');
                $this->db->where('mail_convo.receiver_id',$_SESSION['user_id']);
            }
            
            $this->db->order_by('mail_convo.id','DESC');
            
            $d['inbox']=$this->db->get('mail_convo')->result();
            
             $data['main_content']=$this->load->view('Admin_Panel/pages/Dashboard/mail_convo',$d,TRUE);
             $this->generate_view($data);
        }
        else
        {
            $this->load->view('Admin_Panel/pages/Login/admin_login_view');
        }

   }
   
   function msg_detail()
   {
          $this->db->select('mail_convo.subject,mail_convo.message,mail_convo.attachment');
            
           $this->db->where('mail_convo.id',$_POST['v_id']);
            
            
            $d['inbox']=$this->db->get('mail_convo')->row();
            
            echo json_encode($d['inbox']);
   }


}