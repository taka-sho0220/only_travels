@extends('adminlte::page')

@section('title', '一人でいけるモン。')

@section('content_header')
<h1>一人でいけるモン</h1>
@stop


@section('content')
<h2>中国</h2>
<div class="container">
    <p>鳥取県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($tottoris as $tottori)
            <div class="col-sm"><a href="/travel/{{ $tottori->id }}"><img src="{{ asset('storage/profiles/'. $tottori->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>島根県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($shimanes as $shimane)
            <div class="col-sm"><a href="/travel/{{ $shimane->id }}"><img src="{{ asset('storage/profiles/'. $shimane->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>岡山県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($okayamas as $okayama)
            <div class="col-sm"><a href="/travel/{{ $okayama->id }}"><img src="{{ asset('storage/profiles/'. $okayama->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>広島県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($hiroshimas as $hiroshima)
            <div class="col-sm"><a href="/travel/{{ $hiroshima->id }}"><img src="{{ asset('storage/profiles/'. $hiroshima->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>山口県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($yamaguchis as $yamaguchi)
            <div class="col-sm"><a href="/travel/{{ $yamaguchi->id }}"><img src="{{ asset('storage/profiles/'. $yamaguchi->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>

@endsection