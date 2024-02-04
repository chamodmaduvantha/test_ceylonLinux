@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Free Issues</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('freeissue.update', $freeissue->id) }}">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <div class="row">
                        <div class="col-md-12">
                            <label>Free Issue Lable</label>
                            <input type="text" class="form-control" name="issue_lable" value="{{ $freeissue->issue_lable}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Type</label>
                            <select class="form-control" name="type" value="{{ $freeissue->type}}">
                                <option value="flat">Flat</option>
                                <option value="multiple">Multiple</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Purchase Product</label>
                            <select class="form-control" name="purchase_product">
                                @foreach($products as $key => $product)
                                    <option value="{{ $product->pname }}">{{ $product->pname }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Free Product</label>
                            <input type="text" class="form-control" name="free_product" value="{{ $freeissue->free_product}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Purchase Qty</label>
                            <input type="text" class="form-control" name="purchase_qty" value="{{ $freeissue->purchase_qty}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Free Qty</label>
                            <input type="text" class="form-control" name="free_qty" value="{{ $freeissue->free_qty}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Lower Limit</label>
                            <input type="text" class="form-control" name="lower_limit" value="{{ $freeissue->lower_limit}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Upper Limit</label>
                            <input type="text" class="form-control" name="upper_limit" value="{{ $freeissue->upper_limit}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
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