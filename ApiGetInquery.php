<?php

$msg = "";

if (!isset($_GET['key']) || $_GET['key'] != 'Uggk45hcn98'){
  $msg = "key";
} elseif (!isset($_GET['member_id']) || empty($_GET['member_id'])){
  $msg = "member_id";
}

if (!empty($msg)){
  printResult(array('result_code' => 100, 'result_message' => "{$msg} is required."));
}

$res = array(
  'result_code' => 0,
  'result_message' => 'OK',
  'result' => array()
);

for($i = 1; $i <= 20; $i++){
  $res['result'][] = array(
    'inquiry_id' => $i,
    'subject' => "Lorem Ipsum Subject #{$i}",
    'inquiry_date_time' => date('Y-m-d H:m:s', strtotime("+{$i} hour"))
  );
}

printResult($res);

function printResult($res){
  header('Content-Type: application/json');
  echo json_encode($res);
  exit;
}