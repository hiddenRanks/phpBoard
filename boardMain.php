<?php require("db.php"); ?>

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
                    <span><a href="freeBoard.php">+</a></span>&nbsp;&nbsp;자유 게시판
                </p>
            </div>
            <div class="contents">
                <ul class="board-list big">
                    <?php
                        $sql = "SELECT * FROM freeBoard LIMIT ?";
                        $limit = 7;

                        $result = fetchAll($con, $sql, [$limit]);
                        if($result == null) {
                            echo "들어온 값 없음";
                        }

                        // foreach($result as $row) {
                        //     echo '<li class="eachList">';
                        //         echo '<a href="#">';
                        //             echo '<span class="number">'.$row['id'].'</span>';
                        //             echo '<span class="title">'.$row['title'].'</span>';
                        //             echo '<span class="comment">'.$row['comment'].'</span>';
                        //             echo '<span class="date">'.$row['date'].'</span>';
                        //         echo '</a>';
                        //     echo '</li>';
                        // }
                    ?>
                </ul>
            </div>
        </div>

        <div class="bottom talkBoard">
            <div class="boardTitle">
                <p>
                    <span><a href="talkBoard.php">+</a></span>&nbsp;&nbsp;토론 게시판
                </p>
            </div>

            <div class="contents">
            <ul class="board-list small">
                    <!-- 어떤 게시판(테이블)인가 / 게시판(테이블)의 번호(테이블 번호) -->
                    <li class="eachList">
                        <a href="#">
                            <span class="number">111</span>
                            <span class="title">이건 좀...</span>
                            <span class="comment">+14</span>
                            <span class="date">5.30</span>
                        </a>
                    </li>
                    <li class="eachList">
                        <a href="#">
                            <span class="number">111</span>
                            <span class="title">이건 좀...</span>
                            <span class="comment">+14</span>
                            <span class="date">5.30</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bottom hobby">
            <div class="boardTitle">
                <p>
                    <span><a href="hobbyBoard.php">+</a></span>&nbsp;&nbsp;취미 게시판
                </p>
            </div>

            <div class="contents">
                <ul class="board-list small">
                    <li class="eachList">
                        <a href="#">
                            <span class="number">111</span>
                            <span class="title">이건 좀...</span>
                            <span class="comment">+14</span>
                            <span class="date">5.30</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>