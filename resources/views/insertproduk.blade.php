@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center align-items-center">
         <div class="card col-lg-8 ">
        <div class="card-header">
          <h4 class="fw-bold ">#Add Product</h4>
        </div>
        <div class="card-body">
           <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label" name="produk">Name</label>
                    <input type="text" class="form-control" name="produk" id="produk">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label" name="produk">Price</label>
                    <input type="text" class="form-control" name="produk" id="produk">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label" name="produk">Stock</label>
                    <input type="text" class="form-control" name="produk" id="produk">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label" name="produk">Kategori</label>
                    <select name="kategori" id="" class="form-select">
                        <option value="makanan">Food</option>
                        <option value="minuman">Drink</option>
                    </select>
                </div>

                <button class="btn btn-success">Add Product</button>

           </form>
        </div>
    </div>
    </div>
   
</div>

@endsection
