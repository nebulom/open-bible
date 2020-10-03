<h3>Add book</h3>
<?php echo form_open('books/add'); ?>
<p>Name<br>
  <?php echo form_input('name', $this->input->post('name')); ?>
  <?php echo form_error('name'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('books', 'cancel'); ?>
</p>
<?php echo form_close(); ?>