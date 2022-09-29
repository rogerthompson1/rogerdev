<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
</head>
<body>
<div class="container my-5 data-wrap">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session()->get('success')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
        @if(count($errors)>0)

            @foreach($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{$error}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
            @endforeach
    @endif
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary float-right my-2" data-toggle="modal" data-target="#add-record">
        Add user
    </button>

    <!-- Modal -->

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>

            <td>
                <a href="{{route('user.edit',$user->id)}}" class="btn btn-info ml-2 edit-user">Edit</a>
                <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger ml-2">Delete</a>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>


</div>
<div class="modal fade" id="add-record" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('add.new.user')}}" method="post">
                @csrf
            <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleFormControlInput1">First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="John" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Warner" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="text" class="form-control" name="password" placeholder="ancd1234" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="12349879" required>
                    </div>

            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="edit-modal-wrap">

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>

<script>
    $(document).ready(function(){
        $('.edit-user').click(function (event){
            event.preventDefault();
            $.ajax({
                url:$(this).attr('href'),
                success:function (data){
                    $('.edit-modal-wrap').html(data.html);
                    $('#edit-record').modal('show');
                }
            });

        });
    });
</script>
</body>
</html>
