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
      <form action="/salons" method="post">
      {{ csrf_field() }}
      <div class="modal-body">
        <p>Plese enter your salon below.</p>
        <label for="csName">Salon name</label>
        <input class="form-control input-sm" type="text" name="name" id="csName"/>
        <label for="csAddress">Salon Address</label>
        <input class="form-control input-sm" type="text" name="address" id="csAddress"/>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>

    </div>
  </div>
</div>
