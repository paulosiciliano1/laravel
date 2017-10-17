<div class="modal fade" id="salon_edit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit salon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      {{--Form Create Salon--}}
      <form action="/salons/1" method="POST">
      {{ csrf_field() }}
      {{ method_field('PATCH') }}
      <div class="modal-body">
        <p>Are you going to edit next salon?.</p>
        <label for="salon_name">Salon name</label>
        <input class="form-control input-sm" type="text" name="name" id="salon_name">
        <label for="salon_address">Salon address</label>
        <input  class="form-control input-sm" type="text" name="address" id="salon_address">
        <input type = "hidden" id="salon_id" name = "id" value = ""/>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>

    </div>
  </div>
</div>
