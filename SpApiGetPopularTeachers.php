<?php

$page = intval(@$_GET['page']) <= 0 ? 1 : intval($_GET['page']);
$date = date('YmdHis');

$res = array(
  'result_code' => 0,
  'result_message' => 'OK',
  'sum' => 2000,
  'page' => $page,
  'result' => array()
);

for($i = 1; $i <= 50; $i++){
  $res['result'][] = array(
    'teacher_id' => (String)$i,
    'teacher_name' => "Janica#{$i}（ジャニカ）",
    'teacher_type' => array("teacher_type #1"),
    'country_id' => 2,
    'image' => "http://{$_SERVER['HTTP_HOST']}/f545.jpg"
  );
}

header('Content-Type: application/json');
echo json_encode($res);
