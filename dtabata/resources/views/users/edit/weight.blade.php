<div class="modal" id="Weight" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Weight Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('save.weight')}}">
                @csrf
                <input type="hidden" name="id" value="{{$user->user_id}}">
                <div class="form-group row">
                  <label for="weight-kg" class="col sm-2 col-form-label">Weight(KG):</label>
                  <div class="col-sm">
                  <input type="text" class="form-control" id="weight-kg" name="weight-kg" placeholder="Enter your Weight in kg"></div>
                </div>
                <div class="form-group row">
                    <label for="weight-lbs" class="col sm-2 col-form-label">Weight(LBS):</label>
                    <div class="col-sm">
                    <input type="text" class="form-control" id="weight-lbs" name="weight-lbs" placeholder="Enter your Weight in lbs" required></div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>