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
        <form method="POST" action="{{ route('passwordReset') }}">
            {{-- フォーム送信をしたい場合は必ず@csrfが必要。 --}}
            @csrf
            <h4>メールアドレス</h4>
            <p>ご指定のメールアドレス宛にパスワード再発行用のURLと認証キーをお送り致します。</p>
            <input type="text" class="passrePasswordReminder__input" name="email" placeholder="ここにメールアドレスを入力">
            <input type="submit" class="passrePasswordReminder__content-bottom" value="変更画面へ">
        </form>
    </div>
  </section>


</body>
</html>
