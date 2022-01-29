<?php
class Users_Model extends CI_Model
{
	function __construct()
	{
	   parent::__construct();
	   $this->_table='users';

	}

    
    function user_login_check($email,$password)
    {
       $result=$this->db->select('*')
                         ->where('email',$email)
                         ->where('password',$password)
                         ->where('status',1)
                         ->get($this->_table)
                         ->row();
    
        return $result;
    }
    
    

    

    

    

	

}