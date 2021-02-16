<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>タイトル</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="./js/app.js"></script>
</head>

<body>


  <section class="passrePasswordReminder">
    <div class="passreReminder__content">
      <h1 class="passrePasswordReminder__title">Password Reminder</h1>

      <form action="" method="post" class="form">
        <p>ご指定のメールアドレスお送りした【パスワード再発行認証】メール内にある「認証キー」をご入力ください。</p>
          <div class="area-msg">
          </div>

          <label class="">
            Email
            <input type="text" name="email" value="">
          </label>

        <div class="area-msg">
        </div>

        <label class="">
          認証キー
          <input type="text" name="token" placeholder="受信した認証キーを入力">
        </label>

        <label class="">
          変更後パスワード
          <input type="text" name="password" placeholder="変更後パスワードを入力">
        </label>

        <div class="area-msg">
        </div>
        <div class="btn-container">
          <input type="submit" class="btn btn-mid" name="send" value="再発行する">
        </div>
      </form>

    </div>
  </section>

</body>
</html>
