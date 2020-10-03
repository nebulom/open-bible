<h3>Edit book</h3>
<?php echo form_open('books/edit/' . $book->id); ?>
<p>Name<br>
  <?php echo form_input('name', $book->name); ?>
  <?php echo form_error('name'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('books', 'cancel'); ?>
</p>
<?php echo form_close(); ?>