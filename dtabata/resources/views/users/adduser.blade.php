

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('save.user')}}">
                @csrf
                <div class="form-group row">
                  <label for="name" class="col sm-2 col-form-label">Name:</label>
                  <div class="col-sm">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required></div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col sm-2 col-form-label">Email:</label>
                    <div class="col-sm">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required></div>
                  </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Photo</label>
                    <input class="form-control" type="file" id="formFile">
                  </div>
                  <div class="form-group row">
                    <label for="phone" class="col sm-2 col-form-label">Phone:</label>
                    <div class="col-sm">
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" pattern="[789][0-9]{9}"></div>
                  </div>

                  <div class="form-group row">
                    <label for="password" class="col sm-2 col-form-label">Password:</label>
                    <div class="col-sm">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required></div>
                  </div>
                  <div class="form-group row">
                  <label for="select" class="col sm-2 col-form-label">Role:</label>
                  <div class="col-sm">
                    <div class="form-control-wrap" id="role">
                        <select class="form-select" name="role" required>
                          @foreach ($roles as $role)
                            <option value="{{$role->name}}">{{$role->name}}</option>
                          @endforeach
                        </select></div></div></div>
                  <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
            </form>
        </div>
      </div>
    </div>
  </div>