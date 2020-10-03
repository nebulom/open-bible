<h3>Edit verse</h3>
<?php echo form_open('verses/edit/' . $verse->id); ?>
<p>Id<br>
  <?php echo form_input('id', $verse->id); ?>
  <?php echo form_error('id'); ?>
</p>
<p>Chapter_id<br>
  <?php echo form_input('chapter_id', $verse->chapter_id); ?>
  <?php echo form_error('chapter_id'); ?>
</p>
<p>Number<br>
  <?php echo form_input('number', $verse->number); ?>
  <?php echo form_error('number'); ?>
</p>
<p>Content<br>
  <?php echo form_input('content', $verse->content); ?>
  <?php echo form_error('content'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('verses', 'cancel'); ?>
</p>
<?php echo form_close(); ?>