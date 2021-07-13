@extends('manageLayouts.app')


@section('content')
    <div class="container" style="background-color: white">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>  Sản phẩm {{ $juice->juicename }}</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('juices.index') }}" title="Go back">Go back <i class="fas fa-backward "></i> </a>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Name: {{ $juice->juicename }}</strong></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Number: {{ $juice->number }}</strong>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image: </strong><img src="{{ $juice->image }}" alt="" style="width:100px;height:100px;"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nicotin: {{ $juice->nicotin }}</strong></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Flavor: {{ $juice->flavor }}</strong></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Brand: {{ $juice->brand }}</strong></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price: {{ $juice->price }}</strong></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Selling Price: {{ $juice->sellingprice }}</strong></div>
            </div>
        </div>
    </div>
@endsection