<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('welcome_message');
	}


  /*
  function create(){

    $data = [
      'username'  => 'diaz',
      'pass'      => password_hash('qwertyui', PASSWORD_BCRYPT),
      'level'     => 1,
      'regdate'   => date('Y-m-d H:i:s'),
      'status'    => 'active'
    ];

    $this->db->insert('tb_user',$data);

    $test = ($this->db->affected_rows() != 1) ? false : true;

    if ($test === TRUE){
      echo 'berhasil';
    }else{
      echo 'gagal';
    }

  }

  function check(){

    $hashed = '$2y$10$K1nAxNEk8J8nMT86k2DeuuSe5GpF/MdUSgsOYvE6D/60hSGWsMnHW';

    if (password_verify('qwertyui', $hashed)) {
        echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
    }
  }
  */

}
