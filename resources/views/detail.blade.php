<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" ></script>
    <title>Details</title>
    <style>

        th, td {
        text-align: center;
        vertical-align:middle;
        }

    </style>
</head>
<body>
    <!-- Add Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('add-details')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        {{-- <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Id</label>
                            <input type="hidden" required class="form-control" placeholder="Enter your mobile number" name="id">
                        </div> --}}
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Emp ID</label>
                            <input type="text" required class="form-control" placeholder="Enter your Emp ID" name="Employee_ID">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" required class="form-control" placeholder="Enter your name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" required class="form-control" placeholder="Enter your Email" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" required class="form-control" placeholder="Enter your Password" name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 <!-- end Add Modal -->

     <!-- edit Modal -->
@if (count($details)>0)


    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ url('update-details')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="stud_id" name="stud_id" value="{{$details[0]->id}}">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Emp ID</label>
                            <input type="text" required class="form-control"  name="Employee_ID" value="{{$details[0]->Employee_ID}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" required class="form-control"  name="name" value="{{$details[0]->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" required class="form-control"  name="email" value="{{$details[0]->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="text" required class="form-control"  name="password" value="{{$details[0]->password}}">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
 <!-- end edit Modal -->


{{-- delete modal --}}

<div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" >Delete</button>
            </div>
        </div>
    </div>
</div>


{{-- import Details --}}
<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Import Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/import" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><strong>Import</strong></label>
                    <input type="file"  class="form-control"  name="file">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- end --}}

    <div class="container" id="detail_table">



        <button class="btn btn-primary my-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Details</button>

        <button class="btn btn-primary my-2" ><a href="/export" class="text-light">Export Details</a> </button>

        <button class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#importModal">import Details</a> </button>

        @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
        @endif
        <div class="row">
            <div class="card">
                <div class="card-header">
                   <h4>Details</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Emp ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($details as $detail)

                                <tr>
                                    <td>{{$detail->id}}</td>
                                    <td>{{$detail->Employee_ID}}</td>
                                    <td>{{$detail->name}}</td>
                                    <td>{{$detail->email}}</td>
                                    <td>{{$detail->password}}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary editbtn" value="{{$detail->id}}" >Edit</button>
                                    </td>
                                    <td>

                                    <button type="button" class="btn btn-sm btn-danger deletebtn" value="{{$detail->id}}">Delete</button>


                                    </td>
                                </tr>
                            @empty
                                <p>No details found</p>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(document).ready(function (){
            $(document).on('click', '.editbtn', function () {
                var stud_id =$(this).val();
                // alert(stud_id);
                $('#editModal').modal('show');

                $.ajax({
                    type: "GET",
                    url: "/edit-details/"+stud_id,
                    data: "data",
                    success: function (response) {
                        console.log(response);
                    }
                });
            });



            $('.deletebtn').click(function (e){
                e.preventDefault();

                var stud_id =$(this).val();
                // alert(stud_id);

                swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        method: "GET",
                        url: "/delete-detail/"+stud_id,
                        data: {
                            'stud_id':stud_id,
                            'deletebtn':true
                        },
                        success: function (response) {
                            if(response == 200)
                            {

                                window.location.href="/detail" ;

                            }
                        }
                   });
                }
                });
            });
        });
    </script>

</body>
</html>
