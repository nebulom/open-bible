<h3>Edit chapter</h3>
<?php echo form_open('chapters/edit/' . $chapter->id . '/' . $chapter->book_id); ?>
<p>Title<br>
  <?php echo form_input('title', $chapter->title); ?>
  <?php echo form_error('title'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('books/show/' . $chapter->book_id, 'cancel'); ?>
</p>
<?php echo form_close(); ?>