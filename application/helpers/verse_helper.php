<?php

function verse_form($chapter_id) {
  $obj = &get_instance();
  return array(
    'chapter_id' => $chapter_id,
    'number' => trim($obj->input->post('number'), '#'),
    'content' => trim($obj->input->post('content')),
  );
}

function trim_verses($verses) {
  $data = [];
  foreach ($verses as $verse) {
    $data[] = trim_verse($verse);
  }
  return $data;
}

function trim_verse($verse) {
  return array(
    'number' => $verse->number,
    'content' => $verse->content,
  );
}

function verse_form_validate() {
  $obj = &get_instance();
  // $obj->form_validation->set_rules('chapter_id', 'Chapter_id', 'required');
  $obj->form_validation->set_rules('number', 'Number', 'required');
  $obj->form_validation->set_rules('content', 'Content', 'required');
}
