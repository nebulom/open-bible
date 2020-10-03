<?php

class Book_service {

  function __construct() {
    $obj = &get_instance();
    $obj->load->model('book_model');
    $obj->load->model('chapter_model');
    $obj->load->model('verse_model');
    $this->verse_model = $obj->verse_model;
    $this->chapter_model = $obj->chapter_model;
    $this->book_model = $obj->book_model;
  }

  function get_book_by_name($book_name) {
    $book = $this->book_model->read_by_name($book_name);
    if ($book) {
      $chapters = $this->chapter_model->find_by_book($book->id);
      foreach ($chapters as $chapter) {
        $chapter->verses = $this->verse_model->find_by_chapter($chapter->id);
      }
      $book->chapters = $chapters;
    }
    // print_pre($book);
    return $book;
  }
}
