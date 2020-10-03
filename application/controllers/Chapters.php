<?php

class Chapters extends MY_AdminController {

  function __construct() {
    parent::__construct();
    $this->load->model('chapter_model');
    $this->load->model('verse_model');
  }

  function index() {
    $data['chapters'] = $this->chapter_model->find_all();
    $this->layout->view('chapters/index', $data);
  }

  function show($id) {
    $data['chapter'] = $this->chapter_model->read($id);
    $data['verses'] = $this->verse_model->find_by_chapter($id);
    $this->layout->view('chapters/show', $data);
  }

  function add($book_id) {
    if ($this->input->post()) {
      $chapter = chapter_form($book_id);
      chapter_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->chapter_model->save($chapter);
        // redirect('chapters');
        redirect('books/show/' . $book_id);
      }
    }
    $data['book_id'] = $book_id;
    $this->layout->view('chapters/add', $book_id);
  }

  function edit($id, $book_id) {
    if ($this->input->post()) {
      $chapter = chapter_form($book_id);
      chapter_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->chapter_model->update($chapter, $id);
        // redirect('chapters');
        redirect('books/show/' . $book_id);
      }
    }
    $data['chapter'] = $this->chapter_model->read($id);
    $this->layout->view('chapters/edit', $data);
  }

  function delete($id) {
    $this->chapter_model->delete($id);
    redirect('chapters');
  }

}
