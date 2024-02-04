@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Customer Registration</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('customer.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label>Customer Name</label>
                            <input type="text" class="form-control" name="cname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Customer Code</label>
                            <input type="text" class="form-control" name="ccode">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Customer Address</label>
                            <input type="text" class="form-control" name="caddress">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Customer Contact</label>
                            <input type="text" class="form-control" name="ccontact">
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
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Code</th>
                        <th scope="col">Customer Address</th>
                        <th scope="col">Customer Contact</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $customers as $key => $customer )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $customer->cname }}</td>
                            <td scope="col">{{ $customer->ccode }}</td>
                            <td scope="col">{{ $customer->caddress }}</td>
                            <td scope="col">{{ $customer->ccontact }}</td>
                            
                            <td scope="col">

                            <a href="{{  route('customer.edit', $customer->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('customer.destroy', $customer->id) }}" method="POST" style ="display:inline">
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