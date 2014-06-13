<?php

$res = array(
  'result_code' => 0,
  'result_message' => 'OK',
  'result' => array(
    array('country_id' => 1, 'eng_name' => 'Philippines', 'jap_name' => 'フィリピン'),
    array('country_id' => 2, 'eng_name' => 'United States', 'jap_name' => 'アメリカ'),
    array('country_id' => 3, 'eng_name' => 'Lithuania', 'jap_name' => 'リトアニア'),
    array('country_id' => 4, 'eng_name' => 'France', 'jap_name' => 'フランス'),
    array('country_id' => 5, 'eng_name' => 'Bangladesh', 'jap_name' => 'バングラデシュ'),
    array('country_id' => 6, 'eng_name' => 'Kenya', 'jap_name' => 'ケニア'),
    array('country_id' => 7, 'eng_name' => 'United Kingdom', 'jap_name' => 'イギリス'),
    array('country_id' => 8, 'eng_name' => 'Sweden', 'jap_name' => 'スウェーデン'),
    array('country_id' => 9, 'eng_name' => 'Belarus', 'jap_name' => 'ベラルーシ'),
    array('country_id' => 10, 'eng_name' => 'Brazil', 'jap_name' => 'ブラジル'),
    array('country_id' => 11, 'eng_name' => 'Canada', 'jap_name' => 'カナダ'),
    array('country_id' => 12, 'eng_name' => 'Macedonia', 'jap_name' => 'マケドニア')
  )

);

header('Content-Type: application/json');
echo json_encode($res);
