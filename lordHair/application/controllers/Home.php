<?php


class lordHair extends CI_Controller {

	public function view(){
	
		$page ="lordHair";

	if(!file_exists(APPPATH. 'views/pages/' .$page. '.php')){
		show_404();
	}

	$data['title'] = "";
    $data['bookings'] = $this->Booking_model->get_all_bookings();
	  
	//print_r($data['document']);


	  $this->load->view('home/untitled.html');
	  $this->load->view('page/' .$page, $data);
	  $this->load->view('home/Styles.css');
      $this->load->view('home/footer');
	}
}
