    <nav>
        <ul class="menu">
            <li>
                <a href="freeBoard.php">자유 게시판</a>
            </li>
            <li>
                <a href="talkBoard.php">토론 게시판</a>
            </li>
            <li>
                <a href="hobbyBoard.php">취미 게시판</a>
            </li>
        </ul>

        <div class="accountBox">
            <!-- isset는 값이 empty인지 아닌지를 확인합니다. -->
            <?php if(isset($_SESSION['user'])) : ?>
                <div class="info">
                    <span><?= $_SESSION['user']->id ?>님</span>
                    <a href="./logout.php" class="btn goLogout">로그아웃</a>
                </div>
            <?php else : ?>
                <div class="login">
                    <a href="./login.php" class="goLogin">로그인</a>
                </div>
                <div class="register">
                    <a href="./register.php" class="goRegister">회원가입</a>
                </div>
            <?php endif ?>
        </div>
    </nav>