@extends('layouts.app')

@section('tittle')
    {{ $title }}
@endsection


@section('content')
    <div class="page-h promotion">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3> OUR PRODUCT </h3>
                </div>
            </div>
        </div>
    </div>

        

    <div class="filter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="filter-controls controls">
                        <li class="filter active" data-filter="mix">All</li>
                        <li class="filter" data-filter="category-1">Belajar</li>
                        <li class="filter" data-filter="category-2">Bermain</li>
                        <li class="filter" data-filter="category-3">Responsive</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                <div id="Grid">
                <div class="mix category-1 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{ asset('style/images/p1.jpg') }}" alt="">
                        <div class="overlay-p">
                            <a href="{{ asset('style/images/p1.jpg') }}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>Marbel Premium</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-2 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{ asset('style/images/p2.jpg') }}" alt="">
                        <div class="overlay-p">
                            <a href="{{ asset('style/images/p2.jpg') }}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>Marbel Piano</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-3 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{ asset('style/images/p3.jpg') }}" alt="">
                        <div class="overlay-p">
                            <a href="{{ asset('style/images/p3.jpg') }}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>Marbel Teliti</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-2 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{ asset('style/images/p4.jpg') }}" alt="">
                        <div class="overlay-p">
                            <a href="{{ asset('style/images/p4.jpg') }}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>Marbel Belajar</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-1 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{ asset('style/images/p5.jpg') }}" alt="">
                        <div class="overlay-p">
                            <a href="{{ asset('style/images/p5.jpg') }}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>Marbel Juz Amma</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-3 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{ asset('style/images/p6.jpg') }}" alt="">
                        <div class="overlay-p">
                            <a href="{{ asset('style/images/p6.jpg') }}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>Marbel Doa</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-2 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{ asset('style/images/p7.jpg') }}" alt="">
                        <div class="overlay-p">
                            <a href="{{ asset('style/images/p7.jpg') }}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>Marbel Preschool</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-1 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{ asset('style/images/p8.jpg') }}" alt="">
                        <div class="overlay-p">
                            <a href="{{ asset('style/images/p8.jpg') }}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>Marbel Dinosaurus</h4>
                        <span>Creative</span>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fourth-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>TIDAK MENEMUKAN BARANGMU?</h2>
                    <a href="/contact">(CARI DISINI YUK)</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <p>by Kelompok Anjani & Bella</p>
@endsection