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
                <!-- <span class="writer">갓냐옹</span>
                <span class="title">제목이지만 제목이 아니다!</span> -->
                <?php
                    switch($_GET['board']) {
                        case 'free':
                            $boardCon = 'freeBoard';
                            break;
                        case 'talk':
                            $boardCon = 'talkBoard';
                            break;
                        case 'hobby':
                            $boardCon = 'hobbyBoard';
                            break;
                    }
                    $boardID = $_GET['id'];

                    $sql = "SELECT * FROM $boardCon WHERE id = $boardID";
                    $readBoard = fetch($con, $sql, []);

                    echo '<span class="writer">'.$readBoard->writer.'</span>';
                    echo '<h2 class="title">'.$readBoard->title.'</h2>';

                    //년 월 일 관련
                    $now = date("Y-m-d"); //2019-05-23
                    $nowMonth = substr($now, 5, 2);
                    $nowDay = substr($now, 8, 2);

                    list($year, $mon, $days) = explode("-", $readBoard->date); //20190523
                    $day = substr($days, 0, 2);

                    //시 분 초 관련
                    list($hours, $minute, $second) = explode(":", $days);
                    $hour = substr($hours, 3, 2);
                    $times = $hour.':'.$minute;

                    //오늘 날짜에 올릴 시 [시간]을 아닐 시 [날짜]를 출력
                    if($nowMonth == $mon && $nowDay == $day) {
                        echo '<span class="date">'.$times.'</span>';
                    } else {
                        echo '<span class="date">'.$mon.'.'.$day.'</span>';
                    }
                ?>
            </div>

            <div class="content">
                <?php 
                    echo '</p>'.$readBoard->content.'</p>';
                ?>
            </div>
        </div>
        
        <?php if(isset($_SESSION['user']) && $_SESSION['user']->id == $readBoard->writer) : ?>
            <div class="upDel">
                <?php
                    echo '<a class="update" href="updateBoard.php?board='.$boardCon.'&id='.$readBoard->id.'">수정하기</a>';
                    echo '<a class="delete" href="delete_ok.php?board='.$boardCon.'&id='.$readBoard->id.'">삭제하기</a>';
                ?>
            </div>
        <?php else : ?>
        <?php endif ?>
    </div>
</body>
</html>