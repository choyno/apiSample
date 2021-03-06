<?php

$msg = "";

if (!isset($_GET['key']) || $_GET['key'] != 'Uggk45hcn98'){
  $msg = "key";
} elseif (!isset($_GET['book_id']) || empty($_GET['book_id'])){
  $msg = "book_id";
} elseif (!isset($_GET['user_id']) || empty($_GET['user_id'])){
  $msg = "user_id";
}

if (!empty($msg)){
  printResult(array('result_code' => '201', 'result_message' => "{$msg} is required"));
}

$res = array(
  'result_code' => 0,
  'result_message' => 'OK',
  'book_id' => '1',
  'lesson_date' => '2014-02-03',
  'scheduled_start_time' => '21:30:00',
  'teacher_id' => 339,
  'teacher_name' => 'Janica（ジャニカ）',
  'image' => "http://{$_SERVER['HTTP_HOST']}/f545.jpg",
  'student_wish' => array(
    'lesson_style' => 'Lesson Style:Shunkan Eisakubun (Dondon)[Part2 Chapter25]',
    'link' => 'http://eikaiwa.dmm.com/download/pdf/toeic__DMM_TOEIC_Chapter01_b95c43cbd.pdf',//'http://eikaiwa.dmm.com/download/pdf/shunkan_eisakubun__shunkan-eisakubun01_48.pdf',
    'pronunciation' => 'Grammar/pron. errors:Correct positively',
    'written_words' => 'expressions:Use the chat box',
    'etc' => 'this is testing for cel'
  ),//"Lesson Style:Shunkan Eisakubun (Dondon)[Part2 Chapter25]\nhttp://eikaiwa.dmm.com/download/pdf/shunkan_eisakubun__shunkan-eisakubun01_48s.pdf\nGrammar/pron. errors:Correct positively\nFor understanding words/expressions:Use the chat box\nEtc.:this is testing for cel",
  'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
  'sentence' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.',
  'word' => array(),
  'evaluation' => -1,
  'evaluation_comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
);

for($i = 1; $i <= 5; $i++){
  $res['word'][] = array('eng_word' => "eng_word{$i}", 'jap_word' => "jap_word{$i}");
}

printResult($res);

function printResult($res){
  header('Content-Type: application/json');
  echo json_encode($res);
  exit;
}
