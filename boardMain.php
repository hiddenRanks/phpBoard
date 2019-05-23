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
                        $sql = "SELECT * FROM freeBoard ORDER BY id DESC LIMIT 0, 7";

                        $result = fetchAll($con, $sql, []);

                        foreach($result as $row) {
                            echo '<li class="eachList">';
                                echo '<a href="readBoard.php?board=free&id='.$row->id.'">';
                                    echo '<span class="number">'.$row->id.'</span>';
                                    echo '<span class="title">'.$row->title.'</span>';
                                    echo '<span class="comment">'.$row->comment.'</span>';

                                    //년 월 일 관련
                                    $now = date("Y-m-d"); //2019-05-23
                                    $nowMonth = substr($now, 6, 2);
                                    $nowDay = substr($now, 9, 2);

                                    list($year, $mon, $days) = explode("-", $row->date); //20190523
                                    $day = substr($days, 0, 2);

                                    //시 분 초 관련
                                    list($hours, $minute, $second) = explode(":", $days);
                                    $hour = substr($hours, 3, 2);
                                    $times = $hour.':'.$minute;

                                    //오늘 날짜에 올릴 시 [시간]을 아닐시 [날짜]를 출력
                                    if($nowMonth == $mon && $nowDay == $day) {
                                        echo '<span class="date">'.$mon.'.'.$day.'</span>';
                                    } else {
                                        echo '<span class="date">'.$times.'</span>';
                                    }
                                echo '</a>';
                            echo '</li>';
                        }
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
                    <?php
                        $sql = "SELECT * FROM talkBoard ORDER BY id DESC LIMIT 0, 7";

                        $result = fetchAll($con, $sql, []);

                        foreach($result as $row) {
                            echo '<li class="eachList">';
                                echo '<a href="readBoard.php?board=talk&id='.$row->id.'">';
                                    echo '<span class="number">'.$row->id.'</span>';
                                    echo '<span class="title">'.$row->title.'</span>';
                                    echo '<span class="comment">'.$row->comment.'</span>';

                                    //년 월 일 관련
                                    $now = date("Y-m-d"); //2019-05-23
                                    $nowMonth = substr($now, 6, 2);
                                    $nowDay = substr($now, 9, 2);

                                    list($year, $mon, $days) = explode("-", $row->date); //20190523
                                    $day = substr($days, 0, 2);

                                    //시 분 초 관련
                                    list($hours, $minute, $second) = explode(":", $days);
                                    $hour = substr($hours, 3, 2);
                                    $times = $hour.':'.$minute;

                                    //오늘 날짜에 올릴시 [시간]을 아닐시 [날짜]를 출력
                                    if($nowMonth == $mon && $nowDay == $day) {
                                        echo '<span class="date">'.$times.'</span>';
                                    } else {
                                        echo '<span class="date">'.$mon.'.'.$day.'</span>';
                                    }
                                echo '</a>';
                            echo '</li>';
                        }
                    ?>
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
                    <?php
                        $sql = "SELECT * FROM hobbyBoard ORDER BY id DESC LIMIT 0, 7";

                        $result = fetchAll($con, $sql, []);

                        foreach($result as $row) {
                            $readID = $row->id;
                            echo '<li class="eachList">';
                                echo '<a href="readBoard.php?board=hobby&id=$readID">';
                                    echo '<span class="number">'.$row->id.'</span>';
                                    echo '<span class="title">'.$row->title.'</span>';
                                    echo '<span class="comment">'.$row->comment.'</span>';

                                    //년 월 일 관련
                                    $now = date("Y-m-d"); //2019-05-23
                                    $nowMonth = substr($now, 6, 2);
                                    $nowDay = substr($now, 9, 2);

                                    list($year, $mon, $days) = explode("-", $row->date); //20190523
                                    $day = substr($days, 0, 2);

                                    //시 분 초 관련
                                    list($hours, $minute, $second) = explode(":", $days);
                                    $hour = substr($hours, 3, 2);
                                    $times = $hour.':'.$minute;

                                    //오늘 날짜에 올릴시 [시간]을 아닐시 [날짜]를 출력
                                    if($nowMonth == $mon && $nowDay == $day) {
                                        echo '<span class="date">'.$times.'</span>';
                                    } else {
                                        echo '<span class="date">'.$mon.'.'.$day.'</span>';
                                    }
                                echo '</a>';
                            echo '</li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>