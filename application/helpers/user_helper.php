<?php

function user_form() {
  $obj = &get_instance();
  $password = $obj->input->post('password');
  $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
  return array(
    'email' => $obj->input->post('email'),
    'password' => $encrypted_password,
  );
}

function login_form() {
  $obj = &get_instance();
  return array(
    $obj->input->post('username'),
    $obj->input->post('password'),
  );
}

function user_form_validate() {
  $obj = &get_instance();
  $obj->form_validation->set_rules('email', 'Email', 'required');
  $obj->form_validation->set_rules('password', 'Password', 'required');
}