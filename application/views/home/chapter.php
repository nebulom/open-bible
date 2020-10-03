<h3>
  <?php echo anchor('book/' . $chapter->book_id, $chapter->book_name); ?>
  <?php echo $chapter->title; ?>
</h3>

<?php foreach ($verses as $verse): ?>
  <p>
    <?php echo $verse->number; ?>
    <?php echo $verse->content; ?>
  </p>
<?php endforeach; ?>
