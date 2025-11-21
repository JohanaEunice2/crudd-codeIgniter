<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Booking_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['page_title'] = 'Online Booking';
        $this->load->view('booking_form', $data);
    }

    public function submit() {
        // Set validation rules
        $this->form_validation->set_rules('full_name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim');
        $this->form_validation->set_rules('service_type', 'Service Type', 'required');
        $this->form_validation->set_rules('preferred_date', 'Preferred Date', 'required');
        $this->form_validation->set_rules('preferred_time', 'Preferred Time', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed
            $response = array(
                'success' => false,
                'message' => validation_errors()
            );
        } else {
            // Prepare data
            $booking_data = array(
                'full_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'service_type' => $this->input->post('service_type'),
                'preferred_date' => $this->input->post('preferred_date'),
                'preferred_time' => $this->input->post('preferred_time'),
                'message' => $this->input->post('message'),
                'status' => 'pending'
            );

            // Insert into database
            $insert_id = $this->Booking_model->create_booking($booking_data);

            if ($insert_id) {
                $response = array(
                    'success' => true,
                    'message' => 'Booking submitted successfully! We will contact you soon.'
                );
            } else {
                $response = array(
                    'success' => false,
                    'message' => 'Failed to submit booking. Please try again.'
                );
            }
        }

        echo json_encode($response);
    }
}