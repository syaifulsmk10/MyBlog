@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <a href="" class="btn btn-success">Add Product</a>
        </div>
        <div class="card-body">
            <div class="row">
        @foreach ($produk as $produks)
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('banner.jpg') }}" alt="" class="card-img-top img-fluid">
                <div class="card-body">
                    <h3 class="fw-bold">Nama : {{ $produks->name }}</h3>
                    <h4 class="fw-bold text-warning">Rp. {{ $produks->price }}</h4>
                    <form action="" method="POST">
                        <input type="number" class="form-control mb-3" name="">
                        <button class="btn btn-success">Buy</button>
                        <button class="btn btn-warning">Cart</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
        </div>
    </div>
</div>

@endsection
