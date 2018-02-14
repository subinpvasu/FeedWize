<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeedController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
        public function __construct()
        {
            parent::__construct();
            $this->load->library('session');
            $this->load->model('FeedModel');
        }
        
	public function index()
	{  
		$this->load->view('templates/header');
                if($this->session->userdata('user_login'))
                {
                    redirect('/FeedController/dashboard/');                    
                }
                else
                {
                    $this->load->view('feed/login');                    
                }
		$this->load->view('templates/footer');		
	}
        public function dashboard()
        {
            if(!$this->session->userdata('user_login'))redirect('/FeedController/index/');
            $data['welcome'] = $this->session->userdata('user_exisitence')?'Welcome Back':'Welcome';
            $this->load->view('templates/header');
            $this->load->view('feed/index', $data);
            $this->load->view('templates/footer');
        }
        public function logout()
        {
            if(!$this->session->userdata('user_login'))redirect('/FeedController/index/');
            $this->load->view('templates/header');
            $this->load->view('feed/logout');
            $this->load->view('templates/footer');
        }
        public function account_verification()
        {
            if($_POST['demand']==1){            
            $posted_values = array('userid'=>$_POST['googleId'],'emailid'=>$_POST['googleEml'],'username'=>$_POST['googleName'],'imageurl'=>$_POST['googleImg']);            
            if($this->FeedModel->user_verification($posted_values))
            {
            $this->session->set_userdata('user_login', TRUE);
            $this->session->set_userdata('user_exisitence', TRUE);
            $this->session->set_userdata('google_user', $posted_values);
            }
            else
            {
            $this->session->set_userdata('user_login', TRUE);
            $this->session->set_userdata('user_exisitence', FALSE);
            $this->session->set_userdata('google_user', $posted_values);
            }           
            }
            else
            {
                $this->session->unset_userdata('user_login');
                $this->session->unset_userdata('user_exisitence');
                $this->session->unset_userdata('google_user');
            }
            echo '1';
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        public function adwords_test()
        {
            $this->load->library('Processor');
		 $msg = new Processor();
//                 $msg->modify_account(Credentials::$ACCOUNT_ID,0,0);
                 $msg->list_campaign(Credentials::$ACCOUNT_ID);
        }
         
        
}
