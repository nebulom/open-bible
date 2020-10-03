<?php

class Home extends MY_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->model('book_model');
    $this->load->model('chapter_model');
    $this->load->model('verse_model');
  }

  function index() {
    $data['books'] = $this->book_model->find_all();
    $this->layout->view('home/index', $data);
  }

  function book($book_id) {
    $data['book'] = $this->book_model->read($book_id);
    $data['chapters'] = $this->chapter_model->find_by_book($book_id);
    $this->layout->view('home/book', $data);
  }

  function chapter($chapter_id) {
    $data['chapter'] = $this->chapter_model->read($chapter_id);
    $data['verses'] = $this->verse_model->find_by_chapter($chapter_id);
    $this->layout->view('home/chapter', $data);
  }

  function login() {
    $data['message'] = '';
    if ($this->input->post()) {
      list($username, $password) = login_form();
      $user = $this->user_model->read_by_username_and_password($username, $password);
      if ($user) {
        session('user_id', $user->id);
        redirect('dashboard');
      } else {
        $data['message'] = 'Invalid username or password. Please try again';
      }
    }
    $this->load->view('home/login', $data);
  }

  function logout() {
    $this->session->sess_destroy();
    redirect('login');
  }
}
