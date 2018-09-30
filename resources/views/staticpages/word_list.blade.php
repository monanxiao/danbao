@extends('layouts.app')
@section('title','首页')
@section('content')

@foreach($mb_word as $mv)
    <a href="{{ URL('') . '/' . $mv }}" > {{ trim(strrchr($mv, '/'),'/') }} </a>   <br>
@endforeach

@endsection
