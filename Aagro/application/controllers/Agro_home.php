<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agro_home extends CI_Controller {

		   public function __construct()
		{
			parent::__construct();
			$this->load->database();
		  
			$this->load->helper(array('url','language'));
			$this->load->helper('security');
			$this->load->library("form_validation");
			$this->load->helper('text');
			//load file helper
			$this->load->helper('file');
			$this->load->library("session");
			$this->load->library("email");
			$this->load->model("Main_modal_db");
			$this->load->library('user_agent');
			error_reporting(E_ALL | E_STRICT);
				date_default_timezone_set('Asia/Calcutta');
				
				
			
		}
		
	public function agro_index_home()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	
	public function agro_about()
	{
		$this->load->view('header');
		$this->load->view('about_company.php');
		$this->load->view('footer');
	}
	
	public function agro_services()
	{
		
		$this->db->select('*');
		if($this->uri->segment(1) === 'all_business_list'){
			$url = '*';
			#$this->db->where('sub_category',$url);
		}
		
		if($this->uri->segment(1) === 'parboiled-ricemill'){
			$url = '1';
			$this->db->where('busniess_categry',$url);
		}
		
		if($this->uri->segment(1) === 'bio-chemicals'){
			$url = '2';
			$this->db->where('busniess_categry',$url);
		}
		
		if($this->uri->segment(1) === 'agro-form'){
			$url = '3';
			$this->db->where('busniess_categry',$url);
		}
		
		if($this->uri->segment(1) === 'trading'){
			$url = '4';
			$this->db->where('busniess_categry',$url);
		}
		if($this->uri->segment(1) === 'ginning-mill'){
			$url = '5';
			$this->db->where('busniess_categry',$url);
		}
		
		$commandsql = $this->db->order_by('business_id', 'desc')->get('business_add_tbl')->result();
	
		//print_r($commandsql);
		
	$this->load->view('header');
	$db_business_data['db_business_data']=$commandsql;#this->db->select('*')->where('sub_category',$url)->order_by('id', 'desc')->get('add_produt_data')->result();
	$this->load->view('business_list',$db_business_data);
	$this->load->view('footer');
		
	}
	
	public function agro_business_services($url)
	{
	if($url=="" && (!$url))
	{
	redirect(base_url()."all_business_list");
	}
	else
	{
	$this->load->view('header');
	$db_single_businees_data['db_single_businees_data']=$this->db->select('*')->where('business_title_url',$url)->get('business_add_tbl')->row();
	$this->load->view('business_list_view',$db_single_businees_data);
	$this->load->view('footer');
	}
	}
	
		
	
	
	
	/****************************************
	                contact Page
	*****************************************/
	
	public function agro_contact()
	{
		$this->load->view('header');
		
		
			$this->form_validation->set_rules("name","Name","required");
		$this->form_validation->set_rules("company_name","Company Name","required");
		$this->form_validation->set_rules("email","Email","required");
		$this->form_validation->set_rules("phn_num","Mobile Number","required");
		//$this->form_validation->set_rules("message","Message","required");
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
$date=Date('Y-m-d h:i:s');
		 	$ip=$_SERVER['REMOTE_ADDR'];
			$browser = $this->agent->browser();
if($this->form_validation->run()==TRUE)
		{
			$contact_fields=array(
			"name"=>$this->input->post("name"),
			"email"=>$this->input->post("email"),
			"company_name"=>$this->input->post("company_name"),
			"phn_num"=>$this->input->post("phn_num"),
			"message"=>$this->input->post("message"),
			"browser"=>$browser,
			"date"=>$date,
			"ip"=>$ip,
			);
			
			$contact_fields=xss_clean($contact_fields);
			print_r($contact_fields);
			exit();
			//exit();
			$contact_fields_model_data=$this->Main_modal_db->insertContactData($contact_fields);
			
			
			if($contact_fields_model_data)
					{
						
						  $to=$contact_fields['email'];
						 
						$subject=ucwords($contact_fields['message'])." ";
						$message="<span style='font-size:16px;color:#2f71bb'>Hi! </span> : ".ucwords($contact_fields['company_name'])." &nbsp;  <br><br>";
					   $message.="<span style='font-size:16px;color:#2f71bb'>Email </span>: ".ucwords($contact_fields['email'])." &nbsp;  <br><br>";
					    $message.="<span style='font-size:16px;color:#2f71bb'>Description </span>: ".ucwords($contact_fields['message'])." &nbsp;  <br><br>";
					   
						
						 $config = array(
						'protocol' => 'smtp',
						'smtp_host' => 'mail.sankaris.com',
						'smtp_timeout'=> 30,
						'smtp_port' => 587,
						'smtp_user' => 'ramesh@sankaris.com',
						'smtp_pass' => '654321@Aa',
						'charset'=>'utf-8',
						'mailtype' => 'html',
						'newline'=>'\r\n',
						
						);
						
						$this->email->initialize($config);
						$this->email->set_newline("\r\n");
						$this->email->set_crlf("\r\n");
						$this->email->from('noreply@sankaris.com', 'umed');
						$this->email->to($to);
						$this->email->subject($subject);
						$this->email->message($message);
						$this->email->send();
					   
							
				   $this->session->set_tempdata("success_msg","submitted Successfully",10);
				   redirect(base_url()."contact");
					}
			
			
			else
			{
				$this->session->set_tempdata("error_msg","submitted Successfully",10);
				   redirect(base_url()."contact");
			}
			
		}
		else
		{
		$this->load->view('contact');
		}
	
		$this->load->view('footer');
	}
	
	
	
}
