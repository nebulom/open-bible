<img src="public/img/logo.png">

<h3>Login</h3>
<?php echo form_open('login'); ?>
<p>Username<br>
  <?php echo form_input('username', $this->input->post('username')); ?>
  <?php echo form_error('username'); ?>
</p>
<p>Password<br>
  <?php echo form_password('password'); ?>
  <?php echo form_error('password'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Login'); ?>
</p>
<?php echo form_close(); ?>