<h3>Add chapter</h3>
<?php echo form_open('chapters/add'); ?>
<p>Title<br>
  <?php echo form_input('title', $this->input->post('title')); ?>
  <?php echo form_error('title'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('books/show/' . $book_id, 'cancel'); ?>
</p>
<?php echo form_close(); ?>