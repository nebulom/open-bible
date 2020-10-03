<?php

class Verse_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function find_by_chapter($chapter_id) {
    $this->db->where('chapter_id', $chapter_id);
    $this->db->order_by('number');
    return $this->db->get('verses')->result();
  }

  function read($id) {
    return $this->db->get_where('verses', array('id' => $id))->row();
  }

  function read_by_number($number, $chapter_id) {
    $this->db->where('chapter_id', $chapter_id);
    return $this->db->get_where('verses', array('number' => $number))->row();
  }

  function save($verse) {
    $this->db->insert('verses', $verse);
  }

  function update($verse, $id) {
    $this->db->update('verses', $verse, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('verses', array('id' => $id));
  }

}
