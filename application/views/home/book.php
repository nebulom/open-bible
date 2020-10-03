<h3><?php echo $book->name; ?></h3>

<ul>
<?php foreach ($chapters as $chapter): ?>
  <li>
    <?php echo anchor('chapter/' . $chapter->id, $chapter->book_name . ' ' . $chapter->title); ?>
  </li>
<?php endforeach; ?>
</ul>
