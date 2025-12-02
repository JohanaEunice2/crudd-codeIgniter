<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testdb extends CI_Controller {

    /**
     * Test the database connection and display the result.
     */
    public function index() {
        
        // 1. Manually load the database library (remove this if you autoloaded it)
        $this->load->database();

        // 2. Check if the connection ID (conn_id) is successfully set.
        if ($this->db->conn_id) {
            
            echo "<h1>✅ Database connected successfully!</h1>";
            
            // Successfully connected, now run a test query to get the MySQL version
            $query = $this->db->query('SELECT version() as version');
            
            if ($query) {
                $result = $query->row();
                echo "<p><strong>Connected to Database:</strong> " . $this->db->database . "</p>";
                echo "<p><strong>MySQL Version:</strong> " . $result->version . "</p>";
                echo "<p>Your setup is ready for development.</p>";
            } else {
                echo "<p>Connection is open, but a simple query failed.</p>";
            }

        } else {
            
            echo "<h1>❌ Database connection failed!</h1>";
            
            // 3. Get the specific error details. $this->db->error() returns an array.
            $error = $this->db->error(); 

            if (!empty($error['message'])) {
                echo "<p><strong>Error Message:</strong> <span style='color: red;'>" . $error['message'] . "</span></p>";
                echo "<p><strong>Error Code:</strong> " . $error['code'] . "</p>";
                echo "<p>Please check your credentials (username, password, database name) in the <strong>database.php</strong> file.</p>";
            } else {
                echo "<p>Connection could not be established. Check if your MySQL/Apache services are running (XAMPP/WAMP).</p>";
            }
        }
    }
}
