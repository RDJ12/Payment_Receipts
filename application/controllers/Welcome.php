<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct()
    {
        parent::__construct(); 
        
        $this->load->model('Users_Model');
        $this->load->library('Pdf');
        
    }
    
   public function index()
    {  
      if(isset($_SESSION['user_id']))
      {  $d['profile']=get_column('*','users',['id'=>$_SESSION['user_id']]);
      
      if($_SESSION['user_type']==3)
        {
             redirect('Admin_Control/add_lead');
        }
        else
        {
             $data['main_content']=$this->load->view('Admin_Panel/pages/Dashboard/dashboard_view',$d,TRUE);
        $this->generate_view($data);
        }
       
      }
      else
      { 
        if($_POST)
        {     

          $this->form_validation->set_rules('admin_email','Email Id','required|valid_email|max_length[30]');
          $this->form_validation->set_rules('admin_password', 'Password', 'required|max_length[20]');
          
          if ($this->form_validation->run() == FALSE)
                {       
                  $this->session->set_flashdata('mess','<div class="alert text-white bg-danger" role="alert">
                              <div class="iq-alert-text">'.validation_errors().'</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
                        redirect('/admin');
                }

                
             $da1['email']=$this->input->post('admin_email');
             $da1['password']=md5($this->input->post('admin_password'));

                 $res_user=$this->Users_Model->user_login_check($da1['email'],$da1['password']);
                 
                 if(!empty($res_user)){
               $this->session->set_flashdata('mess','<div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text">Successfully Log In!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');

               $_SESSION['user_id']=$res_user->id;
               $_SESSION['user_type']=$res_user->user_type;
             }
             else
             {
                 $this->session->set_flashdata('mess','<div class="alert text-white bg-danger" role="alert">
                              <div class="iq-alert-text">Unable To Login!</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>');
             }
             
           redirect('/admin');
        }
        $this->load->view('Admin_Panel/pages/Login/admin_login_view');
      }

       
      
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

}
