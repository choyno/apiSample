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
$x = 0;
if ($page <= 6) {
  for(; $i <= ($page * 10); $i++){
    $x = $i > 61 ? ($i - 61) : $i;
    $res['result'][] = array(
      'teacher_id' => $i,
      'teacher_name' => "RJanica#{$i}（ジャニカ）",
      'teacher_type' => array("ビジネス英会話"),
      'country_id' => 2,
      'image' => "http://{$_SERVER['HTTP_HOST']}/images/{$x}.jpg"
    );
  }
}

echo json_encode($res);
