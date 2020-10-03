<?php

function chapter_form($book_id) {
  $obj = &get_instance();
  return array(
    'book_id' => $book_id,
    'title' => $obj->input->post('title'),
  );
}

function trim_chapters($chapters) {
  $data = [];
  foreach ($chapters as $chapter) {
    $data[] = trim_chapter($chapter);
  }
  return $data;
}

function trim_chapter($chapter) {
  $data = array(
    'book' => $chapter->book_name,
    'title' => $chapter->title,
  );
  if (isset($chapter->verses)) {
    $data['verses'] = trim_verses($chapter->verses);
  }
  return $data;
}

function chapter_form_validate() {
  $obj = &get_instance();
  $obj->form_validation->set_rules('title', 'Title', 'required');
}
