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
    public function submit_inquiry() {

    // 2. Set Validation Rules (Mandatory fields for a form)
    $this->form_validation->set_rules('full_name', 'Full Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('phone', 'Phone', 'required');
    $this->form_validation->set_rules('service_type', 'Service Type', 'required');

    // 3. Check if validation passed
    if ($this->form_validation->run() == FALSE) {
        // Validation failed: Reload the form view and show errors
        $this->load->view('lordhair_view'); 
    } else {
        // Validation passed: Prepare data for the database
        $data = array(
            'full_name'      => $this->input->post('full_name'),
            'email'          => $this->input->post('email'),
            'phone'          => $this->input->post('phone'),
            'service_type'   => $this->input->post('service_type'),
            'preferred_date' => $this->input->post('preferred_date'),
            'preferred_time' => $this->input->post('preferred_time'),
            'message'        => $this->input->post('message'),
            'status'         => 'New' // Set default status when inquiry is submitted
            // 'created_at' is handled automatically by the TIMESTAMP default in MySQL
        );

        // 4. Send data to the Model for insertion
        $inserted = $this->inquiry_model->insert_inquiry($data);

        if ($inserted) {
            // Success! Redirect to a thank you page or home page
            redirect('lordhair/inquiry_success'); 
        } else {
            // Failure
            $data['error'] = "Submission failed due to a database error.";
            $this->load->view('lordhair_view', $data);
        }
    }
}

// Simple success message function
public function inquiry_success() {
    echo "<h1>Thank You!</h1><p>Your inquiry has been successfully submitted.</p>";
}
}
