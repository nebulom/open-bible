<h3>Add verse</h3>
<?php echo form_open('verses/add'); ?>
<p>Id<br>
  <?php echo form_input('id', $this->input->post('id')); ?>
  <?php echo form_error('id'); ?>
</p>
<p>Chapter_id<br>
  <?php echo form_input('chapter_id', $this->input->post('chapter_id')); ?>
  <?php echo form_error('chapter_id'); ?>
</p>
<p>Number<br>
  <?php echo form_input('number', $this->input->post('number')); ?>
  <?php echo form_error('number'); ?>
</p>
<p>Content<br>
  <?php echo form_input('content', $this->input->post('content')); ?>
  <?php echo form_error('content'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('verses', 'cancel'); ?>
</p>
<?php echo form_close(); ?>