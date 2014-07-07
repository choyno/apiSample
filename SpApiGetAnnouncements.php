<?php

$msg = "";

if (!isset($_GET['key']) || $_GET['key'] != 'Uggk45hcn98'){
  $msg = "key";
}

if (!empty($msg)){
  printResult(array("result_code" => 100, "result_message" => "{$msg} is requered"));
}



$res = array(
  'result_code' => 0,
  'result_message' => 'OK',
  'result' => array()
);

for($i = 0; $i < 20; $i++) {
  $res['result'][] = array(
    'title' => "Lorem Ipsum is simply dummy{$i}",
    'content' => "http://www.google.com Lorem{$i} Ipsum is simply dummy text of the printing",//"Lorem{$i} Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500",
    'date' => date("Y-m-d", strtotime( $i." day")));
}

printResult($res);

function printResult($res){
  header('Content-Type: application/json');
  echo json_encode($res);
  exit;
}
