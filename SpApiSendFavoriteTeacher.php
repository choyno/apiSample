<?php

$msg = "";

if (!isset($_GET['key']) || $_GET['key'] != "Uggk45hcn98"){
  $msg = "key";
} elseif (!isset($_POST['user_id']) || empty($_POST['user_id'])){
  $msg = "user_id";
} elseif (!isset($_POST['teacher_id']) || empty($_POST['teacher_id'])){
  $msg = "teacher_id";
} elseif (!isset($_POST['is_fav']) || ($_POST['is_fav'] != 1 && $_POST['is_fav'] != -1)){
  $msg = "is_fav";
}


if (!empty($msg)){
  printResult(array('result_code' => 100, 'result_message' => "{$msg} is required."));
}


$res = array(
  'result_code' => 0,
  'result_message' => 'OK',
  'user_id' => $_POST['user_id'],
  'teacher_id' => $_POST['teacher_id'],
  'is_fav' => $_POST['is_fav']
);

printResult($res);

function printResult($res){
  header('Content-Type: application/json');
  echo json_encode($res);
  exit;
}
