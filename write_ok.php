<?php
require("db.php");

if(isset($_POST['opt'])) {
    $title = $POST['titlie'];
    $content = $_POST['content'];
    $writer = $_SESSION['user']->id;
    $date = date("m.d");
    $views = 0;
    $comment = 0;

    $boardValue = $_Post['opt'];
    switch($boardValue) {
        case 'freeBoard':
            $sql = "INSERT INTO freeBoard(id, title, content, writer, date, views, comment) VALUES(?, ?, ?, ?, ?, ?, ?)";
            break;
        case 'talkBoard':
            $sql = "INSERT INTO talkBoard() VALUES()";
            break;
        case 'hobbyBoard':
            $sql = "INSERT INTO hobbyBoard() VALUES()";
            break;
    }
}

$cnt = query($con, $sql, [$id, $name, $pw]);

if($cnt == 0) {
    msgAndGo("글 등록에 실패했습니다.", "/writeBoard.php");
} else {
    msgAndGo("글 등록에 성공했습니다.", "/boardMain.php");
}