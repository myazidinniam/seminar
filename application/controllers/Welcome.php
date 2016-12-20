<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
      $this->load->view('part/header.php');
        $this->load->view('part/navbar.php');
        $this->load->view('frontend/home.php');
    }
}
