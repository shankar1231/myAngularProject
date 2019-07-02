<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Main_modal_db extends CI_Model
	{
	
	
	 public function loadSql($collection,$sqlArray){
   
	$this->db->distinct();
   $this->db->select('*');
   $this->db->where($sqlArray);
   $query = $this->db->get( $collection );
   return $query;
   
   }
   
   
		/***************************************************
		          check login data	 if concat like group_concat 
		****************************************************/
		public function loginCheck($email,$pwd)  
		{        
		$res=$this->db->query("select * from admin_tabl where email='$email' and password='$pwd'");  
		if($res->num_rows()==1)        
		{ 
		return $res->row_object();      
		}       
		else    
		{      
		return false;  
		}  
		}
		
		   public function getUserInfo()
    {
        $res=$this->db->get_where("admin_tabl",array("email"=>$this->session->userdata('admin_role')));
        if($res->num_rows())
        {
            return $res->row_object();
        }
        else
        {
            return false;
        }
    }
	
	   public function changePassword($npwd)
    {
        $this->db->where(array("email"=>$this->session->userdata("admin_role")));
        $this->db->update("admin_tabl",array("password"=>$npwd));
        if($this->db->affected_rows())
        {
            return true;
        }
        else {
            return false;
        }
    }
		
		/***************************************************	
		check login data	
		***************************************************
		public function loginCheck($email,$pwd)    { 
		$res=$res=$this->db->select('*')->get_where('admin_table',array('admin_email'=>$email,'admin_pwd'=>$pwd));      
		if($res->num_rows()==1)        
		{ 
		return $res->row_object();    
		}   
		else      
		{          
		return false; 
		}   
		}
	*/
	
	   /***************************************************
		             Business insert 
		****************************************************/
		public function insertBusinessFormData($form_clean_data)
			{

			 $this->db->insert("business_add_tbl",$form_clean_data); 
			 
			   if($this->db->affected_rows())
				{
					return true;
				}
				else {
					return false;
				}

			}
			
	/***************************************************
		admin business image edit get id  data 
	****************************************************/		
			
	public function getbusinessIdInfo($id)
    {
        $this->db->where("business_id",$id);
        $res=$this->db->get("business_add_tbl");
        if($res->num_rows())
        {
            return $res->row_object();
        }
        else
        {
            return false;
        }
    }


		/***************************************************
		             slider images insert 
		****************************************************/
		public function insertsliderAddData($clean_slider_add_array)
			{

			 $this->db->insert("add_sliderimages",$clean_slider_add_array); 
			 
			   if($this->db->affected_rows())
				{
					return true;
				}
				else {
					return false;
				}

			}

	/***************************************************
		admin image edit get id  data from sliderimages
	****************************************************/		
			
	public function sliderimages_getIdInfo($id)
    {
        $this->db->where("id",$id);
        $res=$this->db->get("add_sliderimages");
        if($res->num_rows())
        {
            return $res->row_object();
        }
        else
        {
            return false;
        }
    }			
	
	
		 /***************************************************
		             Branch insert 
		****************************************************/
		public function insertBranchdetailsAddData($clean_branchdetails_add_array)
			{

			 $this->db->insert("add_branchdetails",$clean_branchdetails_add_array); 
			 
			   if($this->db->affected_rows())
				{
					return true;
				}
				else {
					return false;
				}

			}
			
			
		/***************************************************
		             contact insert 
		****************************************************/
		public function insertContactData($contact_fields)
			{

			 $this->db->insert("contact_tbl",$contact_fields); 
			 
			   if($this->db->affected_rows())
				{
					return true;
				}
				else {
					return false;
				}

			}	
			
			
	}