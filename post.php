<?php
require_once('validator.php');

session_start();
$_SESSION['errorMessage'] = array();

phoneValidate($_POST['tel']);
nameValidate($_POST['name']);

if(count($_SESSION['errorMessage']) >= 1) {
  header('location: index.php');
}
