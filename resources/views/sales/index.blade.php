@extends('sales.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right mt-3 mb-3">
                <a class="btn btn-success" href="{{ route('sales.create') }}"> Create New Sale</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID </th>
            <th>ID client</th>
            <th>ID product</th>
            <th>Date</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($sales as $sale)
        <tr>
            <td>{{ $sale->id }}</td>
            <td>{{ $sale->client_id }}</td>
            <td>{{ $sale->product_id }}</td>
            <td>{{ $sale->created_at }}</td>
            <td>
                <form action="{{ route('sales.destroy',$sale->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('sales.show',$sale->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('sales.edit',$sale->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $sales->links() !!}
      
@endsection