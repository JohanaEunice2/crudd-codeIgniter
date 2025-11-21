<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Booking - Lordhair</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #1e1e1f;
            color: #fff;
            padding: 20px;
        }

        .booking-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #2a2a2b;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }

        .booking-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #ff1a00;
            font-size: 2rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #fff;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #444;
            border-radius: 5px;
            background-color: #1e1e1f;
            color: #fff;
            font-size: 14px;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #ff1a00;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background-color: #ff1a00;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            text-transform: uppercase;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #cc2900;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            display: none;
        }

        .alert-success {
            background-color: #28a745;
            color: white;
        }

        .alert-error {
            background-color: #dc3545;
            color: white;
        }

        .required {
            color: #ff1a00;
        }
    </style>
</head>
<body>
    <div class="booking-container">
        <h2>Online Booking</h2>
        
        <div id="alert" class="alert"></div>

        <form id="bookingForm">
            <div class="form-group">
                <label for="full_name">Full Name <span class="required">*</span></label>
                <input type="text" id="full_name" name="full_name" required>
            </div>

            <div class="form-group">
                <label for="email">Email <span class="required">*</span></label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number <span class="required">*</span></label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="service_type">Service Type <span class="required">*</span></label>
                <select id="service_type" name="service_type" required>
                    <option value="">Select a service</option>
                    <option value="consultation">Online Consultation</option>
                    <option value="hair_system">Hair System Fitting</option>
                    <option value="maintenance">Maintenance Service</option>
                    <option value="custom_order">Custom Order Consultation</option>
                </select>
            </div>

            <div class="form-group">
                <label for="preferred_date">Preferred Date <span class="required">*</span></label>
                <input type="date" id="preferred_date" name="preferred_date" required>
            </div>

            <div class="form-group">
                <label for="preferred_time">Preferred Time <span class="required">*</span></label>
                <input type="time" id="preferred_time" name="preferred_time" required>
            </div>

            <div class="form-group">
                <label for="message">Additional Message</label>
                <textarea id="message" name="message" placeholder="Any special requests or notes..."></textarea>
            </div>

            <button type="submit" class="submit-btn">Book Appointment</button>
        </form>
    </div>

    <script>
        // Set minimum date to today
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('preferred_date').setAttribute('min', today);

        // Handle form submission
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const alertBox = document.getElementById('alert');
            
            // Show loading state
            const submitBtn = this.querySelector('.submit-btn');
            submitBtn.textContent = 'Submitting...';
            submitBtn.disabled = true;

            fetch('<?php echo base_url('booking/submit'); ?>', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alertBox.style.display = 'block';
                
                if (data.success) {
                    alertBox.className = 'alert alert-success';
                    alertBox.textContent = data.message;
                    document.getElementById('bookingForm').reset();
                } else {
                    alertBox.className = 'alert alert-error';
                    alertBox.textContent = data.message;
                }
                
                // Reset button
                submitBtn.textContent = 'Book Appointment';
                submitBtn.disabled = false;
                
                // Hide alert after 5 seconds
                setTimeout(() => {
                    alertBox.style.display = 'none';
                }, 5000);
            })
            .catch(error => {
                alertBox.style.display = 'block';
                alertBox.className = 'alert alert-error';
                alertBox.textContent = 'An error occurred. Please try again.';
                
                submitBtn.textContent = 'Book Appointment';
                submitBtn.disabled = false;
            });
        });
    </script>
</body>
</html>