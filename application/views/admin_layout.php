<?php $this->load->view(get_theme() . '/_head'); ?>

<style>
  .nav a {
    margin-right: 10px;
  }
</style>

<body>

  <div class="container">
    <?php echo anchor('dashboard', img(array('src' => 'public/img/logo.png'))); ?>

    <p class="nav">
      <?php echo anchor('dashboard', 'Dashboard'); ?>
      <?php echo anchor('books', 'Books'); ?>
      <?php echo anchor('logout', 'Log out'); ?>
    </p>

    <?php echo $content; ?>
  </div>

</body>
