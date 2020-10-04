<?php $this->load->view(get_theme() . '/_head'); ?>

<style>
  .nav a {
    margin-right: 10px;
  }
  footer {
    margin-top: 50px;
  }
</style>

<body>

  <div class="container">
    <?php echo anchor('.', img(array('src' => 'public/img/logo.png'))); ?>

    <?php echo $content; ?>

    <footer>
      <hr>
      (ɔ) <?php echo date('Y'); ?> OpenBible
    </footer>
  </div>

</body>
