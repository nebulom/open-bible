<h3>Books</h3>

<ul>
<?php foreach ($books as $book): ?>
  <li><?php echo anchor('book/' . $book->id, $book->name); ?></li>
<?php endforeach; ?>
</ul>
