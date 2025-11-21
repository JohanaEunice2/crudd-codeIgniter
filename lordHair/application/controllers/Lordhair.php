<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lordhair extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');  
    }
    
    public function index() {
        $this->load->view('lordhair_view');
    }
    public function show_image() {
        $this->load->view('header');
        $this->load->view('show_image');
        $this->load->view('footer');
    }
}
?>