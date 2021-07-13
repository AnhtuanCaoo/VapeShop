@extends('manageLayouts.app')

@section('content')
    <div class="container" style="background-color: white">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Update Product{{ $juice->juicename }}</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('juices.index') }}" title="Go back">Return <i class="fas fa-backward "></i> </a>
                </div>
            </div>
        </div>
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('juices.update', $juice->id) }}" method="POST" >
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Product Name:</strong>
                        <input type="text" name="juicename" class="form-control" value="{{ $juice->juicename }}" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Number:</strong>
                        <input type="number" class="form-control" style="height:50px" name="number"
                            value="{{ $juice->number }}" placeholder="Number"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <img src="{{ $juice->image }}" alt="" style="width:100px;height:100px">
                        <input type="file" name="image" class="form-control"  placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nicotin:</strong>
                        <input type="number" name="nicotin" class="form-control" value="{{ $juice->nicotin }}" placeholder="Nicotin">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Flavor:</strong>
                        <input type="text" name="flavor" class="form-control" value="{{ $juice->flavor }}" placeholder="Flavor">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Brand:</strong>
                        <input type="text" name="brand" class="form-control" value="{{ $juice->brand }}" placeholder="Brand">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Price:</strong>
                        <input type="number" min="1" step="any" name="price" class="form-control" value="{{ $juice->price }}" placeholder="Price">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Selling Price:</strong>
                        <input type="number" min="1" step="any" name="sellingprice" class="form-control" value="{{ $juice->sellingprice }}" placeholder="Selling-Price">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
    
        </form>
    </div>
@endsection