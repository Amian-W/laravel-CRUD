@extends('products.layout')

@section('content')
    <div class=" border m-3 p-3">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">

                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product description:</strong>
                    {{ $product->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    {{ $product->price }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    {{ $product->detail }}
                </div>
            </div>
        </div>
    </div>
    <div>
        <legend>number of sales for this product : {{ count($product->sale) }}</legend>
        <table class="table">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>ID client</th>
                    <th>ID product</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($product->sale as $sale)
                    <tr>
                        <td>{{ $sale->id }}</td>
                        <td>{{ $sale->client_id }}</td>
                        <td>{{ $sale->product_id }}</td>
                        <td>{{ $sale->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td>!! No sales yet for this product !!</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
