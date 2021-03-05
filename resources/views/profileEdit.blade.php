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
            <form action="" method="post" enctype="multipart/form-data">

            <!-- 共通エラーの出力 -->
            <div class="area-msg">
                <?php
                if(!empty($generalUserDate->getErr_msCommon())) echo $generalUserDate->getErr_msCommon();
                ?>
            </div>

            <!-- ユーザープロフ画像の登録 -->
            <div class="profEdiUserProfile__img-wrap">
            <img class="profEdiUserProfile__img">

            <!-- ここが写真の入力フォームになる予定 -->
            <!-- <input type="file" name="pic" class="profEdiUserProfile__img" style="height:370px;"> -->

            </div>


            <div class="profEdiUserProfile__detail">

            <label class="<?php if(!empty($generalUserDate->getErr_msUserName())) echo 'err'; ?>">
                <div class="profEdiUserProfile__name">
                    <div class="profEdiUserProfile__name-areaMsg">
                    <?php
                        if(!empty($generalUserDate->getErr_msUserName())) echo $generalUserDate->getErr_msUserName();
                    ?>
                    </div>
                    <h1 class="profEdiUserProfile__name-element">name</h1>
                    <input class="profEdiUserProfile__name-output" type="text" name="username" value="<?php if(!empty($generalUserDate->getUsername())) echo $generalUserDate->getUsername(); ?>">
                </div>
            </label>

            <div class="profEdiUserProfile__ageTel-Wrap">

            <label class="<?php if(!empty($generalUserDate->getErr_msAge())) echo 'err'; ?>">
                <div class="profEdiUserProfile__age">
                    <div class="profEdiUserProfile__age-areaMsg">
                        <?php
                        if(!empty($generalUserDate->getErr_msAge())) echo $generalUserDate->getErr_msAge();
                        ?>
                    </div>
                    <div class="profEdiUserProfile__age-element">age</div>
                    <input class="profEdiUserProfile__age-output" type="text" name="age" value="<?php echo $generalUserDate->getAge(); ?>">
                </div>
            </label>

            <label class="<?php if(!empty($generalUserDate->getErr_msTel())) echo 'err'; ?>">
                <div class="profEdiUserProfile__tel">
                <div class="profEdiUserProfile__tel-areaMsg">
                    <?php
                        if(!empty($generalUserDate->getErr_msTel())) echo $generalUserDate->getErr_msTel();
                    ?>
                    </div>
                    <div class="profEdiUserProfile__tel-element">tel</div>
                    <input class="profEdiUserProfile__tel-output" type="text" name="tel" value="<?php echo $generalUserDate->getTel(); ?>">
                </div>
            </label>

            </div>

            <label class="<?php if(!empty($generalUserDate->getErr_msAddr())) echo 'err'; ?>">
                <div class="profEdiUserProfile__address">
                    <div class="profEdiUserProfile__address-areaMsg">
                    <?php
                    if(!empty($generalUserDate->getErr_msAddr())) echo $generalUserDate->getErr_msAddr();
                    ?>
                    </div>
                    <div class="profEdiUserProfile__address-element">address</div>
                    <input class="profEdiUserProfile__address-output" type="text" name="address" value="<?php echo $generalUserDate->getAddr(); ?>">
                </div>
            </label>

        </section>

        <div class="profEdiUserProfile__bottom-wrap" style="margin-bottom:5px;">
            <!-- post内容を初期化したのち、マイページへ移動 -->
            <input type="submit" name='cancel-button' class="profEdiUserProfile__bottom-return" onclick="location.href='mypage.php'" value="変更を取り消す">
            <!-- 送信処理に沿って画面遷移 -->
            <input type="submit" name='update-button' class="profEdiUserProfile__bottom-next" value="変更する">
        </div>

        </form>



