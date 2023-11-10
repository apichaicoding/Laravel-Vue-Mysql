@extends('layout')
@section('title')
    เกี่ยวกับเรา
@endsection
@section('content')
    <h2>เกี่ยวกับเรา</h2>
    <hr>
    <p>ผู้พัฒนาระบบ : {{$name}}</p>
    <p>วันเริ่มต้นโปรเจคต์ : {{$date}}</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia accusantium nulla aliquam eos iste cumque,
        veritatis fugit cum expedita rerum commodi, quibusdam assumenda obcaecati laudantium vitae! Officia iusto vitae hic.
    </p>
@endsection
