<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testdb extends CI_Controller {
    public function index() {
        $this->load->database();
        
        if ($this->db->conn_id) {
            echo "Database connected successfully!";
            
            // Test query
            $query = $this->db->query('SELECT version() as version');
            $result = $query->row();
            echo "<br>MySQL Version: " . $result->version;
        } else {
            echo "Database connection failed!";
            echo "<br>Error: " . $this->db->error();
        }
    }
}