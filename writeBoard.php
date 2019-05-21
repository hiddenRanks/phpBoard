<?php require("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("modPage/head.html"); ?>
    <link rel="stylesheet" href="css/writeBoard.css">
</head>
<body>
    <?php require("modPage/nav.php"); ?>
    <div id="wrapper">    
        <div class="writeBox">
            <form action="./writeFree_ok.php" method="post">
                <div id="select">
                    <select name="opt" class="opt">
                        <option value="freeBoard">자유 게시판</option>
                        <option value="talkBoard">토론 게시판</option>
                        <option value="hobbyBoard">취미 게시판</option>
                    </select>    
                </div>

                <input type="text" name="title" class="title" placeholder="제목 입력">
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
                <input type="submit" value="글 올리기" class="submit">
            </form>
            <div class="textCheck">
                <span class="byteCheck">0</span>byte/<span>2000byte</span>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/textarea.js"></script>
</body>
</html>