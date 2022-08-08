@extends('layouts.app')
@section('title', 'About us')

@section('content')

<div class="container-about">
    <div class="about-one">
        <h1>INILAH IWS</h1>
        <p style="color: brown">"Mengubah imajinasi menjadi karya asli"</p>
        <p>Slogan inilah yang menjadikan IWS sebagai layanan pengembang yang layak anda pilih sebagai solusi dari setiap masalah digital anda.</p>
    </div>
</div>

<div class="selubung">
    <div class="container-about">
        <div class="about-2">
            <center>
                <h1 class="pt-3 pb-2 judul">Tokoh INSPIRATIF di IWS.</h1>
            </center>

            <div class="row col-md-12">

                <div class="col-md-4">
                    <div class="container-about-2">
                        <div class="image">
                            <img src="{{ url('asset/img/hitler.jpg') }}" alt="" class="img">
                            <div class="deskripsi">
                                <h1>Adolf Hitler S.Py</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="container-about-2">
                        <div class="image">
                            <img src="{{ url('asset/img/stalin.jpg') }}" alt="" class="img">
                            <div class="deskripsi">
                                <h1>Prof. Joseph Stalin S.K M.K D.K</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="container-about-2">
                        <div class="image">
                            <img src="{{ url('asset/img/hirohito.jpg') }}" alt="" class="img">
                            <div class="deskripsi">
                                <h1>King Hirohito</h1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="container-about">
    <div class="about-3">
        <h1>SEPERTI APA KAMI?</h1>

        <div class="about-baris-1">
            <div class="kiri">
                <div class="image">
                    <img src="{{ url('asset/img/voc.png') }}" alt="" class="img">
                </div>
            </div>
            <div class="kanan">
                <div class="deskripsi">
                    <h1>Siapa kami?</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa cupiditate modi officiis laboriosam cumque nisi quisquam recusandae dolores necessitatibus odio quos voluptas itaque, maiores omnis assumenda voluptate blanditiis, quia deleniti.</p>
                </div>
            </div>
        </div>

        <div class="about-baris-2">
            <div class="kiri">
                <div class="deskripsi">
                    <h1>Apa Perbedaan kami degan yang lain?</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit necessitatibus nam beatae laudantium. Mollitia accusantium adipisci error est distinctio consequuntur, natus eaque nemo quia alias, veritatis esse ea dolor quas.</p>
                </div>
            </div>
            <div class="kanan">
                <div class="image">
                    <img src="{{ url('asset/img/fired.jpg') }}" alt="" class="img">
                </div>
            </div>
        </div>

        <div class="about-baris-3">
            <div class="kiri">
                <div class="image">
                    <img src="{{ url('asset/img/kerja.jpg') }}" alt="" class="img">
                </div>
            </div>
            <div class="kanan">
                <div class="deskripsi">
                    <h1>Etos kerja kami?</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, minus. At odio ex eum, minima veniam, modi hic illo necessitatibus sed nam vitae reprehenderit. Optio reprehenderit deleniti mollitia impedit perspiciatis!</p>
                </div>
            </div>
        </div>

    </div>

    <div class="container-about">
        <div class="about-4">
            <div class="visi">
                <center>
                    <h1>VISI</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum eligendi perferendis nobis ipsum facilis beatae rerum? Ratione quasi quod inventore, ullam, tempora fugiat nulla ipsa doloribus alias quisquam, ad beatae.</p>
                </center>
            </div>

            <div class="misi pt-3">
                <center>
                    <h1>MISI</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem assumenda culpa excepturi eaque vero quis nemo quibusdam dolor quos, adipisci natus architecto voluptas doloremque suscipit, voluptatibus recusandae modi consequuntur quae!</p>
                </center>
            </div>
        </div>
    </div>
</div>

@endsection
