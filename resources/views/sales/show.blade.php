@extends('sales.layout')

@section('content')
    <div class="border p-1 m-2">
        <div class="row ">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('sales.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group  border m-1 p-3">
                    <h3>Sale Id : {{ $sale->id }}</h3>
                </div>
            </div>
            <div class="col p-5">
                <h5>Client info</h5>
                <div class="col m-2">
                    <span class="fw-bold">ID :</span> <span>{{ $sale->client_id }}</span>
                </div>
                <div class="col m-2">
                    <span class="fw-bold">Name :</span> <span>{{ $sale->client->name }}</span>
                </div>
                <div class="col m-2">
                    <span class="fw-bold">Email :</span> <span>{{ $sale->client->email }}</span>
                </div>
                <div class="col m-2">
                    <span class="fw-bold">Phone :</span> <span>{{ $sale->client->address }}</span>
                </div>
            </div>
            <div class="col p-5">
                <h5>Product info</h5>
                <div class="col m-2">
                    <span class="fw-bold">ID :</span> <span>{{ $sale->product_id }}</span>
                </div>
                <div class="col m-2">
                    <span class="fw-bold">Name :</span> <span>{{ $sale->product->name }}</span>
                </div>
                <div class="col m-2">
                    <span class="fw-bold">Price :</span> <span>{{ $sale->product->price }}</span>
                </div>
                <div class="col m-2">
                    <span class="fw-bold">Detail :</span> <span>{{ $sale->product->detail }}</span>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="border m-1 p-3">
                    <h5>Created at:</h5>
                    {{ $sale->created_at }}
                    <h5>Updated at:</h5>
                    {{ $sale->updated_at }}
                </div>
            </div>
        </div>
    </div>
@endsection
