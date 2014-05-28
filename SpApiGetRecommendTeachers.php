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
    'teacher_type' => array("teacher_type #1"),
    'image' => "http://{$_SERVER['HTTP_HOST']}/f545.jpg"
  );
}

echo json_encode($res);
