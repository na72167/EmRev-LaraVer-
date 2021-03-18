@extends('common.app')

@section('title','RegistCompanyList')

@section('RegistCompanyList')

    <!-- ここの要素はBEMの規則違反になっている -->
    <section class="middleElement" style="min-height: 1800px;">

        {{-- ====検索部分==== --}}
        <section class="rigisRigisterReviewListSearch">
            <h1 class="rigisRigisterReviewListSearch__title">Company Search</h1>
            <form class="rigisRigisterReviewListSearch__form" method="POST">
                @csrf
                <div class="rigisRigisterReviewListSearch__inputContentStyle">
                    <h1 class="rigisRigisterReviewListSearch__inputName">会社名</h1>
                    <input type="text" class="rigisRigisterReviewListSearch__inputStyle" name="company_name" placeholder="入力してください" value="{{ $title = session()->get('title') }}" autocomplete="title">
                </div>

                <div class="rigisRigisterReviewListSearch__inputContentStyle">
                    <h1 class="rigisRigisterReviewListSearch__inputName">代表者名</h1>
                    <input type="text" class="rigisRigisterReviewListSearch__inputStyle" name="representative" placeholder="入力してください" value="{{ $representative = session()->get('representative') }}" autocomplete="representative">
                </div>

                <div class="rigisRigisterReviewListSearch__inputContentStyle">
                    <h1 class="rigisRigisterReviewListSearch__inputName">所在地</h1>
                    <input type="text" class="rigisRigisterReviewListSearch__inputStyle" name="location" placeholder="入力してください" value="{{ $location = session()->get('location') }}" autocomplete="location">
                </div>

                <div class="rigisRigisterReviewListSearch__inputContentStyle">
                    <h1 class="rigisRigisterReviewListSearch__inputName">業界</h1>
                    <input type="text" class="rigisRigisterReviewListSearch__inputStyle" name="industry" placeholder="入力してください" value="{{ $industry = session()->get('industry') }}" autocomplete="industry">
                </div>

                <div class="rigisRigisterReviewListSearch__inputContentStyle">
                    <h1 class="rigisRigisterReviewListSearch__inputName">設立年度</h1>
                    <input class="rigisRigisterReviewListSearch__inputStyle" name="year_of_establishment" placeholder="入力してください">
                    <input type="text" class="rigisRigisterReviewListSearch__inputStyle" name="year_of_establishment" placeholder="入力してください" value="{{ $year_of_establishment = session()->get('year_of_establishment') }}" autocomplete="year_of_establishment">
                </div>

                <div class="rigisRigisterReviewListSearch__inputContentStyle">
                    <h1 class="rigisRigisterReviewListSearch__inputName">上場年</h1>
                    <input type="text" class="rigisRigisterReviewListSearch__inputStyle" name="listed_year" placeholder="入力してください" value="{{ $listed_year = session()->get('listed_year') }}" autocomplete="listed_year">
                </div>

                <div class="rigisRigisterReviewListSearch__inputContentStyle">
                    <h1 class="rigisRigisterReviewListSearch__inputName">従業員数</h1>
                    <input type="text" class="rigisRigisterReviewListSearch__inputStyle" name="number_of_employees" placeholder="入力してください" value="{{ $number_of_employees = session()->get('number_of_employees') }}" autocomplete="number_of_employees">
                </div>

                <div class="rigisRigisterReviewListSearch__inputContentStyle">
                    <h1 class="rigisRigisterReviewListSearch__inputName">口コミ数</h1>
                    <input class="rigisRigisterReviewListSearch__inputStyle" name="number_of_reviews" placeholder="入力してください">
                    <input type="text" class="rigisRigisterReviewListSearch__inputStyle" name="number_of_reviews" placeholder="入力してください" value="{{ $number_of_reviews = session()->get('number_of_reviews') }}" autocomplete="number_of_reviews">
                </div>

                <div class="rigisRigisterReviewListSearch__inputContentStyle">
                    <h1 class="rigisRigisterReviewListSearch__inputName">平均年収</h1>
                    <div class="rigisRigisterReviewListSearch__betweenStyleWrap">
                    <input class="rigisRigisterReviewListSearch__betweenStyle" name="average_annual_income" placeholder="入力してください">
                    <div class="rigisRigisterReviewListSearch__betweenStyleHoge">~</div>
                    <input class="rigisRigisterReviewListSearch__betweenStyle" placeholder="入力してください">
                    </div>
                </div>


                <div class="rigisRigisterReviewListSearch__inputContentStyle">
                    <h1 class="rigisRigisterReviewListSearch__inputName">平均年齢</h1>
                    <div class="rigisRigisterReviewListSearch__betweenStyleWrap">
                    <input class="rigisRigisterReviewListSearch__betweenStyle" name="average_age" placeholder="入力してください">
                    <div class="rigisRigisterReviewListSearch__betweenStyleHoge">~</div>
                    <input class="rigisRigisterReviewListSearch__betweenStyle" placeholder="入力してください">
                    </div>
                </div>


                <!-- <div class="rigisRigisterReviewListSearch__inputContentStyle">
                    <h1 class="rigisRigisterReviewListSearch__inputName">並び替え順序</h1>
                    <input class="rigisRigisterReviewListSearch__inputStyle" placeholder="入力してください">
                </div> -->

                    <input type="submit" class="rigisRigisterReviewListSearch__bottomStyle" name="search" value="検索する">
                </form>
            </section>



            {{-- =======ソートは後回し======= --}}
            <section class="rigisRigisterReviewListSorting">
                <h1 class="rigisRigisterReviewListSorting__title">Company Sorting</h1>
                <form class="rigisRigisterReviewListSorting__form">

                <div class="rigisRigisterReviewListSorting__inputContentStyle">
                    <h1 class="rigisRigisterReviewListSorting__inputName">並び替え項目</h1>
                    <input class="rigisRigisterReviewListSorting__inputStyle" placeholder="入力してください">
                </div>
                <div class="rigisRigisterReviewListSorting__inputContentStyle">
                    <h1 class="rigisRigisterReviewListSorting__inputName">並び替え順序</h1>
                    <input class="rigisRigisterReviewListSorting__inputStyle" placeholder="入力してください">
                </div>
                <bottom class="rigisRigisterReviewListSorting__bottomStyle">並び替えをする</bottom>
            </form>
        </section>


        {{-- ====会社情報出力箇所==== --}}

        <div class="rigisRigisterReviewList">
            <div class="rigisRigisterReviewList__header">
            <h1 class="rigisRigisterReviewList__title">Register Review List</h1>

            <!-- $companyData内のtotalキー内のバリューを出力 -->
            <h3>検索結果:<span>{{ $serchResult }}</span>件</h3>
            </div>

            @foreach($companyData['compDate'] as $key => $val)
                <div class="rigisRigisterReviewList__mainContent">

                    <div class="rigisRigisterReviewList__imgComInfoWrap">
                        <!-- 個別の写真を表示 -->
                        <div class="rigisRigisterReviewList__imgStyle">
                        <!-- alt属性はアプリ使用者が画像を表示できない環境やブラウザを使っている際に
                        代わりの処理を走らせる物 -->
                        <!-- 今回の場合だと会社名を表示させる。 -->
                        <img class="rigisRigisterReviewList__img"


                        {{-- ERLr-7-レビュー投稿会社機能の一覧表示・検索機能の実装を再開する際はここから --}}


                        src="<?php echo etc::showImg(etc::sanitize($val['pic1'])); ?>"
                        alt="<?php echo etc::sanitize($val['name']); ?>">
                        </div>

                        <div class="rigisRigisterReviewList__companyWrap">
                        <div class="rigisRigisterReviewList__industryClassification">業界分類:<span><?php echo etc::sanitize($val['industry']); ?></span></div>
                        <div class="rigisRigisterReviewList__companyName">会社名:<span><?php echo etc::sanitize($val['company_name']); ?></span></div>
                        <div class="rigisRigisterReviewList__location">所在地:<span><?php echo etc::sanitize($val['location']); ?></span></div>
                        </div>
                        <div class="rigisRigisterReviewList__reviewLink">>この会社のレビュー数(<span><?php echo etc::sanitize($val['number_of_reviews']); ?></span>)件</div>
                    </div>

                    <div class="rigisRigisterReviewList__userDetail">
                        <div class="rigisRigisterReviewList__name">(総合的な会社の印象が出力される予定)</div>
                        <div class="rigisRigisterReviewList__dmIncumbentWrap">
                        <div class="rigisRigisterReviewList__age">投稿日:<span>0000/00/00</span></div>
                        <div class="rigisRigisterReviewList__dm">総評:<span>サンプルサンプルサンプルサンプル<br>サンプルサンプルサンプルサンプルサ...</span><h1 class="rigisRigisterReviewList__userProfLink">このレビューの詳細を見る</h1></div>
                        </div>
                        <div class="rigisRigisterReviewList__userNameAgeFavoliteWrap">
                        <div class="rigisRigisterReviewList__userNameAgeWrap">:<span>ユーザー名</span>さん<span>〇〇</span>歳</div>
                        <div class="rigisRigisterReviewList__favorite">☆</div>
                        </div>
                    </div>

                    <!-- 参考コードのappendGetParam()について調べる。 -->
                    <!-- ここから選択した会社のID情報をreviewRegister-jrへ送信する。 -->
                    <form method="post">
                        <input type="hidden" name="company_id" value=<?php echo $val['id'] ?>>
                        <input class="#" type="submit" value="この会社のレビューをする">
                    </form>

                </div>
            @endforeach

            <!-- ここまで -->
            <div class="rigisRigisterReviewList__pageTransition">
            <div class="rigisRigisterReviewList__pageTransition-contentWrap">
                <span class="rigisRigisterReviewList__pageTransition-leftArrow">◁</span>
                <div class="rigisRigisterReviewList__pageTransition-guideNumber">12345</div>
                <span class="rigisRigisterReviewList__pageTransition-rightArrow">▷</span>
            </div>
            </div>
        </div>
    </section>

@endsection
