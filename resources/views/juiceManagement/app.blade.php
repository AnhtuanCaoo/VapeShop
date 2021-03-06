@extends('manageLayouts.app')

@section('content')
    <div class="container" style="background-color:white">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Saltnic's World</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('juices.create') }}" title="Create a juice">Create a juice <i class="fas fa-plus-circle"></i>
                        </a>
                </div>
            </div>
        </div>
    
        @if ($message = Session::get('success'))
            <div class="alert alert-success">   
                <p>{{ $message }}</p>
            </div>
        @endif
    
        <table class="table table-bordered table-responsive-lg" style="margin-top: 10px">
            <tr>
              <td>ID</td>
              <td>Product name</td>
              <td>Number</td>
              <td>Image</td>
              <td>Nicotin</td>
              <td>Flavor</td>
              <td>Brand</td>
              <td>Price</td>
              <td>Sell Price</td>
                <th width="120px">Action</th>
            </tr>
            @foreach ($juices as $juice)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $juice->juicename }}</td>
                    <td>{{ $juice->number }}</td>
                    <td><img src="{{ $juice->image }}" alt="" style="width:100px;height:100px;"></td>
                    <td>{{ $juice->nicotin }}</td>
                    <td>{{ $juice->flavor }}</td>
                    <td>{{ $juice->brand }}</td>
                    <td>{{ $juice->price }}</td>
                    <td>{{ $juice->sellingprice}}</td>
                    <td>
                        <form action="{{ route('juices.destroy', $juice->id) }}" method="POST">
    
                            <a href="{{ route('juices.show', $juice->id) }}" title="show">
                                <i class="fas fa-eye text-success  fa-lg"></i>
                            </a>
    
                            <a href="{{ route('juices.edit', $juice->id) }}">
                                <i class="fas fa-edit  fa-lg"></i>
    
                            </a>
    
                            @csrf
                            @method('DELETE')
    
                            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                <i class="fas fa-trash fa-lg text-danger"></i>
    
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>          
    </div>
    {!! $juices->links() !!}  

@endsection
