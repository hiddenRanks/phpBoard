<?php
require("db.php");

if(isset($_GET['board'])) {
    $id = $_GET['id'];

    $boardValue = $_GET['board'];
    switch($boardValue) {
        case 'freeBoard':
            $sql = "DELETE FROM freeBoard WHERE id = ?";
            break;
        case 'talkBoard':
            $sql = "DELETE FROM talkBoard WHERE id = ?";
            break;
        case 'hobbyBoard':
            $sql = "DELETE FROM hobbyBoard WHERE id = ?";
            break;
    }

    $cnt = query($con, $sql, [$id]);

    if($cnt == 0) {
        msgAndGo("글 삭제에 실패했습니다.", "/boardMain.php");
    } else {
        msgAndGo("글 삭제에 성공했습니다.", "/boardMain.php");
    }
}