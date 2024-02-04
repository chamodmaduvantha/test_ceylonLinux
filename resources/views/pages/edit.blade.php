@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Product Registration</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('product.update', $product->id) }}">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <div class="row">
                        <div class="col-md-6">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="pname" value="{{ $product->pname}}">
                        </div>
                        <div class="col-md-6">
                            <label>Expire Date</label>
                            <input type="date" class="form-control" name="expire_date" value="{{ $product->expire_date}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Product Code</label>
                            <input type="text" class="form-control" name="pcode" value="{{ $product->pcode}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $product->price}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Edit">
                        </div>

                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush