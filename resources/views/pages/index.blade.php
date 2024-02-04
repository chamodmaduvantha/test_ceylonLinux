@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Product Registration</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('product.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="pname">
                        </div>
                        <div class="col-md-6">
                            <label>Expire Date</label>
                            <input type="date" class="form-control" name="expire_date">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Product Code</label>
                            <input type="text" class="form-control" name="pcode">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Add">
                        </div>

                    </div>
                </form>
            </div>

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Code</th>
                        <th scope="col">Price</th>
                        <th scope="col">Expire Date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $products as $key => $product )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $product->pname }}</td>
                            <td scope="col">{{ $product->pcode }}</td>
                            <td scope="col">{{ $product->price }}</td>
                            <td scope="col">{{ $product->expire_date }}</td>
                            
                            <td scope="col">

                            <a href="{{  route('product.edit', $product->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>

                          </tr>

                        @endforeach

                    </tbody>
                  </table>
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