<?php

$res = array(
  "result_code" => 0,
  "result_message" => "OK",
  "result" => array()
);

$date = date('YmdHis');

for($i = 1; $i <= 50; $i++){
  $res['result'][] = array(
    'id' => (String)$i,
    'teacher_name' => "Janica#{$i}（ジャニカ）",
    'teacher_type' => array("teacher_type1_{$i}", "teacher_type2_{$i}", "teacher_type3_{$i}"),
    'image' => "http://{$_SERVER['HTTP_HOST']}/f545.jpg"
  );
}

header('Content-Type: application/json');
echo json_encode($res);

