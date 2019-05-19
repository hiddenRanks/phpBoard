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
                    <tr class="eachList">
                        <td class="number">111</td>
                        <td class="title">안녕?</td>
                        <td class="writer">갓냥이</td>
                        <td class="date">06.16</td>
                        <td class="views">12000</td>
                        <td class="like">1</td> <!-- 1이상일때만 넣어줘야한다. 0이라면 붙여주면 안됨 -->
                    </tr>
                    <tr class="eachList">
                        <td class="number">112</td>
                        <td class="title">
                            우에에엑&nbsp;&nbsp;&nbsp;<span class="comment">+14</span>
                        </td>
                        <td class="writer">모르는닉네임</td>
                        <td class="date">06.16</td>
                        <td class="views">1230</td>
                        <td class="like">16</td>
                    </tr>
                </tbody>
            </table>
            <div class="searchBox">
                <select name="search">
                    <option value="title">제목</option>
                    <option value="content">내용</option>
                    <option value="writer">작성자</option>
                </select>
                <input type="text" placeholder="검색어" class="searchWrite" autocomplate=off>
                <input type="submit" value="검색" class="searchBtn">
            </div>
        </form>
        <?php if(isset($_SESSION['user'])) : ?>
        <a href="#">글 쓰기</a>
        <?php else : ?>
        <?php endif ?>
    </div>
</body>
</html>