@extends('layouts.app')
@section('title', 'INDOWAKARYA SOLUSI')

@section('content')

@include('layouts.carousel')

<div class="container-home">
    <div class="row col-md-12 container product-home">
        <center class="pb-3"><h1>LAYANAN KAMI</h1></center>

        <div class="responsive-slider">
            @include('layouts.swiper-product')
        </div>

        <div class="col-md-4 pb-3 prodhom">
            <a href="{{ route('product.show') }}">
                <div class="container-product-home">
                    <div class="image">
                        <div class="logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum esse commodi eveniet libero asperiores cupiditate quo velit eligendi laudantium perspiciatis!</p>
                        <div class="slide-up">
                            <h1>info selengkapnya <i class="fa-solid fa-angles-up"></i></h1>
                        </div>
                    </div>
                    <div class="overlay">
                        <div class="detail-logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="detail">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt molestiae blanditiis ex beatae itaque tenetur voluptas enim voluptates incidunt doloribus?</p>
                        <a href="{{ route('product.show') }}" class="btn btn-light">Pelajari Selengkapnya <i class="fa-solid fa-angles-right"></i> </a>
                    </div>
                </div>

            </a>

        </div>

        <div class="col-md-4 pb-3 prodhom">
            <a href="{{ route('product.show') }}">
                <div class="container-product-home">
                    <div class="image">
                        <div class="logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum esse commodi eveniet libero asperiores cupiditate quo velit eligendi laudantium perspiciatis!</p>
                        <div class="slide-up">
                            <h1>info selengkapnya <i class="fa-solid fa-angles-up"></i></h1>
                        </div>
                    </div>
                    <div class="overlay">
                        <div class="detail-logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="detail">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt molestiae blanditiis ex beatae itaque tenetur voluptas enim voluptates incidunt doloribus?</p>
                        <a href="{{ route('product.show') }}" class="btn btn-light">Pelajari Selengkapnya <i class="fa-solid fa-angles-right"></i> </a>
                    </div>
                </div>

            </a>

        </div>

        <div class="col-md-4 pb-3 prodhom">
            <a href="{{ route('product.show') }}">
                <div class="container-product-home">
                    <div class="image">
                        <div class="logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum esse commodi eveniet libero asperiores cupiditate quo velit eligendi laudantium perspiciatis!</p>
                        <div class="slide-up">
                            <h1>info selengkapnya <i class="fa-solid fa-angles-up"></i></h1>
                        </div>
                    </div>
                    <div class="overlay">
                        <div class="detail-logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="detail">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt molestiae blanditiis ex beatae itaque tenetur voluptas enim voluptates incidunt doloribus?</p>
                        <a href="{{ route('product.show') }}" class="btn btn-light">Pelajari Selengkapnya <i class="fa-solid fa-angles-right"></i> </a>
                    </div>
                </div>

            </a>

        </div>

        <div class="col-md-4 pb-3 prodhom">
            <a href="{{ route('product.show') }}">
                <div class="container-product-home">
                    <div class="image">
                        <div class="logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum esse commodi eveniet libero asperiores cupiditate quo velit eligendi laudantium perspiciatis!</p>
                        <div class="slide-up">
                            <h1>info selengkapnya <i class="fa-solid fa-angles-up"></i></h1>
                        </div>
                    </div>
                    <div class="overlay">
                        <div class="detail-logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="detail">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt molestiae blanditiis ex beatae itaque tenetur voluptas enim voluptates incidunt doloribus?</p>
                        <a href="{{ route('product.show') }}" class="btn btn-light">Pelajari Selengkapnya <i class="fa-solid fa-angles-right"></i> </a>
                    </div>
                </div>

            </a>

        </div>

        <div class="col-md-4 pb-3 prodhom">
            <a href="{{ route('product.show') }}">
                <div class="container-product-home">
                    <div class="image">
                        <div class="logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum esse commodi eveniet libero asperiores cupiditate quo velit eligendi laudantium perspiciatis!</p>
                        <div class="slide-up">
                            <h1>info selengkapnya <i class="fa-solid fa-angles-up"></i></h1>
                        </div>
                    </div>
                    <div class="overlay">
                        <div class="detail-logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="detail">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt molestiae blanditiis ex beatae itaque tenetur voluptas enim voluptates incidunt doloribus?</p>
                        <a href="{{ route('product.show') }}" class="btn btn-light">Pelajari Selengkapnya <i class="fa-solid fa-angles-right"></i> </a>
                    </div>
                </div>

            </a>

        </div>

        <div class="col-md-4 pb-3 prodhom">
            <a href="{{ route('product.show') }}">
                <div class="container-product-home">
                    <div class="image">
                        <div class="logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum esse commodi eveniet libero asperiores cupiditate quo velit eligendi laudantium perspiciatis!</p>
                        <div class="slide-up">
                            <h1>info selengkapnya <i class="fa-solid fa-angles-up"></i></h1>
                        </div>
                    </div>
                    <div class="overlay">
                        <div class="detail-logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="detail">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt molestiae blanditiis ex beatae itaque tenetur voluptas enim voluptates incidunt doloribus?</p>
                        <a href="{{ route('product.show') }}" class="btn btn-light">Pelajari Selengkapnya <i class="fa-solid fa-angles-right"></i> </a>
                    </div>
                </div>

            </a>

        </div>

        <div class="col-md-4 pb-3 prodhom">
            <a href="{{ route('product.show') }}">
                <div class="container-product-home">
                    <div class="image">
                        <div class="logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum esse commodi eveniet libero asperiores cupiditate quo velit eligendi laudantium perspiciatis!</p>
                        <div class="slide-up">
                            <h1>info selengkapnya <i class="fa-solid fa-angles-up"></i></h1>
                        </div>
                    </div>
                    <div class="overlay">
                        <div class="detail-logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="detail">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt molestiae blanditiis ex beatae itaque tenetur voluptas enim voluptates incidunt doloribus?</p>
                        <a href="{{ route('product.show') }}" class="btn btn-light">Pelajari Selengkapnya <i class="fa-solid fa-angles-right"></i> </a>
                    </div>
                </div>

            </a>

        </div>

        <div class="col-md-4 pb-3 prodhom">
            <a href="{{ route('product.show') }}">
                <div class="container-product-home">
                    <div class="image">
                        <div class="logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum esse commodi eveniet libero asperiores cupiditate quo velit eligendi laudantium perspiciatis!</p>
                        <div class="slide-up">
                            <h1>info selengkapnya <i class="fa-solid fa-angles-up"></i></h1>
                        </div>
                    </div>
                    <div class="overlay">
                        <div class="detail-logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="detail">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt molestiae blanditiis ex beatae itaque tenetur voluptas enim voluptates incidunt doloribus?</p>
                        <a href="{{ route('product.show') }}" class="btn btn-light">Pelajari Selengkapnya <i class="fa-solid fa-angles-right"></i> </a>
                    </div>
                </div>

            </a>

        </div>

        <div class="col-md-4 pb-3 prodhom">
            <a href="{{ route('product.show') }}">
                <div class="container-product-home">
                    <div class="image">
                        <div class="logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum esse commodi eveniet libero asperiores cupiditate quo velit eligendi laudantium perspiciatis!</p>
                        <div class="slide-up">
                            <h1>info selengkapnya <i class="fa-solid fa-angles-up"></i></h1>
                        </div>
                    </div>
                    <div class="overlay">
                        <div class="detail-logo">
                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                        </div>
                        <p class="detail">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt molestiae blanditiis ex beatae itaque tenetur voluptas enim voluptates incidunt doloribus?</p>
                        <a href="{{ route('product.show') }}" class="btn btn-light">Pelajari Selengkapnya <i class="fa-solid fa-angles-right"></i> </a>
                    </div>
                </div>

            </a>

        </div>



        <div class="to-service pt-2">
            <center>
                <h1>RAGU AKAN PELAYANAN KAMI?</h1>
                <a href="{{ route('service') }}" class="btn btn-dark">CEK SEPAK TERJANG KAMI DISINI!</a>
            </center>
        </div>
    </div>
</div>

@endsection
