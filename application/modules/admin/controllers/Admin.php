<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  function __construct(){
    parent::__construct();
    
    if($this->session->userdata('masuk') != TRUE){
        $url=base_url('login');
        $this->session->set_flashdata('redirect', current_url());
        redirect($url);
    }
    $this->load->helper(array('backend'));
    $this->output->enable_profiler(FALSE);        
  }

  function index()
  {
    $this->load->view('V_lte');
  }

  function about()
  {

    echo $this->session->userdata('ses_uid').'<br>'.$this->session->userdata('ses_username');

  }

  public function welcome(){

    $this->load->view('V_welcome');
  }
  
}
