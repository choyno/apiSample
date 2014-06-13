<?php

$msg = "";

if (!isset($_GET['key']) || $_GET['key'] != 'Uggk45hcn98'){
  $msg = "key";
} elseif (!isset($_POST['member_id']) || empty($_POST['member_id'])){
  $msg = "member_id";
} elseif (!isset($_POST['inquiry_thread_id']) || empty($_POST['inquiry_thread_id'])){
  $msg = "inquiry_id";
}

if (!empty($msg)){
  printResult(array('result_code' => 0, 'result_message' => "{$msg} is required."));
}

$res = array(
  'result_code' => 0,
  'result_message' => 'OK',
  'inquiry_thread_id' => $_POST['inquiry_thread_id'],
  'subject' => 'Lorem Ipsum Lorem Ipsum',
  'inquiry_thread_date_time' => date('Y-m-d H:i:s'),
  'result' => array()
);

for($i = 1; $i <= 20; $i++){
  $res['result'][] = array(
    'inquiry_id' => $i,
    'person_type' => (mt_rand(1, 10) % 2 ? 'm' : 'c'),
    'message' => "Message Lorem Ispsum
    Tsest
    ata
    test
    Lorem Isum Lorem Isum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum#{$i}",
    'inquiry_date_time' => date('Y-m-d H:i:s')
  );
}


printResult($res);

function printResult($res){
  header('Content-Type: application/json');
  echo json_encode($res);
  exit;
}
