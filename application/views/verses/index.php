<h3>Verses</h3>
<!-- <p><?php echo anchor('verses/add', 'Add Verse'); ?></p> -->
<p>
  <?php echo form_open('verses/add/' . $chapter->id); ?>
    <?php echo form_input('number', '', 'placeholder="Number"'); ?>
    <?php echo form_input('content', '', 'placeholder="Content"'); ?>
    <?php echo form_submit('submit', 'Add verse'); ?>
  <?php echo form_close(); ?>
</p>
<table>
  <!-- <tr>
    <th>Number</th>
    <th>Content</th>
    <th></th>
  </tr> -->
  <?php foreach ($verses as $verse): ?>
  <tr>
    <td><?php echo $verse->number; ?></td>
    <td><?php echo $verse->content; ?></td>
    <td>
      <?php echo anchor('verses/edit/' . $verse->id, 'Edit'); ?>
      <a href='javascript:void(0);' onclick="deleteVerse('<?php echo $verse->id; ?>', <?php echo $verse->id; ?>);" title="Delete">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<script>
  var url = '<?php echo base_url(); ?>';
  function deleteVerse(name, id) {
    var c = confirm('Do you really want to delete ' + name + '?');
    if (c === true) {
      window.location = url + 'verses/delete/' + id;
    } else {
      return false;
    }
  }
</script>