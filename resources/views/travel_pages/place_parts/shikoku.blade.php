@extends('adminlte::page')

@section('title', '一人でいけるモン。')

@section('content_header')
<h1>一人でいけるモン</h1>
@stop


@section('content')
<h2>四国</h2>
<div class="container">
    <p>徳島県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($tokushimas as $tokushima)
            <div class="col-sm"><a href="/travel/{{ $tokushima->id }}"><img src="{{ asset('storage/profiles/'. $tokushima->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>香川県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kagawas as $kagawa)
            <div class="col-sm"><a href="/travel/{{ $kagawa->id }}"><img src="{{ asset('storage/profiles/'. $kagawa->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>愛媛県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($ehimes as $ehime)
            <div class="col-sm"><a href="/travel/{{ $ehime->id }}"><img src="{{ asset('storage/profiles/'. $ehime->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>高知県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kouchis as $kouchi)
            <div class="col-sm"><a href="/travel/{{ $kouchi->id }}"><img src="{{ asset('storage/profiles/'. $kouchi->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
@endsection