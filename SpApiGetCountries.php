<?php

$res = array(
  'result_code' => 0,
  'result_message' => 'OK',
  'result' => array(
    array('id' => 1, 'eng_name' => 'Philippines', 'jap_name' => 'フィリピン'),
    array('id' => 2, 'eng_name' => 'United States', 'jap_name' => 'アメリカ／米国 （べいこく）'),
    array('id' => 3, 'eng_name' => 'Lithuania', 'jap_name' => 'リトアニア'),
    array('id' => 4, 'eng_name' => 'France', 'jap_name' => 'フランス'),
    array('id' => 5, 'eng_name' => 'Bangladesh', 'jap_name' => 'バングラデシュ'),
    array('id' => 6, 'eng_name' => 'Kenya', 'jap_name' => 'ケニア'),
    array('id' => 7, 'eng_name' => 'United Kingdom', 'jap_name' => 'イギリス／英国 （えいこく）'),
    array('id' => 8, 'eng_name' => 'Sweden', 'jap_name' => 'スウェーデン'),
    array('id' => 9, 'eng_name' => 'Belarus', 'jap_name' => 'ベラルーシ'),
    array('id' => 10, 'eng_name' => 'Brazil', 'jap_name' => 'ブラジル'),
    array('id' => 11, 'eng_name' => 'Canada', 'jap_name' => 'カナダ'),
    array('id' => 12, 'eng_name' => 'Macedonia', 'jap_name' => 'マケドニア')
  )

);

header('Content-Type: application/json');
echo json_encode($res);
