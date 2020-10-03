<?php
class User extends MY_AdminController {
  function __construct() {
    parent::__construct();
  }

  function dashboard() {
    $this->layout->view('user/dashboard');
  }
}
