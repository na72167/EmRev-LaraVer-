<section class="intro">
    <div class="intro__wrap">
        <div class="intro__text">
            <div class="intro__text-title">
                @yield('Intro__Text_Title','メインタイトル表示エラー')<br>
                <span class="intro__text-sub">
                @yield('Intro__Text_Sub','サブタイトル表示エラー')
                </span>
            </div>
        </div>
        {{-- $_env内の情報に応じてロゴを切り替える様にする。 --}}
        <img class="intro__icon" src="{{ asset('img/docs.png') }}" alt="logo">
    </div>
</section>
