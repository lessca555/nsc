@extends('layouts.app')
@section('title', 'Product')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product Name</li>
    </ol>
</nav>

@endsection
