<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Inserts booking data into the 'bookings' table.
     * * @param array $data An associative array of booking details.
     * @return bool TRUE on success, FALSE on failure.
     */
    public function insert_booking($data)
    {
        // $data array should match your table columns: 
        // name, email, phone, booking_date, booking_time
        return $this->db->insert('bookings', $data);
    }
}
