<?php $this->load->view(get_theme() . '/_head'); ?>

<style>
  .nav a {
    margin-right: 10px;
  }
</style>

<body>

  <div class="container">
    <?php echo anchor('.', img(array('src' => 'public/img/logo.png'))); ?>

    <?php echo $content; ?>
  </div>

</body>
