<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
   function __construct(){
       parent::__construct();
       $this->simple_login->cek_login();
   }

   //Load Halaman dashboard
   public function index() {
       $data['title']='Dashboard';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('account/v_dashboard', $data);
    $this->load->view('templates/footer');
   }
   

}