<!DOCTYPE html>
<html>
<head>
    <title>Contact Laravel 8 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<style>
    .card {
        width: 85vw;
        margin-top: calc(calc(100vh - 85vh) * 0.5);
        margin-left: calc(calc(100vw - 85vw) * 0.5);
    }

    .card th {
        text-align: center;
        vertical-align: middle;
    }

</style>
<div class="card">
    <div class="card-header" style="background-color:DodgerBlue;"><b>Products</b></div>
    <div class="card-body">
        <a href="{{ url('/contact/create') }}" class="btn btn-outline-primary" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        {{-- <a href="{{ url('') }}" class="btn btn-outline-success" value="importView">
        <i class="fa fa-plus" aria-hidden="true"></i> Import
        </a>
        <a href="{{ url('/contact/create') }}" class="btn btn-outline-success" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Export
        </a> --}}

        <a href="{{ url('/file-import') }}" class="btn btn btn-success">
            <i class="fa fa-plus" aria-hidden="true"></i> File Transfer
        </a>
        <a href="{{ url('/delete-articles')  }}" type="button" class="btn btn btn-danger">Reset All</a>

        <br />
        <br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        {{-- <th>ID</th> --}}
                        <th>Image</th>
                        <th>Name</th>
                        <th>Cost</th>
                        <th style="width: 20vw">Description</th>
                        <th>Stock#</th>
                        <th>Status</th>
                        <th style="width: 15vw">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        {{-- <td>{{ $item->id }}</td> --}}
                        <td><img src="{{asset('image/'.$item->product_img)}}" alt="" style="width: 100px;height:100px"></td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->product_cost }}</td>
                        <td>{{ $item->product_desc }}</td>
                        <td>{{ $item->product_stock }}</td>
                        <td>{{ $item->product_is_active }}</td>
                        

                        <td>
                            <a href="{{ url('/contact/' . $item->id) }}" title="View Student"><button
                                    class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                    View</button></a>
                            <a href="{{ url('/contact/' . $item->id . '/edit') }}" title="Edit Student"><button
                                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8"
                                style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact"
                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
</body>
</html>

