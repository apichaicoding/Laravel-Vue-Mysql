@extends('layouts.app')
@section('title')
    {{ $blog->title }}
@endsection
@section('content')
    <h2>{{ $blog->title }}</h2>
    <hr>
    {!! $blog->content !!}
@endsection
