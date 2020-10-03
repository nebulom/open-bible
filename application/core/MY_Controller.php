<?php

class MY_Controller extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->output->enable_profiler(config_item('enable_profiler'));
  }

}

class MY_AdminController extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->output->enable_profiler(config_item('enable_profiler'));
    $this->layout->set_layout('admin_layout');
  }

}
