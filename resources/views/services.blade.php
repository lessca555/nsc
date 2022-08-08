@extends('layouts.app')
@section('title', 'Services')

@section('content')

<div class="container-service">
    <div class="prelaude">
        <div class="kiri">
            <img src="{{ url('asset/img/services.png') }}" alt="">
        </div>
        <div class="kanan">
            <h1>Kenapa memilih kami?</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit architecto recusandae magnam exercitationem inventore, eum esse dolorem fugit at odio, hic, maiores porro. Dolore voluptatem, vitae pariatur fuga impedit vel corporis consectetur aperiam magni velit, distinctio reprehenderit non suscipit. Ex magnam libero quis. Molestias vero cum debitis exercitationem enim animi deleniti quasi! Adipisci excepturi saepe nam culpa eum hic labore vero facilis, officia, fugit enim, non a perferendis odit eos ipsa? Perspiciatis expedita iste, consectetur tempora reiciendis voluptatem ab, sunt quae esse, sapiente unde distinctio eius earum est possimus praesentium officiis? Magni provident atque sint ducimus officiis recusandae unde culpa deserunt cupiditate. Minus, in. Fuga doloribus debitis nobis! Distinctio illum repudiandae obcaecati laborum error exercitationem tempora facere praesentium nostrum vero quos adipisci cupiditate vel rerum labore molestiae, possimus tempore quasi beatae eveniet. Rerum expedita officiis dignissimos ex libero molestiae, harum perferendis quam quas quis. Omnis totam sit iure maiores facere, nihil id cum mollitia blanditiis fugit consectetur excepturi, incidunt culpa repellendus accusantium natus dolores. Optio ducimus atque, fuga veniam officiis rerum odio temporibus illum hic odit quas omnis, dicta doloribus, iure labore eaque tempore pariatur dolorum recusandae reiciendis autem maiores sapiente unde. Excepturi fugiat corrupti porro inventore ipsa aliquam commodi.</p>
            <a href="#contacts" class="btn btn-dark">CONTACT US</a>
        </div>
    </div>

    <hr>

</div>

<div class="selubung">
    <div class="container-service">
        <div class="one">
            <center class="pt-3">
                <h1>Pengalaman menjadikan kami ada saat ini, cermat dan tanggap.</h1>
                <p>Dengan para pekerja kami yang terlatih secara soft dan hard skil, kami ada untuk menangani semua kemauan anda</p>
            </center>

            <div class="counter">
                <div class="tahun-berdiri">
                    <h3>Ada sejak</h3>
                    <h1 class="count">2022 </h1>
                </div>

                <div class="pekerja">
                    <h3>Jumlah Pekerja</h3>
                    <h1 class="count">25</h1>
                </div>

                <div class="client">
                    <h3>Jumlah Client</h3>
                    <h1 class="count">300</h1>
                </div>

                <div class="client-puas">
                    <h3>Client Puas</h3>
                    <h1 class="count">300</h1>
                </div>

                <div class="cabang">
                    <h3>Cabang</h3>
                    <h1 class="count">5</h1>
                </div>




            </div>
        </div>

        <hr>
    </div>

</div>

<div class="container-service">
    <div class="two">
        <center>
            <h1>Apa saja bidang kami?</h1>
            <br>
        </center>

        <div class="responsive-devolopment">
            @include('layouts.swiper-services-1')
        </div>

        <div class="devolopment">

            <div class="row col-md-12">
                <div class="col-md-4">
                    <div class="box-dev-1">
                        <div class="container-dev">
                            <div class="image">
                                <img src="{{ url('asset/img/java.png') }}" alt="" class="img">
                                <div class="deskripsi">
                                    <h1>Dekstop</h1>
                                </div>
                            </div>

                            <div class="overlay">
                              <div class="text">Hello World</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box-dev-2">
                        <div class="container-dev">
                            <div class="image">
                                <img src="{{ url('asset/img/webdev.png') }}" alt="" class="img">
                                <div class="deskripsi">
                                    <h1>Web</h1>
                                </div>
                            </div>

                            <div class="overlay">
                              <div class="text">Hello World</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box-dev-3">
                        <div class="container-dev">
                            <div class="image">
                                <img src="{{ url('asset/img/andro.png') }}" alt="" class="img">
                                <div class="deskripsi">
                                    <h1>Android</h1>
                                </div>
                            </div>

                            <div class="overlay">
                              <div class="text">Hello World</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <hr>

    <br>
</div>

<div class="container-service">
    <div class="three">
        <center>
            <h1>Keahlian kami?</h1>
        </center>
        <br>

        <div class="th-1">
            <div class="row col-md-12">
                <div class="col-md-4">
                    <div class="container-exp">
                        <div class="image">
                            <img src="{{ url('asset/img/lara.webp') }}" alt="" class="img">
                            <div class="deskripsi">
                                <h1>Laravel web devolopment</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container-exp">
                        <div class="image">
                            <img src="{{ url('asset/img/andro.png') }}" alt="" class="img">
                            <div class="deskripsi">
                                <h1>Android apps devolopment</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container-exp">
                        <div class="image">
                            <img src="{{ url('asset/img/java.png') }}" alt="" class="img">
                            <div class="deskripsi">
                                <h1>Dekstop apps devolopment</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container-exp">
                        <div class="image">
                            <img src="{{ url('asset/img/fe.jpg') }}" alt="" class="img">
                            <div class="deskripsi">
                                <h1>Front-end design and layouting</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container-exp">
                        <div class="image">
                            <img src="{{ url('asset/img/be.png') }}" alt="" class="img">
                            <div class="deskripsi">
                                <h1>Back-end native integrating</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container-exp">
                        <div class="image">
                            <img src="{{ url('asset/img/swift.png') }}" alt="" class="img">
                            <div class="deskripsi">
                                <h1>iOS devolopment</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-service">
    <div class="four">
        <center>
            <h1>Tidak perlu ragu lagi bukan? buruan!</h1>
            <br>
            <a href="#" class="btn btn-dark">HIRE KAMI SEKARANG!</a>
        </center>
    </div>
</div>

@endsection
