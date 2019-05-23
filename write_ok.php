<?php
require("db.php");

if(isset($_POST['opt'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $writer = $_SESSION['user']->id;
    $date = date("Y-m-d h-i-s");
    $views = 0;
    $comment = 0;

    $boardValue = $_POST['opt'];
    switch($boardValue) {
        case 'freeBoard':
            $sql = "INSERT INTO freeBoard(title, content, writer, date, views, comment) VALUES(?, ?, ?, ?, ?, ?)";
            break;
        case 'talkBoard':
            $sql = "INSERT INTO talkBoard(title, content, writer, date, views, comment) VALUES(?, ?, ?, ?, ?, ?)";
            break;
        case 'hobbyBoard':
            $sql = "INSERT INTO hobbyBoard(title, content, writer, date, views, comment) VALUES(?, ?, ?, ?, ?, ?)";
            break;
    }

    $cnt = query($con, $sql, [$title, $content, $writer, $date, $views, $comment]);

    if($cnt == 0) {
        msgAndGo("글 등록에 실패했습니다.", "/writeBoard.php");
    } else {
        msgAndGo("글 등록에 성공했습니다.", "/boardMain.php");
    }
}