@extends('adminlte::page')

@section('title', '一人でいけるモン。')

@section('content_header')
<h1>一人でいけるモン</h1>
@stop


@section('content')
<h2>関西</h2>
<div class="container">
    <p>三重県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($mies as $mie)
            <div class="col-sm"><a href="/travel/{{ $mie->id }}"><img src="{{ asset('storage/profiles/'. $mie->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>滋賀県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($shigas as $shiga)
            <div class="col-sm"><a href="/travel/{{ $shiga->id }}"><img src="{{ asset('storage/profiles/'. $shiga->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>京都府</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kyotos as $kyoto)
            <div class="col-sm"><a href="/travel/{{ $kyoto->id }}"><img src="{{ asset('storage/profiles/'. $kyoto->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>大阪府</p>
    <div class="row">
        <div class="d-flex">
            @foreach($osakas as $osaka)
            <div class="col-sm"><a href="/travel/{{ $osaka->id }}"><img src="{{ asset('storage/profiles/'. $osaka->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>兵庫県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($hyogos as $hyogo)
            <div class="col-sm"><a href="/travel/{{ $hyogo->id }}"><img src="{{ asset('storage/profiles/'. $hyogo->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>奈良県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($naras as $nara)
            <div class="col-sm"><a href="/travel/{{ $nara->id }}"><img src="{{ asset('storage/profiles/'. $nara->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>和歌山県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($wakayamas as $wakayama)
            <div class="col-sm"><a href="/travel/{{ $wakayama->id }}"><img src="{{ asset('storage/profiles/'. $wakayama->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>

@endsection