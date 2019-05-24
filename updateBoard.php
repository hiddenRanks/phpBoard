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
        <?php
            $boardID = $_GET['id'];
            $boardCon = $_GET['board'];

            switch($boardCon) {
                case 'freeBoard':
                    $krCon = '자유 게시판';
                    break;
                case 'talkBoard':
                    $krCon = '토론 게시판';
                    break;
                case 'hobbyBoard':
                    $krCon = '취미 게시판';
                    break;
            }
                                
            $sql = "SELECT * FROM $boardCon WHERE id = $boardID";

            $boardInfo = fetch($con, $sql, []);
        ?>
        <div class="writeBox">
            <form action="./update_ok.php" method="post">
                <div id="select">
                    <select name="opt" class="opt">
                        <?php
                            echo '<option value="'.$boardCon.'">'.$krCon.'</option>';
                        ?>
                    </select>    
                </div>
                <input type="text" name="id" class="numb" placeholder="아이디 저장용" value=<?= $boardID ?>>
                <input type="text" name="title" class="title" id="title" placeholder="제목 입력" value=<?= $boardInfo->title ?>>
                <textarea name="content" id="content" cols="30" rows="10"><?= $boardInfo->content ?></textarea>
                <input type="submit" value="글 수정" class="submit">
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