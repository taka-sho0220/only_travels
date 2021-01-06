<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('main') }}">ひとりでいけるモン</a>
            </div>
            <div class="collapse navbar-collapse text-right" id="navigation">
            <a class="btn btn-info" href="{{ route('login') }}">
                Login
            </a>
            <a class="btn btn-success" href="{{ route('register') }}">
                Sign up
            </a>
            <a class="btn btn-danger" href="{{ route('guest') }}">
                ゲストログイン
            </a>
            </div>
        </div>
    </nav>
</body>