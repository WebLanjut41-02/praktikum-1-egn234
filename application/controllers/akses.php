<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class akses extends MY_Controller {
	private $array_user;
	private $array_pass;
  public function __construct(){
    parent::__construct();
    $this->array_user = array('egan', 'admin', 'myr');
    $this->array_pass = array(1234, 1212, 3344);
  }

  public function index(){
    $this->load->view('login');
	}


  public function home(){
    if (in_array($this->input->post('usrnm'), $this->array_user)) {
      $key = array_search($this->input->post('usrnm'), $this->array_user);
      if ($this->array_pass[$key] == $this->input->post('pass')) {
        $this->session->set_userdata($this->array_user[$key]);
        $data['list_user'] = $this->array_user;
        $this->load->view('home', $data);
      }else{
        $this->load->view('login');

      }
    }
    elseif(in_array($this->session->userdata('usr'), $this->array_user)){
      $data['list_user'] = $this->array_user;
      $data['list_pass'] = $this->array_pass;
      $this->load->view('home', $data);
    }else{
      $this->load->view('login');
    }

  }

  public function tambah(){

  }
  public function hancurkan(){
    $this->session->sess_destroy();
    $this->load->view('login');
  }

}

/* End of file Controllername.php */
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 2/8/2019
 * Time: 8:15 AM
 */