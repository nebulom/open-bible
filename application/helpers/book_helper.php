<?php

function book_form() {
  $obj = &get_instance();
  return array(
    'name' => $obj->input->post('name'),
  );
}

function trim_books($books) {
  $data = array();
  foreach ($books as $book) {
    $data[] = trim_book($book);
  }
  return $data;
}

function trim_book($book) {
  $data = array(
    'name' => $book->name,
  );
  if (isset($book->chapters)) {
    $chapters = trim_chapters($book->chapters);
    $data['chapters'] = $chapters;
  }
  return $data;
}

function book_form_validate() {
  $obj = &get_instance();
  $obj->form_validation->set_rules('name', 'Name', 'required');
}
