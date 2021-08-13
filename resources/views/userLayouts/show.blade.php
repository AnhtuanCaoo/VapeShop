@extends('manageLayouts.app')


@section('content')
    <div class="container" style="background-color: white">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>  User {{ $user->name }}</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}" title="Go back">Go back <i class="fas fa-backward "></i> </a>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User Name: {{ $user->name }}</strong></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Number: {{ $user->number }}</strong>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email: {{ $user->email }}</strong></div>
            </div>
        </div>
    </div>
@endsection