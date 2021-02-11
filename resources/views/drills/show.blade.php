@extends('layouts.app')

@section('content')
    <div id="app">
        {{-- デフォルトではVue.jsは有効になっている。 --}}
        {{-- example-componentはlaravelに入っているサンプルのコンポーネント --}}
        {{-- propsを渡す側の命名はハイフン繋ぎの方がメジャー --}}
        {{-- ハイフン繋ぎにした場合受け取る側のprops名はキャメルケースになる。 --}}
    <example-component
    title="{{__('Practice').'「'.$drill->title.'」'}}"
    :drill="{{$drill}}" category_name="{{ $drill->category_name }}"></example-component>
    </div>
@endsection
