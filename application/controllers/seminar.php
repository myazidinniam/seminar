
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class seminar extends CI_Controller {

    public function index() {
        $this->load->view('part/header.php');
        $this->load->view('part/navbar.php');
        $this->load->view('part/sidebar.php');
        $this->load->view('frontend/cariseminar.php');
    }
     public function detailevent() {
        $this->load->view('part/header.php');
        $this->load->view('part/navbar.php');
        $this->load->view('frontend/detailseminar.php');
        $this->load->view('part/footer.php');
    }
}
?>
