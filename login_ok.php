<?php
$id = $_POST['ID'];
$pw = $_POST['password'];

require("db.php");

$sql = "SELECT * FROM users WHERE id = ? AND password = PASSWORD(?)"; //싹 다 찾아본다.
$user = fetch($con, $sql, [$id, $pw]); //$con => db.php에 있는 db연결 저장 변수

if($user) {
    //싹다 찾아봐서 있을 경우
    $_SESSION['user'] = $user;
    msgAndGo("로그인 성공", "./boardMain.php");
} else {
    //없을 경우
    msgAndGo("로그인 실패", "./login.php");
}