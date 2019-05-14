<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('modPage/head.html'); ?>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- 바디 전체에다가 이미지 편집한거 넣기 -->
    <div id="wrapper">
        <div class="goBoard">
            <a href="./boardMain.php">게시판 놀러가기</a>
        </div>

        <div class="textLogo">
            <p>
                혼란스러운 게시판에 오신걸 환영합니다!
            </p>
        </div>

        <div class="loginBox">
            <h2>혼란한 로그인</h2>
            <form action="./login_ok.php">
                <input type="text" name="ID" placeholder="아이디/Id" class="input id">
                <input type="password" name="password" placeholder="비밀번호/Password" class="input pw">
                <input type="submit" value="로그인" class="input login-btn">
            </form>
            <a href="./register.php" class="register-btn">회원가입</a>
        </div>
    </div>
</body>
</html>