<?php

$name = "";

if (!isset($_POST['key']) || $_POST['key'] != 'Uggk45hcn98'){
  $name = "key";
} elseif (!isset($_POST['member_id']) || empty($_POST['member_id'])){
  $name = "member_id";
} elseif (!isset($_POST['book_id']) || empty($_POST['book_id'])){
  $name = "book_id";
}

if (!empty($name)){
  printResult(array('result_code' => '100', 'result_message' => "{$name} is required"));
}

printResult(array('result_code' => 0, "result_message" => "OK"));

function pr($data, $flag = false) {
  print_r('<pre>');
  print_r(data);
  print_r('</pre>');
  if ($flag){
    break;
  }
}

function printResult($response){
  header('Content-Type: application/json');
  echo json_encode($response);
  exit;
}
