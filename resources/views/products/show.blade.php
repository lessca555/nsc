@extends('layouts.app')
@section('title', 'Product')

@section('content')
<div class="container-show-product">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product Name</li>
        </ol>
    </nav>

    <div class="content-product">
        <div class="card">
            <div class="card-header">
                <h1>Product Name</h1>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <div class="row col-md-12">

                        <div class="col-md-4">
                            <div class="product-image">
                                <img src="{{ url('asset/img/product/bwa.png') }}" alt="">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="product-item">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><b>Deskripsi</b></td>
                                            <td><b>:</b></td>
                                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis inventore voluptatibus beatae corrupti molestiae odit possimus quae voluptatem doloremque officiis.</td>
                                        </tr>

                                        <tr>
                                            <td><b>Jenis Barang</b></td>
                                            <td><b>:</b></td>
                                            <td>Opium</td>
                                        </tr>

                                        <tr>
                                            <td><b>Varian Barang</b></td>
                                            <td><b>:</b></td>
                                            <td>Merah, kuning, kelabu</td>
                                        </tr>

                                        <tr>
                                            <td><b>Stok Barang</b></td>
                                            <td><b>:</b></td>
                                            <td>69</td>
                                        </tr>

                                        <tr>
                                            <td><b>Harga</b></td>
                                            <td><b>:</b></td>
                                            <td>Rp. 69</td>
                                        </tr>

                                        <tr>
                                            <td><b>Jumlah Pemesanan</b></td>
                                            <td><b>:</b></td>
                                            <td>
                                                <form action="#">
                                                    @csrf
                                                    <input type="number" class="form-control" min="1">
                                                </form>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td><b>Catatan tambahan</b></td>
                                            <td><b>:</b></td>
                                            <td>
                                                <form action="#">
                                                    @csrf
                                                    <textarea name="#" id="" cols="30" rows="10" class="form-control"></textarea>
                                                </form>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="btn btn-dark">Order Now</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
