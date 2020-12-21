@include('mains.header')

<body>
    @include('mains.nav')

    <body>

        <div class="container">
            <div class="row mt3 presentation">
                <div class="centered">
                <img class="camera aligncenter" src="{{ asset('img/only.jpg') }}" alt="">
                    <h1>CONTACT US</h1>
                    <hr>
                </div>
            </div>
            <!-- /row -->

        </div>

        <div class="container">
            <div class="row presentation">
                <div class="col-lg-2 col-md-2">
                </div>
                <div class="col-lg-12 col-md-12 contact-form">
                @if(session('err_msg'))
                    <p class="text-success">{{ session('err_msg') }}</p>
                @endif
                <form action="{{ route('mail') }}" method="post" class="needs-validation" onSubmit="return checkSubmit()" enctype='multipart/form-data' novalidate>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @csrf
                        <div class="form-group">
                            <input type="name" name="name" value="{{ old('name') }}" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" placeholder="名前" autofocus required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="email" name="email"  value="{{ old('email') }}" class="form-control @if($errors->has('email')) is-invalid @endif" id="email" placeholder="メールアドレス" autofocus required>
                            @if($errors->has('email'))
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" value="{{ old('subject') }}" class="form-control @if($errors->has('subject')) is-invalid @endif" id="subject" placeholder="件名" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                            @if($errors->has('subject'))
                                <div class="invalid-feedback">{{ $errors->first('subject') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <textarea name="message" class="form-control @if($errors->has('message')) is-invalid @endif" id="message" placeholder="お問い合わせ内容を記載してください" rows="5" required>{{ old('message') }}</textarea>
                            @if($errors->has('message'))
                                <div class="invalid-feedback">{{ $errors->first('message') }}</div>
                            @endif
                        </div>
                        <div class="form-send">
                            <button type="submit" class="btn btn-lg btn-transparent">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /row -->
        </div>
        <section id="end" class="section-footer">
            @include('mains.conta-foo')
        </section>

        <!-- JavaScript Libraries -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/modernizr.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/easing.min.js') }}"></script>
        <script src="{{ asset('js/cubeportfolio.js') }}"></script>
        <script src="{{ asset('js/classie.js') }}"></script>
        <script src="{{ asset('js/fullpage-menu.js') }}"></script>
        <script src="{{ asset('js/superslides.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

    </body>