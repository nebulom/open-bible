<?php

class Test extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('book_model');
    $this->load->model('chapter_model');
    $this->load->library('book_service');
  }

  function a() {
    $book = $this->book_service->get_book_by_name('Leviticus');
    print_pre(trim_book($book));
  }
}
