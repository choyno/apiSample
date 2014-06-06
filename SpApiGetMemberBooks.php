<?php

$msg = "";

if (!isset($_GET['key']) || $_GET['key'] != 'Uggk45hcn98'){
  $msg = "key";
} else if (!isset($_GET['member_id']) || empty($_GET['member_id'])){
  $msg = "member_id";
}

if (!empty($msg)){
  printResult(array('result_code' => '201', 'result_message' => "{$msg} is required"), false);
}


$res = array(
  'result_code' => 0,
  'result_message' => 'OK',
  'sum' => 20,
  'result' => array()
);

$date = date('YmdHis');
$time = date('H:i:s');
$pass_date = date("Y-m-d", strtotime("-20 day"));
$tmp = 1;
$tmp1 = 0;
for($i = 23; $i >= 1;) {

  $tmp_sched_time = date("H:00:00");
  if ($tmp1 == 0){
    $tmp_sched_time = date("H:00:00", strtotime("+1 hour"));
  } elseif ($tmp1 == 1){
    $tmp_sched_time = date("H:30:00");
  }

  $res['result'][] = array(
    'book_id' => $tmp,
    'teacher_id' => $i,
    'teacher_name' => "Janica{$i}（ジャニカ）",
    'image' => "http://ariellopez.info/f545.jpg",
    'lesson_date' => date("Y-m-d", strtotime($pass_date." ".($i-1)." day")),
    'scheduled_start_time' => $tmp_sched_time,
    'studend_wish' => 'Student Wish',
    'evaluation' => (mt_rand(1, 10) % 2 ? 1 : 0)
  );

  $tmp++;
  $tmp1++;
  if ($tmp1%3 == 0) {
    $tmp1 = 0;
    $i--;
  }
}

printResult($res);

function printResult($res, $flag = true){
  header('Content-Type: application/json');
  echo json_encode($res);

  if (!$flag){
    exit;
  }
}
