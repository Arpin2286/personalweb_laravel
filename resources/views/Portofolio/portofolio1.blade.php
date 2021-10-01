@extends('layout.main')

@section('content')
    <div class="caption-header text-center wow zoomInDown">
        <h1 class="fw-normal">My Product</h1>
        </div> 
        
    </div>

    <div class="vg-page page-about" id="about">
        <div class="main-content paddsection">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="container-main single-main">
                    <div class="col-md-12">
                        <div class="block-main mb-30">
                            <img src="assets/img/{{$img}}" class="img-responsive" alt="reviews2">
                            <div class="content-main single-post padDiv">
                                <div class="journal-txt">
                                <h3>{{$judul}}</h3>
                                </div>
                                <div class="post-meta">
                                <ul class="list-unstyled mb-0">
                                    <li class="author">by: {{$author}}</li>
                                    <li class="date">date: {{$date}}</li>
                                </ul>
                                </div>
                                <div class="mt-3">
                                    <p>{{$deskripsi}}</p>
                                    <h6 class="mt-3"><a href="{{$link}}" target="blank"> Mari lihat Produk Saya ></a></h6>
                            <div class="button mb-3">
                                <a class="btn btn-primary" href="/portofolio2" role="button">Next ></a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!--  </div> -->
        <!-- main content -->
    </div>
@endsection