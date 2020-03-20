<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
        function __construct() {
        parent::__construct();     
        $this->load->helper(array('backend'));   
        $this->load->model('m_login');
        $this->output->enable_profiler(FALSE);
    }

	public function index(){   

        if($this->session->userdata('masuk') == TRUE){

            $url='admin';
            redirect($url);
        }else{
            $this->load->view('V_login');
        }
    }
    
    public function auth(){
        $username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
        $redirect = $this->input->post('url_redirect');
        
          $cek_login=$this->m_login->auth_login($username,$password);
          if($cek_login == 1){
                
                $data=$this->m_login->get_login_data($username);
                $this->session->set_userdata('masuk',TRUE);
                 if(($data['level']=='1')||($data['level']=='2')||($data['level']=='3')||($data['level']=='4')){ 
                    //$this->session->set_userdata('akses','1');
                     $user_data = array(
                         'ses_username'     => $data['username'],
                         'ses_uid'          => $data['id'],
                         'file_manager'     => TRUE,
                         'ses_site_url'     => site_url(),
                         'ses_base_url'     => base_url()
                     );

                    $this->session->set_userdata($user_data);
                    //$this->session->sess_expiration = '360';                                                
                    get_log("login", "login");
                    
                     if($this->input->post('url_redirect')==null){
                            redirect('admin');
                     }else{
                           redirect($redirect);
                     }

                }else{ 
                   //$this->session->set_userdata('akses','4');
                   $this->session->set_userdata('file_manager',FALSE);
                   redirect('login');
                }
       
            }else{  
                $url=base_url().'login';
                $this->session->set_flashdata('redirect', $redirect);
                echo $this->session->set_flashdata('msg',
                   '<script>
                        alert("Incorrect Username/Password"),window.location.href= "'.$redirect.'";
                    </script>'
                    );
                redirect($url);
                }
    }

    function logout(){
        get_log("logout", "logout");
        $this->session->sess_destroy();
        $url=base_url('login');
        redirect($url);
    }      

}