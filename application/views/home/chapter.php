<h3 class="title">
  <?php echo anchor('book/' . $chapter->book_id, $chapter->book_name); ?>
  <?php echo $chapter->title; ?>
</h3>

<?php foreach ($verses as $verse): ?>
  <p class="verse">
    <sup><?php echo $verse->number; ?></sup>
    <?php echo $verse->content; ?>
  </p>
<?php endforeach; ?>

<style>
  .verse {
    text-indent: 30px;
  }
  .title {
    text-align: center;
  }
</style>
