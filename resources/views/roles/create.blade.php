<div class="modal fade" id="role_create">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/roles" method="post">
      <div class="modal-body">
        <p>fill next field to add new role</p>
        <label>Role</label>
        <input type="text" name="role">

      </div>
      <div class="modal-footer">
        <button type="submit " class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
