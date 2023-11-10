@extends('layouts.app')
@section('title')
    หน้าแรกของเว็บไซต์
@endsection
@section('content')
    <h2 class="text text-danger">บทความล่าสุด</h2>
    <div id="vueapp"></div>
    <hr>
    @foreach ($blogs as $item)
        <h2>{{ $item->title }}</h2>
        <p>{!! Str::limit($item->content, 100) !!}</p>
        <a href="/detail/{{ $item->id }}">อ่านเพิ่มเติม</a>
        <hr>
    @endforeach
@endsection
