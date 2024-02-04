@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Customer Registration</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('customer.update', $customer->id) }}">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <div class="row">
                        <div class="col-md-12">
                            <label>Customer Name</label>
                            <input type="text" class="form-control" name="pname" value="{{ $customer->cname}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Customer Code</label>
                            <input type="text" class="form-control" name="ccode" value="{{ $customer->ccode}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Customer Address</label>
                            <input type="text" class="form-control" name="pcode" value="{{ $customer->caddress}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Customer Contact</label>
                            <input type="text" class="form-control" name="price" value="{{ $customer->ccontact}}">
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