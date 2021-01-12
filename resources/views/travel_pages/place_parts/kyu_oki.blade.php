@extends('adminlte::page')

@section('title', '一人でいけるモン。')

@section('content_header')
<h1>一人でいけるモン</h1>
@stop


@section('content')
<h2>九州、沖縄</h2>
<div class="container">
    <p>福岡県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($hukuokas as $hukuoka)
            <div class="col-sm"><a href="/travel/{{ $hukuoka->id }}"><img src="{{ asset('storage/profiles/'. $hukuoka->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>佐賀県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($sagas as $saga)
            <div class="col-sm"><a href="/travel/{{ $saga->id }}"><img src="{{ asset('storage/profiles/'. $saga->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>長崎県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($nagasakis as $nagasaki)
            <div class="col-sm"><a href="/travel/{{ $nagasaki->id }}"><img src="{{ asset('storage/profiles/'. $nagasaki->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>熊本県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kumamotos as $kumamoto)
            <div class="col-sm"><a href="/travel/{{ $kumamoto->id }}"><img src="{{ asset('storage/profiles/'. $kumamoto->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>大分県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($oitas as $oita)
            <div class="col-sm"><a href="/travel/{{ $oita->id }}"><img src="{{ asset('storage/profiles/'. $oita->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>宮崎県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($miyazakis as $miyazaki)
            <div class="col-sm"><a href="/travel/{{ $miyazaki->id }}"><img src="{{ asset('storage/profiles/'. $miyazaki->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>鹿児島県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kagoshimas as $kagoshima)
            <div class="col-sm"><a href="/travel/{{ $kagoshima->id }}"><img src="{{ asset('storage/profiles/'. $kagoshima->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>沖縄県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($okinawas as $okinawa)
            <div class="col-sm"><a href="/travel/{{ $okinawa->id }}"><img src="{{ asset('storage/profiles/'. $okinawa->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>

@endsection