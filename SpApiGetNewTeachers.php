<?php

$page = intval(@$_GET['page']) <= 0 ? 1 : intval(@$_GET['page']);

$res = array(
  "result_code" => 0,
  "result_message" => "OK",
  "sum" => 40,
  "page" => $page,
  "result" => array(),
);

$date = date('YmdHis');
$i = 1;
$i += ($page * 10) - 10;

if ($page <= 4){
  $x = 0;
  for(; $i <= ($page * 10); $i++){
    $x = $i > 61 ? ($i - 61) : $i;
    $res['result'][] = array(
      'teacher_id' => $i,
      'teacher_name' => "NJanica#{$i}（ジャニカ）",
      'teacher_type' => array(
        "初心者向け",
        "上級者向け",
        "キッズ向け"),
      'country_id' => 2,
      'image' => "http://{$_SERVER['HTTP_HOST']}/images/{$x}.jpg"
    );
  }
}

header('Content-Type: application/json');
echo json_encode($res);

