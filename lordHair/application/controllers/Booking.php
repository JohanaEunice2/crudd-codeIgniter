<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load the model
        $this->load->model('Booking_model');
    }

    // Displays the booking form
    public function index()
    {
        $this->load->view('booking_form');
    }

    // Handles form submission and validation
    public function submit()
    {
        // 1. Set Validation Rules
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric');
        $this->form_validation->set_rules('date', 'Date', 'required|trim');
        $this->form_validation->set_rules('time', 'Time', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            // 2. Validation failed, show form again with errors
            $this->load->view('booking_form');
        }
        else
        {
            // 3. Validation passed, process data
            $data = array(
                'name'         => $this->input->post('name'),
                'email'        => $this->input->post('email'),
                'phone'        => $this->input->post('phone'),
                'booking_date' => $this->input->post('date'),
                'booking_time' => $this->input->post('time')
            );

            // 4. Call the Model to save the data
            if ($this->Booking_model->insert_booking($data))
            {
                // Success: Redirect to a thank you page
                $this->session->set_flashdata('success', 'Your consultation has been booked successfully!');
                redirect('booking/success');
            }
            else
            {
                // Failure
                $this->session->set_flashdata('error', 'There was an issue processing your booking. Please try again.');
                redirect('booking'); // Redirect back to form
            }
        }
    }
    
    // Success page (for redirection after successful booking)
    public function success()
    {
        $this->load->view('booking_success');
    }
}
