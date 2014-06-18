<?php

$page = intval(@$_GET['page']) <= 0 ? 1 : intval(@$_GET['page']);

$res = array(
  "result_code" => 0,
  "result_message" => "OK",
  'sum' => 60,
  'page' => $page,
  "result" => array()
);

$date = date('YmdHis');

$i = 1;
$i += ($page * 10) - 10;

if ($page <= 6) {
  for(; $i <= ($page * 10); $i++){
    $res['result'][] = array(
      'teacher_id' => $i,
      'teacher_name' => "RJanica#{$i}（ジャニカ）",
      'teacher_type' => array("teacher_type #1"),
      'country_id' => 2,
      'image' => "http://{$_SERVER['HTTP_HOST']}/f545.jpg"
    );
  }
}

echo json_encode($res);
