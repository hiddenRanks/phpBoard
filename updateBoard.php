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
            require("db.php");    
            $boardID = $_GET['id'];
            $boardCon = $_GET['board'];
                                
            $sql = "SELECT * FROM $boardCon WHERE id = $boardID";

            $boardInfo = fetch($con, $sql, []);
        ?>
        <div class="writeBox">
            <form action="./update_ok.php" method="post">
                <input type="text" name="title" class="title" placeholder="제목 입력" value=<?= $boardInfo->title ?>>
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