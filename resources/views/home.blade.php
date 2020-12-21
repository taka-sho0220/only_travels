@extends('adminlte::page')

@section('title', '一人でいけるモン。')

@section('content_header')
<h1>一人でいけるモン</h1>
@stop


@section('content')

<body>
    @if(session('err_msg'))
        <p class="text-danger">{{ session('err_msg') }}</p>
    @endif
    <table id="foo-table" class="table table-bordered">
        <thead>
            <tr>
                <th>ニックネーム</th>
                <th>場所</th>
                <th>年齢</th>
                <th>評価</th>
                <th>投稿日</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($travels as $travel)
            <tr>
                <td><a href="/travel/{{ $travel->id }}">{{ $travel->name }}</a></td>
                <td>{{ $travel->place }}</td>
                <td>{{ $travel->age }}</td>
                <td>{{ $travel->evaluation }}</td>
                <td>{{ $travel->updated_at }}</td>
                <td><button type="button" class="btn btn-primary" onclick="location.href='/travel/edit/{{ $travel->id }}'">編集</button></td>
                <form method="post" action="{{ route('delete', $travel->id) }}" onSubmit="return checkDelete()">
                    @csrf
                    <td><button type="submit" class="btn btn-danger" onclick=>削除</button></td>
                </form>
            </tr>
            @endforeach
    </table>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $("#foo-table").DataTable({
                lengthChange: false,
                info: false,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Japanese.json",
            }
        });
        function checkDelete() {
            if (window.confirm('削除してよろしいですか？')) {
                return true;
            } else {
                return false;
            }
        }
    </script>
    @endsection