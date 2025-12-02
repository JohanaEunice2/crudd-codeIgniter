<!DOCTYPE html>
<html>
<head>
    <title>Online Consultation Booking</title>
</head>
<body>

    <h1>Book Your Online Consultation</h1>

    <?php if($this->session->flashdata('success')): ?>
        <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
    <?php endif; ?>
    <?php if($this->session->flashdata('error')): ?>
        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <?php echo form_open('booking/submit'); ?>

        <label for="name">Full Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo set_value('name'); ?>"><br>
        <span style="color: red;"><?php echo form_error('name'); ?></span><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo set_value('email'); ?>"><br>
        <span style="color: red;"><?php echo form_error('email'); ?></span><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" value="<?php echo set_value('phone'); ?>"><br>
        <span style="color: red;"><?php echo form_error('phone'); ?></span><br>

        <label for="date">Preferred Date:</label><br>
        <input type="date" id="date" name="date" value="<?php echo set_value('date'); ?>"><br>
        <span style="color: red;"><?php echo form_error('date'); ?></span><br>

        <label for="time">Preferred Time:</label><br>
        <input type="time" id="time" name="time" value="<?php echo set_value('time'); ?>"><br>
        <span style="color: red;"><?php echo form_error('time'); ?></span><br>

        <button type="submit">Confirm Booking</button>

    <?php echo form_close(); ?>

</body>
</html>
