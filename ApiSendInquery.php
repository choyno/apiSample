<?php

$index = 100;
$name = "";

/*if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  echo json_encode($_POST);
} else {
  echo json_encode(array('get'));
}
exit; **/
if (isset($_POST['member_id']) && isset($_POST['key']) && $_POST['key'] == 'Uggk45hcn98'){
  if (empty($_POST['member_id'])){
    $name = "member_id";
  } elseif (empty($_POST['subject'])){
    $name = "title";
  } elseif (empty($_POST['content'])){
    $name = "content";
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
