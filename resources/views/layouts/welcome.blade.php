<html>
    <head>
        {{-- 第一引数が@section内で扱う為のkey。第二引数がデフォルト値 --}}
        <title> Laravel | @yield('title','Home')</title>
    </head>
    <body>
        @section('sidebar')
            <p>メインのサイドバー(共通部分)</p>
        @show
        <div id='container'>
            @yield('content')
        </div>

        @section('footer')
            <script src="app.js"></script>
        @show
    </body>
</html>
