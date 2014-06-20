<?php

$index = 100;
$name = "";

/*if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  echo json_encode($_POST);
} else {
  echo json_encode(array('get'));
}
exit; **/
if (isset($_POST['user_id']) && isset($_GET['key']) && $_GET['key'] == 'Uggk45hcn98'){
  if (empty($_POST['user_id'])){
    $name = "user_id";
  } elseif (empty($_POST['lesson_id'])){
    $name = "lesson_id";
  } elseif ($_POST['is_use_transfer_ticket'] != 1 && $_POST['is_use_transfer_ticket'] != -1){
    $name = "is_use_transfer_ticket";
  } elseif (empty($_POST['student_wish'])){
    $name = "student_wish";
  } elseif (empty($_POST['member_plan']) != 'free' && $_POST['member_plan'] != 'lesson1' && $_POST['member_plan'] != 'lesson2' && $_POST['member_plan'] != 'lesson3'){
    $name = "member_plan";
  } else {
    $index = 0;
  }
} else {
  $index = 999;
}

$msg = array(0 => "OK", 100 => "request parameter invalid: must ", 999 => "Invalid Key");
$response = array('result_code' => $index, "result_message" => $msg[$index].$name);

echo json_encode($response);

function pr($data, $flag = false) {
  print_r('<pre>');
  print_r(data);
  print_r('</pre>');
  if ($flag){
    break;
  }
}
