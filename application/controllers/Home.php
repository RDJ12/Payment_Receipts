<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    	public function index()
	{  
	   
	    $data['home_welcome']='';
	    $data['main_content']=$this->load->view('home/pages/web_home','',TRUE);
        $this->generate_view($data);
	}
	
	  function view_product_detail()
    {
       $id=$this->uri->segment(3);
       $d['product_detail']=$this->db->select('*')->where('product_id',$id)->get('product')->row();
       $data['main_content']=$this->load->view('home/pages/view_product_detail',$d,TRUE);

      $this->generate_view($data);
    }
	
	function view_product()
	{
	    //$cat_id=$this->uri->segment(3);
	    $sub_cat_id=$this->uri->segment(4);
	    
	    $c['product_detail']=$this->db->select('*')->where('sub_category_id',$sub_cat_id)->get('product')->result();
	    $data['main_content']=$this->load->view('home/pages/view_product',$c,TRUE);
        $this->generate_view($data);
	}
	
	function generate_view($data)
   {    
        $setting_data['website_category']=$this->db->select('*')->where('category_status',1)->get('category')->result();
        $data['header_script'] = $this->load->view('home/templates/header_script', $setting_data, TRUE);
      
        $data['footer_script'] = $this->load->view('home/templates/footer_script', '', TRUE);
        
        $this->load->view('home/templates/home',$data);        
   }
    
    public function service()
    {
        $data['services_data']=$this->db->select('*')->where('id',1)->get('services')->row();
	    
	    $this->load->view('home/service',$data);
    }
    
    
    

    
    
    public function send_contact_mail()
	{   
	    $dd['name']=$_POST['name'];
	    $dd['email']=$_POST['email'];
	    $dd['message']=$_POST['message'];
	    
	    $this->db->insert('contact_request',$dd);
	    
	     $to = "info@oxygencare.in";
         $subject = "Contact";
         $message = "<b>Name :</b>".$_POST['name']."<br>";
         $message .= "<b>Email :</b>".$_POST['email']."<br>";
         $message .= "<b>Message :</b>".$_POST['message']."<br>";
         $header = "From:info@oxygencare.in \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         $retval = mail($to,$subject,$message,$header);
         echo $retval;
	}


	
	public function contact()
	{
		$this->load->view('home/contact');
	}
	
	public function gdpr()
	{
		$this->load->view('home/gdpr');
	}
	
	public function privacy_policy()
	{
		$this->load->view('home/privacy_policy');
	}
	
	public function service_request()
	{
		$this->load->view('home/service_request');
	}
	
// 	public function service()
// 	{
// 		$this->load->view('home/service');
// 	}
	
	public function terms_and_condition()
	{
		$this->load->view('home/terms_and_condition');
	}
	
	public function team()
	{   
	    $data['team']=$this->db->select('*')->where('id',1)->get('team')->row();
		$this->load->view('home/team',$data);
	}
	
	public function quote()
	{   
	    $this->load->view('home/quote');
	}
	
	public function raise_request()
	{   
	    $this->load->view('home/raise_request');
	}
	
	public function form_1()
	{   
	    if($_POST)
	    {   
	        //var_dump($_POST);die;
	        //$dd['organisation_name']=$_POST['organisation_name'];
	        $dd['email']=$_POST['email'];
	        $dd['city']=$_POST['city'];
	        //$dd['no_oc']=$_POST['no_oc'];
	        //$dd['country']=$_POST['country'];
	        $dd['contact_name']=$_POST['organisation_name'];
	        $dd['phone']=$_POST['phone'];
	        //$dd['address']=$_POST['address'];
	       // $dd['comment']=$_POST['comment'];
	       $dd['form_type']=1;
	        if($_POST['size']==1)
	        { 
	             $dd['size']='1-5L';
	        }
	        else if($_POST['size']==2)
	        {
	            $dd['size']='6-9L';
	        }
	        else if($_POST['size']==3)
	        {
	             $dd['size']='10L and Above';
	        }
	        
	        
	        if($_POST['country']==4)
	        { 
	             $dd['country']='China';
	        }
	        else if($_POST['country']==5)
	        {
	            $dd['country']='Non China';
	        }
	        
	        
	        if(isset($_POST['package1']))
	        {
	            $dd['package']='silver';
	        }
	        
	        if(isset($_POST['package2']))
	        {
	            $dd['package']='gold';
	        }
	        
	        
	        $dd['amount']=0;
	        
	        //
	        if(isset($_POST['package1']) )
	        {
	             if($_POST['country']==4 && $_POST['size']==1)
	             {
	                 $dd['amount']='3990';
	             }
	             else if($_POST['country']==4 && $_POST['size']==2)
	             { 
	                 $dd['amount']='4990';
	             }
	             else if($_POST['country']==4 && $_POST['size']==3)
	             {
	                 $dd['amount']='6990';
	             }
	             
	             else if($_POST['country']==5 && $_POST['size']==1)
	             {
	                 $dd['amount']='5990';
	             }
	             else if($_POST['country']==5 && $_POST['size']==2)
	             { 
	                 $dd['amount']='6990';
	             }
	             else if($_POST['country']==5 && $_POST['size']==3)
	             {
	                 $dd['amount']='8990';
	             }
	        }
	        
	        if(isset($_POST['package2'])  )
	        {
	             if($_POST['country']==4 && $_POST['size']==1)
	             {
	                 $dd['amount']='5990';
	             }
	             else if($_POST['country']==4 && $_POST['size']==2)
	             { 
	                 $dd['amount']='6990';
	             }
	             else if($_POST['country']==4 && $_POST['size']==3)
	             {
	                 $dd['amount']='9990';
	             }
	             
	             else if($_POST['country']==5 && $_POST['size']==1)
	             {
	                 $dd['amount']='8990';
	             }
	             else if($_POST['country']==5 && $_POST['size']==2)
	             { 
	                 $dd['amount']='9990';
	             }
	             else if($_POST['country']==5 && $_POST['size']==3)
	             {
	                 $dd['amount']='12990';
	             }
	        }
	        //
	        
	        
	        $this->db->insert('quote',$dd);
	        
	        
	        
	        if($this->db->insert_id()>0)
	        {
	            $this->session->set_flashdata('mess','<span class="alert alert-success">Added Successfully !</span>');
	            //$dd['package']='375';
	            $dd['request_record_id']=$this->db->insert_id();
	            $_SESSION['dd']=$dd;
	            $_SESSION['request_record_id']=$this->db->insert_id();
	            
	            redirect('home/payment');
	        }
	        else
	        {
	             redirect('home/bill');
	        }
	       
	    }
	    
	    $this->load->view('home/form_1');
	}
	
	function request_form_1()
	{   
	    if($_POST)
	    {   
	        $tt['plan']=$_POST['plan'];
	        $tt['user_name']=$_POST['organisation_name'];
	        $tt['city']=$_POST['city'];
	        $tt['phone']=$_POST['phone'];
	        $tt['email']=$_POST['email'];
	        $tt['machine_name']=$_POST['machine_name'];
	        $tt['amount']=1000;
	        $tt['machine_litre']=$_POST['machine_litre'];
	        $tt['machine_origin']=$_POST['machine_origin'];
	        $this->db->insert('raise_request',$tt);
	       
	       
	       $this->session->set_flashdata('mess','<span class="alert alert-success">Added Successfully !</span>');
	            //$dd['package']='375';
	            $tt['request_record_id']=$this->db->insert_id();
	            $_SESSION['dd']=$tt;
	            $_SESSION['request_record_id']=$this->db->insert_id();
	            
	            redirect('home/request_payment');
	            
	            
	    }
	    
	    $this->load->view('home/request_form_1');
	}
	
	function request_payment()
	{
	    $this->load->view('home/request_payment');
	}
	
	function payment()
	{
	    $this->load->view('home/payment');
	}
	
	function success()
	{
	    $this->load->view('home/success');
	}
	
	public function form_2()
	{   
	    
	    if($_POST)
	    {
	        $dd['organisation_name']=$_POST['organisation_name'];
	        $dd['email']=$_POST['email'];
	        $dd['website']=$_POST['website'];
	        $dd['no_oc']=$_POST['no_oc'];
	        $dd['brand']=$_POST['brand'];
	        $dd['contact_name']=$_POST['contact_name'];
	        $dd['phone']=$_POST['phone'];
	        $dd['address']=$_POST['address'];
	        $dd['comment']=$_POST['comment'];
	        $dd['form_type']=2;
	        
	        if(isset($_POST['size']))
	        {
	            $dd['size']=$_POST['size'];
	        }
	        
	        if(isset($_POST['country']))
	        {
	            $dd['country']=$_POST['country'];
	        }
	        
	        if(isset($_POST['type']))
	        {
	           $dd['type']=$_POST['type'];
	        }
	        
	        
	        
	        
	        $this->db->insert('quote',$dd);
	        
	        if($this->db->insert_id()>0)
	        {
	            $this->session->set_flashdata('mess','<span class="alert alert-success">Added Successfully !</span>');
	        }
	        redirect('home/form_2');
	    }
	    
	    $this->load->view('home/form_2');
	}
}
