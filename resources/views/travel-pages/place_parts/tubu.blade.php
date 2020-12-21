@extends('adminlte::page')

@section('title', '一人でいけるモン。')

@section('content_header')
<h1>一人でいけるモン</h1>
@stop


@section('content')
<h2>中部</h2>
<div class="container">
    <p>新潟県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($nigatas as $nigata)
            <div class="col-sm"><a href="/travel/{{ $nigata->id }}"><img src="{{ asset('storage/profiles/'. $nigata->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>富山県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($toyamas as $toyama)
            <div class="col-sm"><a href="/travel/{{ $toyama->id }}"><img src="{{ asset('storage/profiles/'. $toyama->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>石川県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($ishikawas as $ishikawa)
            <div class="col-sm"><a href="/travel/{{ $ishikawa->id }}"><img src="{{ asset('storage/profiles/'. $ishikawa->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>福井県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($hukuis as $hukui)
            <div class="col-sm"><a href="/travel/{{ $hukui->id }}"><img src="{{ asset('storage/profiles/'. $hukui->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>山梨県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($yamanashis as $yamanashi)
            <div class="col-sm"><a href="/travel/{{ $yamanashi->id }}"><img src="{{ asset('storage/profiles/'. $yamanashi->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>長野県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($naganos as $nagano)
            <div class="col-sm"><a href="/travel/{{ $nagano->id }}"><img src="{{ asset('storage/profiles/'. $nagano->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>岐阜県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($gihus as $gihu)
            <div class="col-sm"><a href="/travel/{{ $gihu->id }}"><img src="{{ asset('storage/profiles/'. $gihu->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>静岡県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($shizuokas as $shizuoka)
            <div class="col-sm"><a href="/travel/{{ $shizuoka->id }}"><img src="{{ asset('storage/profiles/'. $shizuoka->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>愛知県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($aichis as $aichi)
            <div class="col-sm"><a href="/travel/{{ $aichi->id }}"><img src="{{ asset('storage/profiles/'. $aichi->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
@endsection