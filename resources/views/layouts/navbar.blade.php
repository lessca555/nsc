<nav class="navbar navbar-expand-md">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}" id="home">
            <img src="{{ url('asset/img/logo.png') }}" alt="">
        </a>

        <ul class="navbar-nav hide-on-mini me-auto mb-2 mb-lg-0">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PRODUCT
                </a>
                <div class="dropdown-menu">
                    <div class="drop-prod">
                        <div class="row col-md-12 container">

                            <div class="col-md-4">
                                <a href="{{ route('product.show') }}">
                                    <div class="container-product">
                                        <div class="image">
                                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                                        </div>
                                        <div class="deskripsi">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, similique?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="{{ route('product.show') }}">
                                    <div class="container-product">
                                        <div class="image">
                                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                                        </div>
                                        <div class="deskripsi">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, similique?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="{{ route('product.show') }}">
                                    <div class="container-product">
                                        <div class="image">
                                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                                        </div>
                                        <div class="deskripsi">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, similique?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="{{ route('product.show') }}">
                                    <div class="container-product">
                                        <div class="image">
                                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                                        </div>
                                        <div class="deskripsi">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, similique?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="{{ route('product.show') }}">
                                    <div class="container-product">
                                        <div class="image">
                                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                                        </div>
                                        <div class="deskripsi">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, similique?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="{{ route('product.show') }}">
                                    <div class="container-product">
                                        <div class="image">
                                            <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                                        </div>
                                        <div class="deskripsi">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, similique?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>


                        </div>
                    </div>
                </div>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('service') }}">SERVICES</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
            </li>

            <li class="nav-item">
                <a data-scroll class="nav-link" href="#contacts">CONTACT US</a>
            </li>


        </ul>

        <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>

    </div>

</nav>

<div class="collapse navbar-collapse" id="navbarNavDropdown">

    <ul class="navbar-nav">

        <li class="nav-item dropdown">
            <button class="btn btn-nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">PRODUCT <i class="fa-solid fa-angle-right"></i></button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn btn-off-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-arrow-left"></i></button>
                </div>
                <div class="offcanvas-body">
                    <div class="dropdown-menu">
                        <div class="drop-prod">
                            <div class="row col-md-12 container">

                                <div class="col-md-4">
                                    <a href="{{ route('product.show') }}">
                                        <div class="container-product">
                                            <div class="image">
                                                <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, similique?</p>
                                            </div>
                                        </div>

                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="{{ route('product.show') }}">
                                        <div class="container-product">
                                            <div class="image">
                                                <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, similique?</p>
                                            </div>
                                        </div>

                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="{{ route('product.show') }}">
                                        <div class="container-product">
                                            <div class="image">
                                                <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, similique?</p>
                                            </div>
                                        </div>

                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="{{ route('product.show') }}">
                                        <div class="container-product">
                                            <div class="image">
                                                <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, similique?</p>
                                            </div>
                                        </div>

                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="{{ route('product.show') }}">
                                        <div class="container-product">
                                            <div class="image">
                                                <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, similique?</p>
                                            </div>
                                        </div>

                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="{{ route('product.show') }}">
                                        <div class="container-product">
                                            <div class="image">
                                                <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, similique?</p>
                                            </div>
                                        </div>

                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PRODUCT
            </a> --}}

        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('service') }}">SERVICES</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#contacts">CONTACT US</a>
        </li>


    </ul>
</div>
