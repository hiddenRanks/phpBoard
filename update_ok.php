<?php
require("db.php");

if(isset($_POST['opt'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $id = $_POST['id'];

    $boardValue = $_POST['opt'];
    switch($boardValue) {
        case 'freeBoard':
            $sql = "UPDATE freeBoard SET title=?, content=? WHERE id=?";
            break;
        case 'talkBoard':
            $sql = "UPDATE talkBoard SET title=?, content=? WHERE id=?";
            break;
        case 'hobbyBoard':
            $sql = "UPDATE hobbyBoard SET title=?, content=? WHERE id=?";
            break;
    }

    $cnt = query($con, $sql, [$title, $content, $id]);

    if($cnt == 0) {
        msgAndGo("글 수정이 실패 되었습니다.", "./boardMain.php");
    } else {
        msgAndGo("글 수정이 완료 되었습니다.", "./boardMain.php");
    }
}