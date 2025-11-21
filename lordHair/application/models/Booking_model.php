<?php


class Booking_model extends CI_Model {

    public function __construct() {
    
        $this->load->database();
    }

    public function create_booking($data) {
        $this->db->insert('bookings', $data);
        return $this->db->insert_id();
    }

    public function get_all_bookings() {
        $query = $this->db->get('bookings');
        return $query->result_array();
    }

    public function get_booking_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('bookings');
        return $query->row_array();
    }

    public function update_booking_status($id, $status) {
        $this->db->where('id', $id);
        return $this->db->update('bookings', array('status' => $status));
    }
}