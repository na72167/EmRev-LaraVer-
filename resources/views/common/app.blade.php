<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>EmRev | @yield('title','')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="./js/app.js"></script>
    </head>

    <body>
        @section('header')
            <!-- ヘッダー関係 -->
            <header id="index-top" class="header js-toggle-sp-menu-target">
                <div class="header__content-wrap">
                    <!-- タイトル -->
                    <h1 class="header__title" href="index.php"><a href="index.php" class="header__title-link">EmRev</a></h1>
                    <?php
                        if(empty($_SESSION['user_id'])){
                    ?>
                        <!-- ナビゲーション(ログイン前のもの。セッション内容で切り替える。) -->
                        <nav class="header__nav">
                        <li class="header__nav-list active-login-menu">LOGIN</li>
                        <li class="header__nav-list active-signup-menu">SIGNUP</li>
                        </nav>
                    <?php
                        }elseif(!empty($_SESSION['user_id'])){
                        ?>
                        <!-- ナビゲーション(ログイン後のもの。セッション内容で切り替える。) -->
                        <nav class="header__nav">
                        <li class="header__nav-list js-toggle-sp-menu">MENU</li>
                        <li class="header__nav-list" ><a href="./reviewRegister-cList.php">REVIEW REGISTRATION</a></li>
                        <li class="header__nav-list"><a href="./logout.php">LOGOUT</a></li>
                        </nav>
                    <?php
                        }
                        ?>
                </div>
            </header>

            <div id="js-show-msg" class="msg-slide">
            </div>

            <!-- メニューバーの内容部分 -->
            <nav class="menuAbout">
                <ul class="menuAbout__itemWrap">
                <li class="menuAbout__itemWrap-item"><a class="menuLink-color" href="./mypage.php">マイページ</a></li>
                <li class="menuAbout__itemWrap-item">お気に入りレビュー一覧</li>
                <li class="menuAbout__itemWrap-item"><a class="menuLink-color" href="./revliReviewList.php">投稿されたレビュー一覧</a></li>
                <li class="menuAbout__itemWrap-item"><a class="menuLink-color" href="./browsingHistory.php">閲覧履歴</li>
                <li class="menuAbout__itemWrap-item"><a class="menuLink-color" href="./employeeRegistration.php">投稿者登録</a></li>
                <li class="menuAbout__itemWrap-item">登録社員一覧</li>
                <li class="menuAbout__itemWrap-item"><a class="menuLink-color" href="./passwordReminder.php">パスワード変更</a></li>
                <li class="menuAbout__itemWrap-item"><a class="menuLink-color" href="./reviewCompanyRegistration.php">レビュー会社登録申請</li>
                <li class="menuAbout__itemWrap-item"><a class="menuLink-color" href="./withdrawal.php">退会する</a></li>
                </ul>
            </nav>
        @show

        @if ($__env->yieldContent('title') === 'Home')
            @yield('home')
        @endif

        @section('footer')
            <footer class="footer">
                <div class="footer__element-wrap">
                <div class="footer__element-copyright">
                    <h1 class="footer__element-copyrightTitle">EmRev</h1>
                    Copyright © Y.H<br>All Rights Reserved
                </div>
                <div class="footer__element-link">
                    sample<br>
                    sample<br>
                    sample
                </div>
                <div class="footer__element-sns">
                    sample<br>
                    sample<br>
                    sample
                </div>
                </div>
            </footer>
        @show
    </body>
</html>
