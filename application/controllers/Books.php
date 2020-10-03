<?php

class Books extends MY_AdminController {

  function __construct() {
    parent::__construct();
    $this->load->model('book_model');
    $this->load->model('chapter_model');
    $this->load->model('verse_model');
  }

  function index() {
    $data['books'] = $this->book_model->find_all();
    $this->layout->view('books/index', $data);
  }

  function show($id) {
    $data['book'] = $this->book_model->read($id);
    $data['chapters'] = $this->chapter_model->find_by_book($id);
    $this->layout->view('books/show', $data);
  }

  function add() {
    if ($this->input->post()) {
      $book = book_form();
      book_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->book_model->save($book);
        redirect('books');
      }
    }
    $this->layout->view('books/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $book = book_form();
      book_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->book_model->update($book, $id);
        redirect('books');
      }
    }
    $data['book'] = $this->book_model->read($id);
    $this->layout->view('books/edit', $data);
  }

  function delete($id) {
    $this->book_model->delete($id);
    redirect('books');
  }

}
