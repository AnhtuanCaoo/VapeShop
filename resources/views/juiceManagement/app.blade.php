{{-- @extends('manageLayouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Juice's World</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="juiceManagement.app" title="Create a juice"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
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
          <td>Description</td>
            <th width="280px">Action</th>
        </tr>
        @foreach ($juices as $juice)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $juice->juicename }}</td>
                <td>{{ $juice->number }}</td>
                <td>{{ $juice->image }}</td>
                <td>{{ $juice->nicotin }}</td>
                <td>{{ $juice->flavor }}</td>
                <td>{{ $juice->brand }}</td>
                <td>{{ $juice->price }}</td>
                <td>{{ $juice->sellingprice}}</td>
                <td>{{ $juice->description }}</td>
                <td>
                    <form action="{{ route('Juice.destroy', $juice->id) }}" method="POST">

                        <a href="{{ route('Juice.show', $juice->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('Juice.edit', $juice->id) }}">
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

    {!! $juices->links() !!}

@endsection --}}

<h1>Belooasd</h1>