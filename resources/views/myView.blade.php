@extends("layouts.main")
@section("title","標題列")
@section("sidebar")
    @parent

    <h2>這是子視圖的側邊攔</h2>
    @endsection
@section("content_1")
    <h2>測試子試圖的內容: {{$from_server}}}</h2>
    目前的日期:{{date("Y-M-D")}}
    @endsection