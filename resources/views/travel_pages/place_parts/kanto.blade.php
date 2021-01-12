@extends('adminlte::page')

@section('title', '一人でいけるモン。')

@section('content_header')
<h1>一人でいけるモン</h1>
@stop


@section('content')
<h2>関東</h2>
<div class="container">
    <p>茨城県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($ibarakis as $ibaraki)
            <div class="col-sm"><a href="/travel/{{ $ibaraki->id }}"><img src="{{ asset('storage/profiles/'. $ibaraki->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>栃木県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($tochigis as $tochigi)
            <div class="col-sm"><a href="/travel/{{ $tochigi->id }}"><img src="{{ asset('storage/profiles/'. $tochigi->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>群馬県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($gunmas as $gunma)
            <div class="col-sm"><a href="/travel/{{ $gunma->id }}"><img src="{{ asset('storage/profiles/'. $gunma->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>埼玉県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($saitamas as $saitama)
            <div class="col-sm"><a href="/travel/{{ $saitama->id }}"><img src="{{ asset('storage/profiles/'. $saitama->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>千葉県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($chibas as $chiba)
            <div class="col-sm"><a href="/travel/{{ $chiba->id }}"><img src="{{ asset('storage/profiles/'. $chiba->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>東京都</p>
    <div class="row">
        <div class="d-flex">
            @foreach($tokyos as $tokyo)
            <div class="col-sm"><a href="/travel/{{ $tokyo->id }}"><img src="{{ asset('storage/profiles/'. $tokyo->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>神奈川県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kanagawas as $kanagawa)
            <div class="col-sm"><a href="/travel/{{ $kanagawa->id }}"><img src="{{ asset('storage/profiles/'. $kanagawa->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endforeach
        </div>
    </div>
</div>

@endsection