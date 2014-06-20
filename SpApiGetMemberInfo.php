<?php

$msg = "";

if (!isset($_GET['key']) || $_GET['key'] != 'Uggk45hcn98'){
  $msg = "key";
} else if (!isset($_GET['user_id']) || empty($_GET['user_id'])){
  $msg = "user_id";
}

if (!empty($msg)){
  printResult(array('result_code' => '201', 'result_message' => "{$msg} is required"), false);
}


$res = array(
  'result_code' => 0,
  'result_message' => 'OK',
  'plan_name' => '[Selected Courses Here]',
  'num_transfer_tickets' => 3,
  'subscribe_end_date' => date('Y-m-d'),
  'user_level' => 1,
  'mnts_next_level' => 225,
  'total_mnts_lesson' => 250,
  'remaining_lessons' => 1
);


printResult($res);

function printResult($res, $flag = true){
  header('Content-Type: application/json');
  echo json_encode($res);

  if (!$flag) {
    exit;
  }

}
