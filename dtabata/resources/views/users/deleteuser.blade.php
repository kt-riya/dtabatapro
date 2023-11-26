@foreach ($users as $user)
    
<div class="modal" tabindex="-1" role="dialog" id="delete-{{$user->user_id}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Do you really want to delete this user?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a type="submit" href="{{route('delete.user',$user->user_id)}}"  class="btn btn-danger"> Delete</a>
      </div>
    </div>
  </div>
</div>
@endforeach
