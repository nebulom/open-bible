<?php

class Verses extends MY_AdminController {

  function __construct() {
    parent::__construct();
    $this->load->model('verse_model');
  }

  function index() {
    $data['verses'] = $this->verse_model->find_all();
    $this->layout->view('verses/index', $data);
  }

  function add($chapter_id) {
    if ($this->input->post()) {
      $verse = verse_form($chapter_id);
      verse_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->verse_model->save($verse);
        // redirect('verses');
        redirect('chapters/show/' . $chapter_id);
      }
    }
    $this->layout->view('verses/add');
  }

  function edit($id, $chapter_id) {
    if ($this->input->post()) {
      $verse = verse_form($chapter_id);
      verse_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->verse_model->update($verse, $id);
        // redirect('verses');
        redirect('chapters/show/' . $chapter_id);
      }
    }
    $data['verse'] = $this->verse_model->read($id);
    $this->layout->view('verses/edit', $data);
  }

  function delete($id) {
    $this->verse_model->delete($id);
    redirect('verses');
  }

}
