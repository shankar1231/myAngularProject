<?php
class Login extends CI_Controller
{
    public function __construct() {
        parent::__construct();
		$this->load->helper(array('url','language'));
        $this->load->library(array("form_validation"));
        $this->load->helper("form");
        $this->load->database();
		$this->load->library("session");
		$this->load->library("email");
	    $this->load->model("Main_modal_db");
		

		
    }
    public function index()
    {
	if ($this->session->userdata('admin_role')) {
                  return redirect('dashboard');
             }
        //$this->load->view("jagore_header");
        $this->form_validation->set_rules("email",'Email','required|trim|valid_email');
        $this->form_validation->set_rules("password",'Password','required|trim');
        if($this->form_validation->run()==TRUE)
        {
             $email=$this->input->post("email");
             $pwd=$this->input->post("password");
			 $decrypt_email=base64_encode($email);
				  $decrypt_pwd=base64_encode($pwd);
             $userdata=$this->Main_modal_db->loginCheck($decrypt_email,$decrypt_pwd);
            if($userdata)
            {
                 $udata=array(
                       
                       "id"=>$userdata->id,
                       "email"=>$userdata->email,
                       'logged_in' => TRUE
                     );
                   //$this->session->set_userdata($udata);
				    $this->session->set_userdata("admin_role",$decrypt_email);
				   $data['login_err_msg']=1;
                   redirect(base_url()."dashboard");
                
                
            }
            else
            {
                $data['login_err_msg']=2;
            }
            $this->load->view("login_view",$data);
        }
        else
        {
            $this->load->view("login_view");
        }
        //$this->load->view("jagore_footer");
    }

	
	
    public function logout()
    {
        $array_items = array("admin_role");
        $this->session->unset_userdata($array_items);
        redirect(base_url()."Login");
    }
	

    
}