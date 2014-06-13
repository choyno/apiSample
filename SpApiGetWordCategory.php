<?php

$res = array(
  'result_code' => 0,
  'result_message' => 'OK',
  'result' => array()
);

for($i = 0; $i < 10; $i++) {
  $res['result'][] = array('word_category_id' => $i, 'name' => "word#{$i}");
}

header('Content-Type: application/json');
echo json_encode($res);
