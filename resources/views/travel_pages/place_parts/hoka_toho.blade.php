@extends('adminlte::page')

@section('title', '一人でいけるモン。')

@section('content_header')
<h1>一人でいけるモン</h1>
@stop


@section('content')

<h2>北海道,東北</h2>

<div class="container">
    <p>北海道</p>
    <div class="row">
        <div class="d-flex">
            @foreach($hokkaidous as $hokkaidou)
            <div class="col-sm"><a href="/travel/{{ $hokkaidou->id }}"><img src="{{ asset('storage/profiles/'. $hokkaidou->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>青森県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($aomoris as $aomori)
            <div class="col-sm"><a href="/travel/{{ $aomori->id }}"><img src="{{ asset('storage/profiles/'. $aomori->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>岩手県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($iwates as $iwate)
            <div class="col-sm"><a href="/travel/{{ $iwate->id }}"><img src="{{ asset('storage/profiles/'. $iwate->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>宮城県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($miyagis as $miyagi)
            <div class="col-sm"><a href="/travel/{{ $miyagi->id }}"><img src="{{ asset('storage/profiles/'. $miyagi->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>秋田県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($akitas as $akita)
            <div class="col-sm"><a href="/travel/{{ $akita->id }}"><img src="{{ asset('storage/profiles/'. $akita->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>山形県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($yamagatas as $yamagata)
            <div class="col-sm"><a href="/travel/{{ $yamagata->id }}"><img src="{{ asset('storage/profiles/'. $yamagata->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>福島県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($hukushimas as $hukushima)
            <div class="col-sm"><a href="/travel/{{ $hukushima->id }}"><img src="{{ asset('storage/profiles/'. $hukushima->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>

@endsection