<?php

$msg = "";

if (!isset($_GET['key']) || $_GET['key'] != 'Uggk45hcn98'){
  $msg = "key";
} else if (!isset($_GET['user_id']) || empty($_GET['user_id'])){
  $msg = "user_id";
} elseif (!isset($_GET['is_incoming_lessons']) || empty($_GET['is_incoming_lessons'])){
  $msg = "is_incoming_lessons";
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

$time = date('H:i:s');

$tmpDate = date("Y-m-d", strtotime("-8 day"));
if ($_GET['is_incoming_lessons'] == 1){
  $tmpDate = date("Y-m-d");
}

$tmp = 1;
$tmp1 = 0;
for($i = 5; $i >= 1;) {

  $tmp_sched_time = date("H:00:00");
  if ($tmp1 == 0){
    $tmp_sched_time = date("H:00:00", strtotime("+1 hour"));
  } elseif ($tmp1 == 1){
    $tmp_sched_time = date("H:30:00");
  }

  $lesson_date = date("Y-m-d", strtotime($tmpDate." ".($i+1)." day"));
  if ($_GET['is_incoming_lessons'] == 1){
    $lesson_date = date("Y-m-d", strtotime($tmpDate." ".($i-1)." day"));
  }

  $res['result'][] = array(
    'book_id' => $tmp,
    'teacher_id' => $i,
    'teacher_name' => "Janica{$i}（ジャニカ）",
    'image' => "http://ariellopez.info/f545.jpg",
    'lesson_date' => $lesson_date,
    'scheduled_start_time' => $tmp_sched_time,
    'studend_wish' => 'Student Wish',
    'evaluation' => (mt_rand(1, 10) % 2 ? 1 : 0)
  );

  $tmp++;
  $tmp1++;
  if ($tmp1%3 == 0) {
    $res['result'][] = array(
      'book_id' => $tmp,
      'teacher_id' => $i,
      'teacher_name' => "Janica{$i}（ジャニカ）",
      'image' => "http://ariellopez.info/f545.jpg",
      'lesson_date' => $lesson_date,
      'scheduled_start_time' => "24:30:00",
      'studend_wish' => 'Student Wish',
      'evaluation' => (mt_rand(1, 10) % 2 ? 1 : 0)
    );
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
