@extends('clients.layout')

@section('content')
    <div class=" m-3 p-3 border">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('clients.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Client name:</strong>
                    {{ $client->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $client->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    {{ $client->address }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone number:</strong>
                    {{ $client->phone }}
                </div>
            </div>

        </div>
    </div>
    <div>
        <table class="table">
            <legend>Number of sales for this client : {{ count($client->sale) }}</legend>
            <thead>
                <tr>
                    <th>ID </th>
                    <th>ID client</th>
                    <th>ID product</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($client->sale as $sale)
                    <tr>
                        <td>{{ $sale->id }}</td>
                        <td>{{ $sale->client_id }}</td>
                        <td>{{ $sale->product_id }}</td>
                        <td>{{ $sale->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td>!! No sales yet for this client !!</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforelse
                </tr>
            </tbody>
        </table>
    </div>
@endsection
