<?php

$page = intval(@$_GET['page']) <= 0 ? 1 : intval(@$_GET['page']);
$date = date('YmdHis');

$res = array(
  'result_code' => 0,
  'result_message' => 'OK',
  'sum' => 50,
  'page' => $page,
  'result' => array()
);
$i = 1;
$i += ($page * 10) - 10;

if ($page <= 5) {
  $x = 0;
  for(; $i <= ($page * 10); $i++){
    $x = $i > 61 ? ($i - 61) : $i;
    $res['result'][] = array(
      'teacher_id' => $i,
      'teacher_name' => "PJanica#{$i}（ジャニカ）",
      'teacher_type' => array("TOEICおまかせ"),
      'country_id' => 2,
      'image' => "http://{$_SERVER['HTTP_HOST']}/images/{$x}.jpg"
    );
  }
}

header('Content-Type: application/json');
echo json_encode($res);
