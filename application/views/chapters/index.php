<h3>Chapters</h3>
<!-- <p><?php echo anchor('chapters/add', 'Add Chapter'); ?></p> -->
<p>
  <?php echo form_open('chapters/add/' . $book->id); ?>
    <?php echo form_input('title', '', 'placeholder="Chapter"'); ?>
    <?php echo form_submit('submit', 'Add chapter'); ?>
  <?php echo form_close(); ?>
</p>
<table>
  <tr>
    <th>Title</th>
    <th></th>
  </tr>
  <?php foreach ($chapters as $chapter): ?>
  <tr>
    <td><?php echo anchor('chapters/show/' . $chapter->id, $chapter->title); ?></td>
    <td>
      <?php echo anchor('chapters/edit/' . $chapter->id . '/' . $chapter->book_id, 'Edit'); ?>
      <a href='javascript:void(0);' onclick="deleteChapter('<?php echo $chapter->id; ?>', <?php echo $chapter->id; ?>);" title="Delete">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<script>
  var url = '<?php echo base_url(); ?>';
  function deleteChapter(name, id) {
    var c = confirm('Do you really want to delete ' + name + '?');
    if (c === true) {
      window.location = url + 'chapters/delete/' + id;
    } else {
      return false;
    }
  }
</script>