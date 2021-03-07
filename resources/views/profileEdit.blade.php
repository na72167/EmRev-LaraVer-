@extends('common.app')

@section('title','ProfileEdit')

@section('profileEdit')


    @extends('common.intro')
    @extends('etc.designSpace')
    @extends('etc.middleElement')


    <!-- 後にログインユーザーが一般会員の場合と社員登録版で切り替えるようにする。 -->

    <!-- 直書きスタイルは一般会員ユーザー用のもの -->
    <section class="profEdiUserProfile" style='height:320px; margin-top:50px;'>

        <!-- 一般ユーザーの場合 -->
        <!-- enctype属性・・・送信する情報のエンコードタイプを指定する。form-dataはフォームにファイルを送信する機能がある場合に指定する。 -->
        <form method="POST" action="{{ route('profileEdit') }}" enctype="multipart/form-data">
            @csrf

        <!-- ユーザープロフ画像の登録 -->
        <div class="profEdiUserProfile__img-wrap">

            <img class="profEdiUserProfile__img">
            <!-- ここが写真の入力フォームになる予定 -->
            <!-- <input type="file" name="pic" class="profEdiUserProfile__img" style="height:370px;"> -->
            </div>

            <div class="profEdiUserProfile__detail">
                <label class="@error('username') err @enderror">
                    <div class="profEdiUserProfile__name">
                        <div class="profEdiUserProfile__name-areaMsg">
                            @error('username')
                                <span class="">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <h1 class="profEdiUserProfile__name-element">name</h1>
                        <input class="profEdiUserProfile__name-output @error('username') err @enderror" type="text" name="username" value="{{ old('username') }}">
                    </div>
                </label>

            <div class="profEdiUserProfile__ageTel-Wrap">

                <label class="@error('age') err @enderror">
                    <div class="profEdiUserProfile__age">
                        <div class="profEdiUserProfile__age-areaMsg">
                            @error('age')
                                <span class="">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profEdiUserProfile__age-element">age</div>
                        <input class="profEdiUserProfile__age-output" type="text" name="age" value="{{ old('age') }}">
                    </div>
                </label>

                <label class="@error('tel') err @enderror">
                    <div class="profEdiUserProfile__tel">
                        <div class="profEdiUserProfile__tel-areaMsg">
                            @error('tel')
                                <span class="">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profEdiUserProfile__tel-element">tel</div>
                        <input class="profEdiUserProfile__tel-output" type="text" name="tel" value="{{ old('tel') }}">
                    </div>
                </label>

            </div>

            <label class="@error('address') err @enderror">
                <div class="profEdiUserProfile__address">
                    <div class="profEdiUserProfile__address-areaMsg">
                        @error('address')
                            <span class="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="profEdiUserProfile__address-element">address</div>
                    <input class="profEdiUserProfile__address-output" type="text" name="address" value="{{ old('address') }}>">
                </div>
            </label>

        </section>

        <div class="profEdiUserProfile__bottom-wrap" style="margin-bottom:5px;">
            <!-- post内容を初期化したのち、マイページへ移動 -->
            <input type="submit" name='cancel-button' class="profEdiUserProfile__bottom-return" value="変更を取り消す">
            <!-- 送信処理に沿って画面遷移 -->
            <input type="submit" name='update-button' class="profEdiUserProfile__bottom-next" value="変更する">
        </div>

    </form>



