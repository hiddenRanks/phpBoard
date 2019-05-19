<?php require("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("modPage/head.html"); ?>
    <link rel="stylesheet" href="css/readBoard.css">
</head>
<body>
    <?php require("modPage/nav.php"); ?>
    <div id="wrapper">
        <div class="getBoard">
            <div class="header">
                <span class="writer">갓냐옹</span>
                <span class="title">제목이지만 제목이 아니다!</span>
            </div>

            <div class="content">
                <p>저자아아아아아아아아아아앙아아아아앙아아아아아아아아앙</p>
            </div>
        </div>

        <!-- 어렵지만 게시판과 댓글 테이블 따로 만들기 -->
        <div class="comments">
            <div class="comment">
                <span class="commnetWriter">모르는닉네임</span>
                <span class="commentContent">ㅇㅁㅇ</span>
            </div>
        </div>
    </div>
</body>
</html>