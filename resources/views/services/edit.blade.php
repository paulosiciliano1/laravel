<div class="modal" id="service_edit">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Service Edit</h4>
      </div>
      <form action="/services/1" method="POST">
      {{ csrf_field() }}
      {{ method_field('PATCH') }}
      <div class="modal-body">
        <label for="service_id">you are going edit this service:</label>
        <input class="form-control input-sm" type = "text" id="service_id" name = "name"/>
        <input type = "hidden" id="service_name" name = "id" value = ""/>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
{{--'id', 'name',--}}
