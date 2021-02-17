@extends('common.app')

@section('title','Home')

@section('home')
    <section class="hero">

        <!-- テキスト関係 -->
            <div class="hero__content">

            <div class="hero__text-wrap">
                <h1 class="hero__text-catchTheam">
                Easier Deployment
                </h1>
                <div class="hero__text-about">
                サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                サンプルサンプルサンプルサンプルサンプルサンプルサンプルサン
                </div>
                <a class="hero__text-aboutLink" href="#index-about">このアプリについて</a>
            </div>

            <div class="hero__signup-loginWrap">
                <!-- 会員登録関係 -->
                <div class="hero__signup js-signup-style">

                {{-- postメソッド・uriに/register持ちのルーティングにアクセス --}}
                <form method="POST" class="hero__signup-formStyle" action="{{ route('register') }}">
                    @csrf
                    <h2 class="hero__signup-title">SignUp</h2>
                    <div class="hero__signup-commonMsgArea">
                        <!-- 接続エラー等のメッセージをここに出力させる。 -->
                        <!--例外処理発生時に出力されるメッセージを出す処理-->
                    </div>

                    <!-- メールアドレス入力欄 -->
                    <div class="hero__signup-emailaddressField">
                        <!-- 後にphpでエラー時用のスタイルを付属させる様にする。 -->

                        <label class="#">
                            <!-- バリに引っかかった際にはerrクラスを付属させる。 -->
                            <input class="hero__signup-emailForm @error('email') err @enderror" name="email" value="{{ old('email') }}">
                            <div class="hero__signup-areaMsg">
                                @error('password')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </label>
                    </div>

                    <!-- パスワード入力 -->
                    <div class="hero__signup-passwardField">
                    <label class="#">
                        <!-- 後にphpでエラー時用のスタイルを付属させる様にする。 -->
                        <input class="hero__signup-passwordForm @error('password') err @enderror" name="password" value="{{ old('password') }}">

                        <div class="hero__signup-areaMsg">
                            {{-- rollについて --}}
                            {{-- https://www.osaka-kyoiku.ac.jp/~joho/html5_ref/role_attr.php?menutype=2dtaldl01l02l03A0 --}}
                            @error('password')
                                <span class="" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </label>
                    </div>

                    <!-- 確認用パスワード入力 -->
                    <div class="hero__signup-confirmationPasswardField">
                    <!-- 後にphpでエラー時用のスタイルを付属させる様にする。 -->
                    <label class="#">
                        <input class="hero__signup-passwordConfirmationForm" name="password_confirmation" type="password" placeholder="Confirmation Password" value="">
                    </label>
                        {{-- 確認用パスワードはあくまでパスワードの比較用なのでバリを通す予定無し。 --}}
                    </div>

                    <div class="hero__signup-registerBtnField">
                    <input class="hero__signup-registerBtn" type="submit" name="user_register" value="登録する">
                    </div>

                </form>


                </div>


                <!-- ログイン関係 -->
                <div class="hero__login js-login-style hidden">

                    {{-- postメソッド・uriに/register持ちのルーティングにアクセス --}}
                    <form method="POST" class="hero__login-formStyle" action="{{ route('login') }}">
                        @csrf
                        <h2 class="hero__login-title">Login</h2>
                        <div class="hero__login-commonMsgArea">
                            <!-- 接続エラー等のメッセージをここに出力させる。 -->
                            <!--例外処理発生時に出力されるメッセージを出す処理-->
                        </div>

                        <!-- メールアドレス入力欄 -->
                        <div class="hero__login-emailaddressField">
                            <!-- 後にphpでエラー時用のスタイルを付属させる様にする。 -->
                            <label class="#">
                                <!-- バリに引っかかった際にはerrクラスを付属させる。 -->
                                <input class="hero__login-emailForm @error('email') err @enderror" name="email" value="{{ old('email') }}">
                                <div class="hero__login-areaMsg">
                                    @error('password')
                                        <span class="" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </label>
                        </div>

                        <!-- パスワード入力 -->
                        <div class="hero__login-passwardField">
                            <label class="#">
                                <!-- 後にphpでエラー時用のスタイルを付属させる様にする。 -->
                                <input class="hero__login-passwordForm @error('password') err @enderror" name="password" value="{{ old('password') }}">
                                <div class="hero__login-areaMsg">
                                    {{-- rollについて --}}
                                    {{-- https://www.osaka-kyoiku.ac.jp/~joho/html5_ref/role_attr.php?menutype=2dtaldl01l02l03A0 --}}
                                    @error('password')
                                        <span class="" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </label>
                        </div>

                        <div class="hero__login-registerBtnField">
                            <input class="hero__login-registerBtn" type="submit" name="user_register" value="ログイン">
                        </div>

                    </form>

                </div>

            </div>
            </div>
        </div>
        </section>

        <!-- 新着レビューコンテンツ -->
        <section class="review">

        <div class="review__content-block">
            <h3 class="review__content-title">New reviews</h3>
            <!-- 新着レビューコンテンツ(今は仮レイアウトの都合上複数同じ要素を作っているがphpを書き始めた際にはfor文で回す) -->
            <div class="review__content-wrap">
            <div class="review__content-individual">

                <!-- イメージ画像 -->
                <img class="review__image" rel="#">

                <!-- ユーザー名 -->
                <div href="#" class="review__userName-style">
                <span class="review__userName">
                    ユーザー名
                </span>
                </div>

                <!-- 会社名 -->
                <div href="#" class="review__companyName-style">
                <span class="review__companyName">会社名</span>
                </div>

                <!-- 会社の業界 -->
                <div href="#" class="review__industry-style">
                <span class="review__industry">会社の業界</span>
                </div>

                <!-- レビュー内容(総評) -->
                <div class="review__generalComment-style">
                <div class="review__generalComment">
                    サンプルサンプルサンプル<br>
                    サンプルサンプルサンプル<br>
                    サンプルサンプルサンプル<br>
                    サンプルサンプルサンプル<br>
                    サンプルサンプルサンプル...
                </div>
                </div>

                <!-- 詳細を見る -->
                <div href="#" class="review__detail-style">
                <span class="review__detail">
                詳細を見る
                </span>
                </div>
            </div>


            <!-- レビューコンテンツ(今は仮レイアウトの都合上複数同じ要素を作っているがphpを書き始めた際にはfor文で回す) -->
            <div class="review__content-individual">

                <!-- イメージ画像 -->
                <img class="review__image" rel="#">

                <!-- ユーザー名 -->
                <div href="#" class="review__username-style">
                <span class="review__userName">
                    ユーザー名
                </span>
                </div>

                <!-- 会社名 -->
                <div href="#" class="review__companyName-style">
                <span class="review__companyName">会社名</span>
                </div>

                <!-- 会社の業界 -->
                <div href="#" class="review__industry-style">
                <span class="review__industry">会社の業界</span>
                </div>

                <!-- レビュー内容(総評) -->
                <div class="review__generalComment-style">
                <div class="review__generalComment">
                    サンプルサンプルサンプル<br>
                    サンプルサンプルサンプル<br>
                    サンプルサンプルサンプル<br>
                    サンプルサンプルサンプル<br>
                    サンプルサンプルサンプル...
                </div>
                </div>

                <!-- 詳細を見る -->
                <div href="#" class="review__detail-style">
                <span class="review__detail">
                詳細を見る
                </span>
                </div>
            </div>

            <!-- レビューコンテンツ(今は仮レイアウトの都合上複数同じ要素を作っているがphpを書き始めた際にはfor文で回す) -->
            <div class="review__content-individual">

                <!-- イメージ画像 -->
                <img class="review__image" rel="#">

                <!-- ユーザー名 -->
                <div href="#" class="review__userName-style">
                <span class="review__userName">
                    ユーザー名
                </span>
                </div>

                <!-- 会社名 -->
                <div href="#" class="review__companyName-style">
                <span class="review__companyName">会社名</span>
                </div>

                <!-- 会社の業界 -->
                <div href="#" class="review__industry-style">
                <span class="review__industry">会社の業界</span>
                </div>

                <!-- レビュー内容(総評) -->
                <div class="review__generalComment-style">
                <div class="review__generalComment">
                    サンプルサンプルサンプル<br>
                    サンプルサンプルサンプル<br>
                    サンプルサンプルサンプル<br>
                    サンプルサンプルサンプル<br>
                    サンプルサンプルサンプル...
                </div>
                </div>

                <!-- 詳細を見る -->
                <div href="#" class="review__detail-style">
                <span class="review__detail">
                詳細を見る
                </span>
                </div>
            </div>
            </div>
        </div>
        </section>


        <!-- このアプリについて -->
        <section id="index-about" class="about">
        <div class="about__content-wrap">
            <h3 class="about__content-title">
            About app
            </h3>
            <div class="about__content-text">
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            サンプルサンプルサンプルサンプルサンプルサンプルサンプル
            </div>
            <!-- リンク先はセッション内のログイン情報に沿ってif文で変更する。ログインしている場合はマイページへ。していない場合はサインアップ画面へ移動する。-->
            <a href="#index-top" class="about__content-link active-signup-menu">
            このアプリを使ってみる
            </a>
        </div>
        </section>

        <!-- お問い合わせフォーム -->
        <section class="contact" id="index-contact">
        <div class="contact__content-wrap">
            <div class="contact__content-title">
            CONTACT
            </div>
            <div class="contact__content-body">
            <from action="" class="">
                <input class="contact__content-form" type="text" placeholder="お名前">
                <input class="contact__content-form" type="email" placeholder="E-Mail">
                <input class="contact__content-form" placeholder="お問い合わせの種類">
                <textarea class="contact__content-areaForm" placeholder="お問い合わせ内容"></textarea>
                <button class="contact__content-buttom">送信する</button>
            </from>
            </div>
        </div>
        </section>

@endsection
