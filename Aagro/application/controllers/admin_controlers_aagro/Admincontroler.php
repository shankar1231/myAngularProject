<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontroler extends CI_Controller {

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
			
			error_reporting(E_ALL | E_STRICT);
				date_default_timezone_set('Asia/Calcutta');
				
				
				 if (!$this->session->userdata('admin_role')) {
					  return redirect('Login');
				 }
			
             
			
		}
		
	public function dashboard_indx()
	{
		$this->load->view('admin_views_aagro/header');
		$this->load->view('admin_views_aagro/dashboard_indes_view');
	$this->load->view('admin_views_aagro/footer');
		
	}
	
	
	public function change_password()
    {
       if($this->session->has_userdata("admin_role"))
       {
            $data['res']=$this->Main_modal_db->getUserInfo();
             $dbpwd=$data['res']->password; 
           $this->load->view('admin_views_aagro/header',$data);
            $data=array();
            if($this->input->post("pwd_change"))
            {
                
                //validations goes here
                $opwd=base64_encode($this->input->post("pwd"));
                $npwd=base64_encode($this->input->post("npwd"));
                $cnpwd=base64_encode($this->input->post("cnpwd"));
                
                if($npwd==$cnpwd)
                {
                    if($opwd==$dbpwd)
                    {
                        $status=$this->Main_modal_db->changePassword($npwd);
                        if($status==true)
                        {
                            $this->session->set_flashdata("updatemsg","Password Chnaged Succesfully");
                            redirect(current_url());
                        }
                        else
                        {
                            $data['pwderror']="Unable to update Password";
                        }
                    }
                    else
                    {
                        $data['pwderror']="Old Password is Wrong";
                    }
                }
                else
                {
                    $data['pwderror']="Passwors Does not Match";
                }
            }
            $this->load->view("admin_views_aagro/change_password_view.php",$data);
            
           $this->load->view('admin_views_aagro/footer');
       }
       else
       {
            redirect(base_url()."dashboard");
       }
    }
		
	
	public function dashboard_business_add_form()
	{
		$this->load->view('admin_views_aagro/header');
		//form validation rules
		$this->form_validation->set_rules('title','Title',"required|trim");
		

		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
	
		
		if($this->form_validation->run()==TRUE)
		{
		
		$date = date('Y-m-d H:i:s');
		$ip=$_SERVER['REMOTE_ADDR'];
		
		 $config['upload_path']          = './admin_assects_aagro/uploads/';
                    $config['allowed_types']        = 'gif|jpg|png|JPG|JPEG|jpeg';
                    $config['max_size']             = '*';
                   // $config['max_width']            = 1024;
                    $config['overwrite']           = false;

                    $this->load->library('upload', $config);
                    if($this->upload->do_upload("file_upload"))
                    {
                        $filename=$this->upload->data()['file_name'];
                    }
                    else{
                        //$error=$this->upload->display_errors();
                        $filename="";
                    }
		
		$form_data_array=array(
		'title'=>strip_tags($this->input->post('title')),
		'business_title_url'=> preg_replace("/-$/","",preg_replace('/[^a-z0-9]+/i', "-", strtolower($this->input->post('title')))),
		'busniess_categry'=>$this->input->post('busniess_categry'),
		
		'firstname'=>$this->input->post('firstname'),
		
		'descrptn'=>strip_tags($this->input->post(descrptn)),
		'file_upload'=>$filename,
		'business_date'=>$date,
		'ip'=>$ip
		);
		
		$remove_alltags_form_data_array = preg_replace("/<.+>/sU", "", $form_data_array);
        
		$form_clean_data=xss_clean($remove_alltags_form_data_array);
		
		/*insert file information into the database*/
		$db_data=$this->Main_modal_db->insertBusinessFormData($form_clean_data);
		
			if($db_data)
			{
			$this->session->set_flashdata('alert_msg' , "1",10);
			redirect(base_url()."business-list");
			
			}
			else
			{
			$this->session->set_flashdata('alert_msg' , "2",10);
			redirect(base_url()."business-list");
			}
		}
		else
		{
		$this->load->view('admin_views_aagro/business_add_form');
		}
		
		$this->load->view('admin_views_aagro/footer');
		
	}
	

		/*************************************
	        Admin business list  
	**************************************/
 
 
    public function dashboard_business_list()
	{
	$this->load->view('admin_views_aagro/header');
	$db_business_list['business_list']=$this->db->select('*')->order_by('business_id', 'desc')->get('business_add_tbl')->result();
	$this->load->view('admin_views_aagro/business_list',$db_business_list);
	$this->load->view('admin_views_aagro/footer');
	}
	
	/*************************************
	    Admin business Edit Optin
	**************************************/
	
	public function dashboard_business_edit($id)
	{
	
	$this->load->view('admin_views_aagro/header');
	$db_business_edit['business_edit']=$this->db->select('*')->where('business_id', $id)->get('business_add_tbl')->row();
	$this->load->view('admin_views_aagro/business_edit_form',$db_business_edit);
	$this->load->view('admin_views_aagro/footer');
		
	}

	/*************************************
	    Admin business Update Optin
	**************************************/
	public function dashboard_business_update_form($id)
	{
		$this->load->view('admin_views_aagro/header');
		//form validation rules
		$this->form_validation->set_rules('title','Title',"required|trim");
		

		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
	
		$data['record']=$this->Main_modal_db->getbusinessIdInfo($id);
		
		if($this->form_validation->run()==TRUE)
		{
		
		$date = date('Y-m-d H:i:s');
		$ip=$_SERVER['REMOTE_ADDR'];
		
		 $config['upload_path']          = './admin_assects_aagro/uploads/';
                    $config['allowed_types']        = 'gif|jpg|png|JPG|JPEG|jpeg';
                    $config['max_size']             = '*';
                   // $config['max_width']            = 1024;
                    $config['overwrite']           = false;

                    $this->load->library('upload', $config);
                    if($this->upload->do_upload("file_upload"))
                    {
                        $filename=$this->upload->data()['file_name'];
                    }
                    else{
                        //$error=$this->upload->display_errors();
                        $filename=$data['record']->file_upload;
                    }
		
		$form_data_array=array(
		'title'=>strip_tags($this->input->post('title')),
		'business_title_url'=> preg_replace("/-$/","",preg_replace('/[^a-z0-9]+/i', "-", strtolower($this->input->post('title')))),
		'busniess_categry'=>$this->input->post('busniess_categry'),
		'keywords'=>$this->input->post('keywords'),
		'descrptn'=>strip_tags($this->input->post(descrptn)),
		'file_upload'=>$filename,
		'business_date'=>$date,
		'ip'=>$ip
		);
		
		$remove_alltags_form_data_array = preg_replace("/<.+>/sU", "", $form_data_array);
        
		$form_clean_data=xss_clean($remove_alltags_form_data_array);
		
		$db_data = $this->db->where('business_id', $id)->update('business_add_tbl', $form_clean_data);
           
		
		
			if($db_data)
			{
			$this->session->set_flashdata('alert_msg' , "1",10);
			redirect(base_url()."business-list");
			
			}
			else
			{
			$this->session->set_flashdata('alert_msg' , "2",10);
			redirect(base_url()."business-list");
			}
		}
		else
		{
		$this->load->view('admin_views_aagro/business_add_form');
		}
		
		$this->load->view('admin_views_aagro/footer');
		
	}
	
	
	
	/*********************************************
	          Admin   Delete business
	**********************************************/
	public function dashboard_delete_business($id)
	{
		
		
		$delete_business=$this->db->where('business_id', $id)->delete('business_add_tbl');
			if($delete_business)
			{
			$this->session->set_flashdata('alert_msg' , "Your data deleted Successfully..");
			redirect(base_url()."business-list");
			}
			else
			{
			$this->session->set_flashdata('alert_msg' , "try again");
			redirect(base_url()."business-list");
			}
		
		
	}
	
	
	/*********************************************
	          Admin   slider images add
	**********************************************/
	public function add_slider_images()
	{
	    $this->load->view('admin_views_aagro/header');
		$this->load->view('admin_views_aagro/admin_slider_images_add');
		$this->load->view('admin_views_aagro/footer');
	}
	
	
	
	
	public function add_slider_images_data_insert()
	{
	    
		
        
		       	  $config['upload_path'] = './admin_assects_aagro/uploads/slider_images';  
                $config['allowed_types'] = 'jpg|jpeg|png|gif|JPG|JPEG'; 
                   $config['max_size'] = '*';				
                $this->load->library('upload', $config);
				$this->upload->initialize($config);
            if ($this->upload->do_upload('slider_image'))
				{
						$filelogo=$this->upload->data()['file_name'];
				}
			else
			{
			$filelogo="";
			}
		
        //$date=time();
        $date = date('Y-m-d H:i:s');
        //get ip
        $ip   = getenv('HTTP_CLIENT_IP') ?: getenv('HTTP_X_FORWARDED_FOR') ?: getenv('HTTP_X_FORWARDED') ?: getenv('HTTP_FORWARDED_FOR') ?: getenv('HTTP_FORWARDED') ?: getenv('REMOTE_ADDR');
        
       
            //store form values in aaray
            $slider_add_array = array(
			
			'add_slider_contact_details'=>$this->input->post('add_slider_contact_details'),
			   'slider_img_title'=>$this->input->post('slider_img_title'),
			   'slider_img_desc'=>$this->input->post('slider_img_desc'),
				'slider_image'=>$filelogo,
				'date' => $date,
                'ip' => $ip
            );
			
			$remove_alltags_slider_add_array = preg_replace("/<.+>/sU", "", $slider_add_array);
            $clean_slider_add_array = xss_clean($remove_alltags_slider_add_array);
            
            $slider_add_array_dgetbdata = $this->Main_modal_db->insertsliderAddData($clean_slider_add_array);
            
            
            if ($slider_add_array_dgetbdata) {
                $this->session->set_tempdata("sliderimages_success_msg", "Added Successfully", 10);
                redirect(base_url() . "slider-about-list");//slider-images-list 
            } else {
                $this->session->set_tempdata("sliderimages_error_msg", "Try Again", 10);
                redirect(base_url() . "slider-about-list");
            }
       
            
        
	}
	
	
	
	/*************************************
	        Admin slider images List
	**************************************/
 
 
    public function sliderimages_list()
	{
	$this->load->view('admin_views_aagro/header');
	$sliderimages_data['sliderimages_data']=$this->db->select('*')->order_by('id', 'desc')->where('add_slider_contact_details','Slider Images')->get('add_sliderimages')->result();
	$this->load->view('admin_views_aagro/admin_sliderimages_list',$sliderimages_data);
	$this->load->view('admin_views_aagro/footer');
	}
	
	/*************************************
	        Admin About images List
	**************************************/
 
 
    public function about_list()
	{
	$this->load->view('admin_views_aagro/header');
	$aboutdetails_data['aboutdetails_data']=$this->db->select('*')->order_by('id', 'desc')->where('add_slider_contact_details','About Deatails')->get('add_sliderimages')->result();
	$this->load->view('admin_views_aagro/admin_about_details_list',$aboutdetails_data);
    $this->load->view('admin_views_aagro/footer');
	}
	
	
	 /*************************************
	    Admin About and slider images  List
	**************************************/
 
 
    public function  slider_about_list()
	{
	$this->load->view('admin_views_aagro/header');
	$all_slider_aboutdetails_data['all_slider_aboutdetails_data']=$this->db->select('*')->order_by('id', 'desc')->get('add_sliderimages')->result();
	$this->load->view('admin_views_aagro/admin_all_slider_about_us',$all_slider_aboutdetails_data);
	$this->load->view('admin_views_aagro/footer');
	}
	
	/*************************************
	    Admin slider images Edit Optin
	**************************************/
	

	public function edit_slider_images($id)
	{
	    	$this->load->view('admin_views_aagro/header');
		$single_sliderimage_row['edit_snigle_slider_img']=$this->db->select('*')->where('id',$id)->get('add_sliderimages')->row();
		$this->load->view('admin_views_aagro/admin_slider_images_edit',$single_sliderimage_row);
		$this->load->view('admin_views_aagro/footer');
	}
		
		
	public function sliderimages_update($id)
	{
	    
              
 $data['record']=$this->Main_modal_db->sliderimages_getIdInfo($id);

			  $config['upload_path'] = './admin_assects_aagro/uploads/slider_images';  
                $config['allowed_types'] = 'jpg|jpeg|png|gif|JPG|JPEG'; 
$config['max_size'] = '*';				
                $this->load->library('upload', $config);
				$this->upload->initialize($config);
            if ($this->upload->do_upload('slider_image'))
				{
						$filelogo_update=$this->upload->data()['file_name'];
				}
			else
			{
			$filelogo_update=$data['record']->slider_image;
			}	
			
            
        
        //$date=time();
        $date = date('Y-m-d H:i:s');
        //get ip
        $ip   = getenv('HTTP_CLIENT_IP') ?: getenv('HTTP_X_FORWARDED_FOR') ?: getenv('HTTP_X_FORWARDED') ?: getenv('HTTP_FORWARDED_FOR') ?: getenv('HTTP_FORWARDED') ?: getenv('REMOTE_ADDR');
        
       
            //store form values in aaray
            $slider_add_array = array(
					'add_slider_contact_details'=>$this->input->post('add_slider_contact_details'),
			   'slider_img_title'=>$this->input->post('slider_img_title'),
			   'slider_img_desc'=>$this->input->post('slider_img_desc'),
				'slider_image'=>$filelogo_update,
				
                'date' => $date,
                'ip' => $ip
            );
			$remove_alltags_slider_add_array = preg_replace("/<.+>/sU", "", $slider_add_array);
            $clean_slider_add_array = xss_clean($remove_alltags_slider_add_array);
            
            $slider_update_array_dgetbdata = $this->db->where('id',$id)->update('add_sliderimages',$clean_slider_add_array);
            
            
            if ($slider_update_array_dgetbdata) {
                $this->session->set_tempdata("sliderimages_success_msg", "updated Successfully", 10);
                redirect(base_url() . "slider-about-list");
            } else {
                $this->session->set_tempdata("sliderimages_error_msg", "Try Again", 10);
                redirect(base_url() . "slider-about-list");
            }
	  
	}
		
		
	/*********************************************
	          Admin   Delete slider images
	**********************************************/
	public function delete_sliderimage($id)
	{
		$delete_sliderimage=$this->db->where('id', $id)->delete('add_sliderimages');
			if($delete_sliderimage)
			{
			$this->session->set_tempdata('sliderimages_success_msg' , " deleted Successfully..");
			redirect(base_url()."slider-about-list");
			
			}
			else
			{
			$this->session->set_tempdata('sliderimages_error_msg' , "try again");
			redirect(base_url()."slider-about-list");
			}
		
		
	}
	
	
	
	/*********************************************
	    Admin add branches and contact details
	**********************************************/
	public function add_branch_details()
	{
	    $this->load->view('admin_views_aagro/header');
		$this->load->view('admin_views_aagro/admin_contact_and_branches_add');
		$this->load->view('admin_views_aagro/footer');
	}
	
	public function insert_branch_details()
	{
	
	    $date = date('Y-m-d H:i:s');
        //get ip
        $ip   = getenv('HTTP_CLIENT_IP') ?: getenv('HTTP_X_FORWARDED_FOR') ?: getenv('HTTP_X_FORWARDED') ?: getenv('HTTP_FORWARDED_FOR') ?: getenv('HTTP_FORWARDED') ?: getenv('REMOTE_ADDR');
        
       
            //store form values in aaray
            $branchdetails_add_array = array(
			
			   'add_contact_details'=>$this->input->post('add_contact_details'),
			   'brnch_nam'=>$this->input->post('brnch_nam'),
			   'land_lne_num'=>$this->input->post('land_lne_num'),
			   'mob_num'=>$this->input->post('mob_num'),
				'first_email'=>$this->input->post('first_email'),
			   'secnd_email'=>$this->input->post('secnd_email'),
			   'address'=>$this->input->post('address'),
				
				'latitude'=>$this->input->post('latitude'),
			   'logni_tude'=>$this->input->post('logni_tude'),
				
                'date' => $date,
                'ip' => $ip
            );
			$rmvehtmltags_branchdetails_add_array = preg_replace("/<.+>/sU", "", $branchdetails_add_array);
            $clean_branchdetails_add_array = xss_clean($rmvehtmltags_branchdetails_add_array);
            
            $slider_branchdetails_array_dgetbdata = $this->Main_modal_db->insertBranchdetailsAddData($clean_branchdetails_add_array);
            
            
            if ($slider_branchdetails_array_dgetbdata) {
                $this->session->set_tempdata("branch-contactdetails-successmsg", "Added Successfully", 10);
                redirect(base_url() . "contact-branch-details-list");
            } else {
                $this->session->set_tempdata("branch-contactdetails-add-errormsg", "Try Again", 10);
                redirect(base_url() . "contact-branch-details-list");
            }
	}
	
	
	/*************************************
	        Admin branch details List
	**************************************/
 
 
    public function contact_and_branchdetails_list()
	{
	$this->load->view('admin_views_aagro/header');
	$contact_and_branchdetails_list['contact_and_branchdetails_list']=$this->db->select('*')->order_by('id', 'desc')->get('add_branchdetails')->result();
	$this->load->view('admin_views_aagro/admin_contact_and_branches_list',$contact_and_branchdetails_list);
	$this->load->view('admin_views_aagro/footer');
	}
	
	/*************************************
	        Admin single event edit
	**************************************/
    
	public function single_branch($id)
	{
	$this->load->view('admin_views_aagro/header');
	$single_branch_edit['single_branch_edit']=$this->db->select('*')->order_by('id', 'desc')->where('id',$id)->get('add_branchdetails')->row();
	$this->load->view('admin_views_aagro/admin_contact_and_branch_edit',$single_branch_edit);
	$this->load->view('admin_views_aagro/footer');
	}
	
	/*************************************
	        Admin single event update
	**************************************/
    
	public function single_branch_update($id)
	{
	$date = date('Y-m-d H:i:s');
        //get ip
        $ip   = getenv('HTTP_CLIENT_IP') ?: getenv('HTTP_X_FORWARDED_FOR') ?: getenv('HTTP_X_FORWARDED') ?: getenv('HTTP_FORWARDED_FOR') ?: getenv('HTTP_FORWARDED') ?: getenv('REMOTE_ADDR');
        
       
            //store form values in aaray
            $branchdetails_update = array(
			
			   'add_contact_details'=>$this->input->post('add_contact_details'),
			   'brnch_nam'=>$this->input->post('brnch_nam'),
			   'land_lne_num'=>$this->input->post('land_lne_num'),
			   'mob_num'=>$this->input->post('mob_num'),
				'first_email'=>$this->input->post('first_email'),
			   'secnd_email'=>$this->input->post('secnd_email'),
			   'address'=>$this->input->post('address'),
				
				'latitude'=>$this->input->post('latitude'),
			   'logni_tude'=>$this->input->post('logni_tude'),
				
                'date' => $date,
                'ip' => $ip
            );
			$rmvehtmltags_branchdetails_update = preg_replace("/<.+>/sU", "", $branchdetails_update);
            $clean_branchdetails_update = xss_clean($rmvehtmltags_branchdetails_update);
            
            $getdata_update_branchdetails = $this->db->where('id',$id)->update('add_branchdetails',$clean_branchdetails_update);
            
            if ($getdata_update_branchdetails) {
                $this->session->set_tempdata("branch-contactdetails-successmsg", "Updated Successfully", 10);
                redirect(base_url() . "contact-branch-details-list");
            } else {
                $this->session->set_tempdata("branch-contactdetails-add-errormsg", "Try Again", 10);
                redirect(base_url() . "contact-branch-details-list");
            }
	}
	
	
	
	/*********************************************
	          Admin   Delete services
	**********************************************/
	public function contact_branch_details_delete($id)
	{
		$delete_sliderimage=$this->db->where('id', $id)->delete('add_branchdetails');
			if($delete_sliderimage)
			{
			$this->session->set_tempdata('branch-contactdetails-successmsg' , " deleted Successfully..");
			redirect(base_url()."contact-branch-details-list");
			
			}
			else
			{
			$this->session->set_tempdata('branch-contactdetails-successmsg' , "try again");
			redirect(base_url()."contact-branch-details-list");
			}
		
		
	}
	
	public function contactpage_list()
	{
	$this->load->view('admin_views_aagro/header');
	$contactpage_data['contactpage_data']=$this->db->select('*')->order_by('id', 'desc')->get('contact_tbl')->result();
	$this->load->view('admin_views_aagro/contactpage_list',$contactpage_data);
	$this->load->view('admin_views_aagro/header');
	}
	
	
}
