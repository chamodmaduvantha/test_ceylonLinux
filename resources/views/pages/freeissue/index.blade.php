@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Free Issues</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('freeissue.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label>Free Issue Lable</label>
                            <input type="text" class="form-control" name="issue_lable">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Type</label>
                            <select class="form-control" name="type">
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
                            <input type="text" class="form-control" name="free_product">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Purchase Qty</label>
                            <input type="text" class="form-control" name="purchase_qty">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Free Qty</label>
                            <input type="text" class="form-control" name="free_qty">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Lower Limit</label>
                            <input type="text" class="form-control" name="lower_limit">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Upper Limit</label>
                            <input type="text" class="form-control" name="upper_limit">
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
                        <th scope="col">Issu Labale</th>
                        <th scope="col">Type</th>
                        <th scope="col">P_Product</th>
                        <th scope="col">F_Product</th>
                        <th scope="col">P_Qty</th>
                        <th scope="col">F_Qty</th>
                        <th scope="col">L_Limit</th>
                        <th scope="col">U_Limit</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $freeissues as $key => $freeissue )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $freeissue->issue_lable }}</td>
                            <td scope="col">{{ $freeissue->type }}</td>
                            <td scope="col">{{ $freeissue->purchase_product }}</td>
                            <td scope="col">{{ $freeissue->free_product }}</td>
                            <td scope="col">{{ $freeissue->purchase_qty }}</td>
                            <td scope="col">{{ $freeissue->free_qty	 }}</td>
                            <td scope="col">{{ $freeissue->lower_limit }}</td>
                            <td scope="col">{{ $freeissue->upper_limit }}</td>
                            
                            <td scope="col">

                            <a href="{{  route('freeissue.edit', $freeissue->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('freeissue.destroy', $freeissue->id) }}" method="POST" style ="display:inline">
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