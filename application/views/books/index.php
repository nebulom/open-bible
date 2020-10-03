<h3>Books</h3>
<p><?php echo anchor('books/add', 'Add Book'); ?></p>
<table>
  <tr>
    <th>Name</th>
    <th></th>
  </tr>
  <?php foreach ($books as $book): ?>
  <tr>
    <td><?php echo anchor('books/show/' . $book->id, $book->name); ?></td>
    <td>
      <?php echo anchor('books/edit/' . $book->id, 'Edit'); ?>
      <a href='javascript:void(0);' onclick="deleteBook('<?php echo $book->id; ?>', <?php echo $book->id; ?>);" title="Delete">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<script>
  var url = '<?php echo base_url(); ?>';
  function deleteBook(name, id) {
    var c = confirm('Do you really want to delete ' + name + '?');
    if (c === true) {
      window.location = url + 'books/delete/' + id;
    } else {
      return false;
    }
  }
</script>