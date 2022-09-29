<div class="modal fade" id="edit-record" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('update.new.user',$user->id)}}" method="post">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleFormControlInput1">First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}" placeholder="John" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}" placeholder="Warner" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="name@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="text" class="form-control" name="password" value="{{$user->password}}" placeholder="ancd1234" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{$user->phone}}" placeholder="12349879" required>
                    </div>

                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
