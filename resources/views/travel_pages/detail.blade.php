@extends('adminlte::page')


@section('title', '一人でいけるモン。')

@section('content_header')
<h1>一人でいけるモン（詳細）</h1>
@stop
<style>
    table,
    thead,
    tr,
    th,
    td {
        width: 100%;
        display: block;
    }
</style>

@section('content')
<div class="container">
    @if(session('err_msg'))
    <p class="text-danger">{{ session('err_msg') }}</p>
    @endif
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>ニックネーム</th>
                <td>{{ $travel->name }}</td>
                <th>投稿日</th>
                <td>{{ $travel->updated_at }}</td>
                <th>場所</th>
                <td>{{ $travel->place }}</td>
                <th>性別</th>
                <td>{{ $travel->gender }}</td>
                <th>年齢層</th>
                <td>{{ $travel->age }}</td>
                <th>評価</th>
                <td>{{ $travel->evaluation }}</td>
                <th>感想</th>
                <td>{{ $travel->impressions }}</td>
                <th>写真</th>
                <td><img src="{{ asset('storage/profiles/'. $travel->photos) }}" class="w-75"></td>
            </tr>
        </thead>
    </table>
    <a class="btn btn-secondary" href="{{ route('home') }}">戻る</a>
</div>
</div>
@endsection