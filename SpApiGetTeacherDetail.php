<?php
$msg = "";

if (!isset($_GET['key']) || $_GET['key'] != 'Uggk45hcn98'){
  $msg = "key";

} else if (!isset($_GET['teacher_id']) || empty($_GET['teacher_id'])){
  $msg = "teacher_id";
}

if (!empty($msg)){
  printResult(array('result_code' => '201', 'result_message' => "{$msg} is required"));
}

$res = array(
  "result_code" => 0,
  "result_message" => "OK",
  "teacher_id" => 2,
  "teacher_name" => "Janica（ジャニカ）",
  "career" => "Full Time Teacher",
  "college" => "University of Cebu-Banilad",
  "hobby" => "Basketball",
  "favorite_movie" => "Iron-Man 3",
  "en_intro" => "lorem ipsum lorm ipsum lorem ipson tatoy",
  "ja_intro" => "lorem ipsum lorem ipsum lorem issom lorem ipsom",
  "work_type" => "work type*",
  "skype" => "skype.dmm.com",
  "gender" => "Male",
  "birthday" => "1992-04-14",
  "country_id" => 2,
  "image" => "http://{$_SERVER['HTTP_HOST']}/f545.jpg",
  "good" => 2,
  "japanese" => "japanese words here",
  "youtube" => "youtube linke here",
  "is_fav" => 1,
  "teacher_type" => array(
        "初心者向け",
        "上級者向け",
        "キッズ向け"),
  "evaluation" => array(
    array("evaluation_comment" => "evaluation comment here1", "member_name" => "User1", "regist_datetime" => "2014-01-24 12:22:45"),
    array("evaluation_comment" => "evaluation comment here2", "member_name" => "User2", "regist_datetime" => "2014-01-24 12:22:45"),
    array("evaluation_comment" => "evaluation comment here3", "member_name" => "User3", "regist_datetime" => "2014-01-24 12:22:45")
  )
);


printResult($res);


function printResult($res){
  header('Content-Type: application/json');
  echo json_encode($res);
  exit;
}
