{{-- @extends・・・親テンプレートを継承するもの --}}

{{-- @yield()・・・継承が出来ない。デフォルト値の設定は出来る。
    共通化せずにコンテンツview毎にダイナミックに変化するものやページ毎に設定するようなものは@yieldを使う
    (それぞれのページのタイトル、メインコンテンツなど--}}

{{-- @section()・・・@section〜＠sectionは継承が出来ます。
    @parentと書けば、親テンプレートの＠section()の内容が展開されます。(継承される)
    scriptタグの追加記述のほか、サイドバーをページによって出し分けや追加等をしたい場合に使える。 --}}

{{-- @sectionの閉じタグは親テンプレートの場合は@showで終わり小テンプレートの場合は
@endsectionもしくは@stopで終わるので注意。 --}}

{{-- サブビュー(@include)の使い方 --}}
{{-- ヘッダーやフッターなどただテンプレートを読み込みたいだけだったり、
小テンプレートに値を渡したいのならサブビューを使いましょう。 --}}
{{-- @includeは継承ができずデフォルトの値の設定も出来ません。 --}}
{{-- ただ唯一小テンプレに変数を渡すことが出来ます --}}

{{-- @component
    他にも@componentというコンポーネントを作るためのものもあります。
--}}
{{-- エラーメッセージであったり「コンポーネント」としてhtmlをパーツとして切り出して管理することが出来ます。 --}}
{{--
    5.5まで
    {{ csrf_field()}}
    5.6以降
    @csrf
    --}}

{{-- また、@errorといったものも使える様になりました。
    5.5まで
    @if($errors->has('username'))
        <div class="error">
            <p>{{$error->first('username')}}</p>
        </div>
    @endif
    --}}

{{-- 5.6以降
    @error('username')
        <div class="error">
            <p>{{ $message }}</p>
        </div>
    @enderror
    --}}

{{-- 3.4エスケープしたくない時
    FWで自動でphpのhtmlpecialchars関数が実行されエスケープされるため、エスケープして表示したくない時には下記の様に記述します
    {!! $val !!}
    --}}

@extends('layouts.welcome')

@section('title','マイページ')

@section('sidebar')
    {{-- @parent・・・親要素で指定した要素を差し込む事が出来る。 --}}
    @parent

    <p>メインのサイドバー(共通部分)に追加される個別の部分</p>
@endsection

@section('content')
    <p>メインコンテンツ</p>
@endsection

@section('footer')
    @parent

    <script src="bashboard.js"></script>
@endsection
