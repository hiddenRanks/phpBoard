<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("modPage/head.html"); ?>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/boardMain.css">
</head>
<body>
    <?php require("modPage/nav.php"); ?>
    <div id="wrapper">
        <div class="top freeBoard">
            <div class="boardTitle">
                <p>
                    <span><a href="#">+</a></span>&nbsp;&nbsp;자유 게시판
                </p>
            </div>

            <div class="contents">
                <p>최신글 14개</p>
            </div>
        </div>

        <div class="bottom talkBoard">
            <div class="boardTitle">
                <p>
                    <span><a href="#">+</a></span>&nbsp;&nbsp;토론 게시판
                </p>
            </div>

            <div class="contents">
                <p>최신글 8개</p>
            </div>
        </div>

        <div class="bottom hobby">
            <div class="boardTitle">
                <p>
                    <span><a href="#">+</a></span>&nbsp;&nbsp;취미 게시판
                </p>
            </div>

            <div class="contents">
                <p>최신글 8개</p>
            </div>
        </div>
    </div>
</body>
</html>