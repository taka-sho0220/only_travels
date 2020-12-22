@include('mains.header')

<body>
    @include('mains.nav')
    <section id="photostack-1" class="photostack photostack-start">
        <div>
            <figure>
                <a href="#" class="photostack-img"><img src="{{asset('storage/profiles/hokkaidou.jpg') }}" alt="img01" /></a>
                <figcaption>
                    <h2 class="photostack-title">Hokkaidou</h2>
                </figcaption>
            </figure>
            <figure>
                <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/date.jpg') }}" alt="img02" /></a>
                <figcaption>
                    <h2 class="photostack-title">Miyagi</h2>
                </figcaption>
            </figure>
            <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/yamagata.jpg') }}" alt="img12" /></a>
                    <figcaption>
                        <h2 class="photostack-title">Yamagata</h2>
                    </figcaption>
                </figure>
            <figure>
                <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/ibaraki.jpg') }}" alt="img03" /></a>
                <figcaption>
                    <h2 class="photostack-title">Ibaraki</h2>
                </figcaption>
            </figure>
            <figure>
                <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/totigi.jpg') }}" alt="img04" /></a>
                <figcaption>
                    <h2 class="photostack-title">Totigi</h2>
                </figcaption>
            </figure>
            <figure>
                <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/yamanasi.jpg') }}" alt="img05" /></a>
                <figcaption>
                    <h2 class="photostack-title">Ymanasi</h2>
                </figcaption>
            </figure>
            <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/gunma.jpg') }}" alt="img13" /></a>
                    <figcaption>
                        <h2 class="photostack-title">Gunma</h2>
                    </figcaption>
                </figure>
            <figure>
                <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/kana.jpg') }}" alt="img06" /></a>
                <figcaption>
                    <h2 class="photostack-title">Kanagawa</h2>
                </figcaption>
            </figure>
            <figure data-dummy>
                <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/tokyotower.jpg') }}" alt="img07" /></a>
                <figcaption>
                    <h2 class="photostack-title">Tokyo</h2>
                </figcaption>
            </figure>
            <figure data-dummy>
                <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/kobe.JPG') }}" alt="img08" /></a>
                <figcaption>
                    <h2 class="photostack-title">Hyogo</h2>
                </figcaption>
            </figure>
            <figure data-dummy>
                <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/DSC_0180.JPG') }}" alt="img10" /></a>
                <figcaption>
                    <h2 class="photostack-title">Hiroshima</h2>
                </figcaption>
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/IMG_0815.JPG') }}" alt="img09" /></a>
                    <figcaption>
                        <h2 class="photostack-title">Kyoto</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/kouchi.jpg') }}" alt="img11" /></a>
                    <figcaption>
                        <h2 class="photostack-title">Kochi</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/hukuoka.jpg') }}" alt="img14" /></a>
                    <figcaption>
                        <h2 class="photostack-title">Hukuoka</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/kumamoto.jpg') }}" alt="img15" /></a>
                    <figcaption>
                        <h2 class="photostack-title">Kumamoto</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="{{ asset('storage/profiles/okinawa.jpg') }}" alt="img16" /></a>
                    <figcaption>
                        <h2 class="photostack-title">Okinawa</h2>
                    </figcaption>
                </figure>
        </div>
    </section>
    <div class="container">
        <div class="row mt presentation">
            <img class="camera aligncenter" src="{{ asset('img/only.jpg') }}" alt="">
            <h1 class="centered">ひとりでいけるモンとは？</h1>
            <hr>

            <div class="col-lg-4 col-md-4">
                <h3>Only one travel</h3>
            </div>

            <div class="col-lg-4 col-md-4">
                <p>孤独を愛し孤独に愛された者たちの一人旅口コミサイトとなります。</p>
                <p>会員になると口コミや旅行先での写真をで見放題。</p>
            </div>

            <div class="col-lg-4 col-md-4">
                <p>全国の旅好きの猛者たちから集まる情報から、もう行く場所には困らない！</p>
                <p>今こそ、孤独の猛者たちよ、立ち上がれ！！</p>
                <a href="{{ route('login') }}" class="stretched-link">ログインして始める</a>
            </div>
        </div>
        <div id="grid-container" class="cbp-l-grid-fullScreen">
            <ul>
                <li class="cbp-item identity">
                    <a class="cbp-caption cbp-lightbox" data-title="Image" href="storage/profiles/tokyotower.jpg">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{ asset('storage/profiles/tokyotower.jpg') }}" alt="" class="img-responsive">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Tokyo tower</div>
                                    <div class="cbp-l-caption-desc">by tanishi</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end:Item -->
                <li class="cbp-item web-design">
                    <a class="cbp-caption cbp-lightbox" data-title="Image" href="storage/profiles/totigi.jpg">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{ asset('storage/profiles/totigi.jpg') }}" alt="" class="img-responsive">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Totigi</div>
                                    <div class="cbp-l-caption-desc">by riberibe</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end:Item -->
                <li class="cbp-item graphic identity">
                    <a class="cbp-caption cbp-lightbox" data-title="Image" href="storage/profiles/IMG_0815.JPG">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{ asset('storage/profiles/IMG_0815.JPG') }}" alt="" class="img-responsive">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Kyoto</div>
                                    <div class="cbp-l-caption-desc">by taka</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end:Item -->
                <li class="cbp-item graphic">
                    <a class="cbp-caption cbp-lightbox" data-title="Image" href="storage/profiles/gunma.jpg">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{ asset('storage/profiles/gunma.jpg') }}" alt="" class="img-responsive">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Gunma Hotspring</div>
                                    <div class="cbp-l-caption-desc">by silentsilent</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end:Item -->
                <li class="cbp-item identity">
                    <a class="cbp-caption cbp-lightbox" data-title="Image" href="storage/profiles/kobe.jpg">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{ asset('storage/profiles/kobe.jpg') }}" alt="" class="img-responsive">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Koube China</div>
                                    <div class="cbp-l-caption-desc">by taka</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end:Item -->
                <li class="cbp-item graphic">
                    <a class="cbp-caption cbp-lightbox" data-title="Image" href="storage/profiles/kouchi.jpg">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{ asset('storage/profiles/kouchi.jpg') }}" alt="" class="img-responsive">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Kouchi Sakamoto</div>
                                    <div class="cbp-l-caption-desc">by whiteshirt</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end:Item -->
                <li class="cbp-item web-design">
                    <a class="cbp-caption cbp-lightbox" data-title="Image" href="storage/profiles/hukuoka.jpg">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{ asset('storage/profiles/hukuoka.jpg') }}" alt="" class="img-responsive">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Hukuoka shrine</div>
                                    <div class="cbp-l-caption-desc">by hukuokan</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end:Item -->
                <li class="cbp-item identity">
                    <a class="cbp-caption cbp-lightbox" data-title="Image" href="storage/profiles/shisa.jpg">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{ asset('storage/profiles/shisa.jpg') }}" alt="" class="img-responsive">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Okinawa shisa</div>
                                    <div class="cbp-l-caption-desc">by shisa</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <section id="end" class="section-footer">
            @include('mains.footer')
        </section>

        <!-- JavaScript Libraries -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/modernizr.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/easing.min.js') }}"></script>
        <script src="{{ asset('js/cubeportfolio.js') }}"></script>
        <script src="{{ asset('js/classie.js') }}"></script>
        <script src="{{ asset('js/fullpage-menu.js') }}"></script>
        <script src="{{ asset('js/photostack.js') }}"></script>
        <script src="{{ asset('js/superslides.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>