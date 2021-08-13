@extends('manageLayouts.app')

@section('content')
    <div class="container" style="background-color:white">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>User Management</h2>
                </div>
            </div>
        </div>
    
        <table class="table table-bordered table-responsive-lg" style="margin-top: 10px">
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Number</td>
              <td>Email</td>
                <th width="120px">Action</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->number }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        
    
                            <a href="{{ route('users.show', $user->id) }}" title="show">
                                <i class="fas fa-eye text-success  fa-lg"></i>
                            </a>
    
                    </td>
                </tr>
            @endforeach
        </table>          
    </div>
    {!! $users->links() !!}  

@endsection
