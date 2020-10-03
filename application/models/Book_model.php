<?php

class Book_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function find_all() {
    return $this->db->get('books')->result();
  }

  function read($id) {
    return $this->db->get_where('books', array('id' => $id))->row();
  }

  function read_by_name($name) {
    return $this->db->get_where('books', array('name' => $name))->row();
  }

  function save($book) {
    $this->db->insert('books', $book);
  }

  function update($book, $id) {
    $this->db->update('books', $book, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('books', array('id' => $id));
  }

}