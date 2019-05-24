<?php require("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("modPage/head.html"); ?>
    <link rel="stylesheet" href="css/bigBoard.css">
</head>
<body>
    <?php require("modPage/nav.php"); ?>
    <div id="wrapper">
        <!-- 검색한 부분을 가져와서 확인 후에 값으로 가져와야한다. -->
        <form action="./boardSearch.php" method="get">
            <table>
                <thead>
                    <tr>
                        <th class="number">번호</th>
                        <th class="title">제목</th>
                        <th class="writer">글쓴이</th>
                        <th class="date">날짜</th>
                        <th class="views">조회</th>
                        <th class="comment">추천</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        if(empty($search)) {
                            $sql = "SELECT * FROM freeBoard ORDER BY id DESC";

                            $result = fetchAll($con, $sql, []);
                        } else {

                        }

                        foreach($result as $row) {
                            echo '<tr class="eachList">';
                                echo '<a href="readBoard.php?board=free&id='.$row->id.'">';
                                    echo '<td class="number">'.$row->id.'</td>';
                                    echo '<td class="title">'.$row->title.'</td>';
                                    echo '<td class="writer">'.$row->writer.'</td>';

                                    //년 월 일 관련
                                    $now = date("Y-m-d"); //2019-05-23
                                    $nowMonth = substr($now, 5, 2);
                                    $nowDay = substr($now, 8, 2);

                                    list($year, $mon, $days) = explode("-", $row->date); //20190523
                                    $day = substr($days, 0, 2);

                                    //시 분 초 관련
                                    list($hours, $minute, $second) = explode(":", $days);
                                    $hour = substr($hours, 3, 2);
                                    $times = $hour.':'.$minute;

                                    //오늘 날짜에 올릴 시 [시간]을 아닐시 [날짜]를 출력
                                    if($nowMonth == $mon && $nowDay == $day) {
                                        echo '<td class="date">'.$times.'</td>';
                                    } else {
                                        echo '<td class="date">'.$mon.'.'.$day.'</td>';
                                    }

                                    echo '<td class="views">'.$row->views.'</td>';
                                    echo '<td class="comment">'.$row->comment.'</td>';
                                echo '</a>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
            <!-- <div class="searchBox">
                <select name="search">
                    <option value="title">제목</option>
                    <option value="content">내용</option>
                    <option value="writer">작성자</option>
                </select>
                <input type="text" placeholder="검색어" class="searchWrite" autocomplate=off>
                <input type="submit" value="검색" class="searchBtn">
            </div> -->
        </form>
        <?php if(isset($_SESSION['user'])) : ?>
            <a href="./writeBoard.php" class="goWrite">글 쓰기</a>
        <?php else : ?>
        <?php endif ?>
    </div>
</body>
</html>