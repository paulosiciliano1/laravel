<div class="modal fade" id="salon_create">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      {{--Form Create Salon--}}
      <form action="salons.store" method="post">
      <div class="modal-body">
        <input type="text" name="name">
        <input type="text" name="address">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>

    </div>
  </div>
</div>
