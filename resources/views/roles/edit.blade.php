<div class="modal fade" id="salon_edit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      {{--Form Edit Roles--}}
      <form action="/roles/1" method="POST">
      {{ csrf_field() }}
      {{ method_field('PATCH') }}
      <div class="modal-body">
        <p>Are you going to edit next role?.</p>
        <label>Role</label>
        <input class="form-control input-sm" type="text" name="role" id="role">
        <input type = "hidden" id="role_id" name = "id" value = ""/>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>

    </div>
  </div>
</div>
