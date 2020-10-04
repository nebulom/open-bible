<?php
class Api extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('book_model');
    $this->load->model('chapter_model');
    $this->load->model('verse_model');
    $this->load->library('book_service');
    header('Content-Type: application/json');
  }

  function backup() {
    $backup = $this->dbutil->backup(array('format' => 'zip', 'filename' => 'open_bible.sql'));
    $this->load->helper('file');
    write_file('uploads/open_bible.zip', $backup);

    $this->load->helper('download');
    $file = 'open_bible_' . now() . '.zip';
    force_download($file, $backup);
  }

  // function save_book() {
  //   if ($this->input->post()) {
  //     $book = book_form();
  //     if (!$this->book_model->read_by_name($book['name'])) {
  //       $this->book_model->save($book);
  //       echo json_encode(array('status' => 'OK'));
  //     } else {
  //       echo json_encode(array('status' => 'Book exists'));
  //     }
  //   } else {
  //     echo json_encode(array('status' => 'Request should be POST'));
  //   }
  // }
  //
  // function save_chapter() {
  //   if ($this->input->post()) {
  //     $book_name = $this->input->post('book');
  //     $book = $this->book_model->read_by_name($book_name);
  //     if ($book) {
  //       $chapter = chapter_form($book->id);
  //       $c = $this->chapter_model->read_by_title($chapter['title'], $book_name);
  //       if (!$c) {
  //         $chapter_id = $this->chapter_model->save($chapter);
  //         echo json_encode(array('status' => 'OK', 'title' => $chapter['title']));
  //       } else {
  //         echo json_encode(array('status' => 'Chapter exists', 'title' => $c->title));
  //       }
  //     } else {
  //       echo json_encode(array('status' => 'Book not found'));
  //     }
  //   } else {
  //     echo json_encode(array('status' => 'Request should be POST'));
  //   }
  // }
  //
  // function save_verse() {
  //   if ($this->input->post()) {
  //     $book_name = $this->input->post('book');
  //     $chapter_title = $this->input->post('chapter');
  //     $chapter = $this->chapter_model->read_by_title($chapter_title, $book_name);
  //     if ($chapter) {
  //       $verse = verse_form($chapter->id);
  //       if (!$this->verse_model->read_by_number($verse['number'], $chapter->id)) {
  //         $this->verse_model->save($verse);
  //         echo json_encode(array('status' => 'OK'));
  //       } else {
  //         echo json_encode(array('status' => 'Verse exists'));
  //       }
  //     } else {
  //       echo json_encode(array('status' => 'Chapter not found'));
  //     }
  //   } else {
  //     echo json_encode(array('status' => 'Request should be POST'));
  //   }
  // }

  function get_books() {
    $books = $this->book_model->find_all();
    echo json_encode(array(trim_books($books)));
  }

  function get_book() {
    $book_name = $this->input->get('book');
    $book = $this->book_service->get_book_by_name($book_name);
    if ($book) {
      echo json_encode(trim_book($book));
    } else {
      echo json_encode(array('status' => 'Book not found'));
    }
  }

  function get_chapters() {
    $book_name = $this->input->get('book');
    $book = $this->book_model->read_by_name($book_name);
    if ($book) {
      $chapters = $this->chapter_model->find_by_book($book->id);
      echo json_encode(trim_chapters($chapters));
    } else {
      echo 'No data found';
    }
  }
}
