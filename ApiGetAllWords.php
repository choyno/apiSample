<?php

$res = array(
  'result_code' => 0,
  'result_message' => 'OK',
  'word' => array()
);

for($i = 0; $i < 10; $i++) {
  $res['word'][] = array('id' => $i, 'eng_word' => "eng_word_{$i}", 'jap_word' => "jap_word_{$i}", "date_time" => date('Y-m-d H:i:s', strtotime("{$i} hour")));
}

header('Content-Type: application/json');
echo json_encode($res);
