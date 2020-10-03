<?php

class Chapter_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function find_by_book($book_id) {
    $this->db->select('c.*');
    $this->db->select('b.name book_name');
    $this->db->join('books b', 'b.id = c.book_id');
    $this->db->where('c.book_id', $book_id);
    $this->db->order_by('c.title');
    return $this->db->get('chapters c')->result();
  }

  function read($id) {
    $this->db->select('c.*');
    $this->db->select('b.name book_name');
    $this->db->join('books b', 'b.id = c.book_id');
    return $this->db->get_where('chapters c', array('c.id' => $id))->row();
  }

  function read_by_title($title, $book_name) {
    $this->db->select('c.*');
    $this->db->select('b.name book_name');
    $this->db->join('books b', 'b.id = c.book_id');
    $this->db->where('b.name', $book_name);
    return $this->db->get_where('chapters c', array('c.title' => $title))->row();
  }

  function save($chapter) {
    $this->db->insert('chapters', $chapter);
  }

  function update($chapter, $id) {
    $this->db->update('chapters', $chapter, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('chapters', array('id' => $id));
  }

}
