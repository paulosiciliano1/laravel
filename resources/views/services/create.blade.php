<div class="modal" id="service_create">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Service Create</h4>
      </div>
      <form action="/services" method="post">
      {{ csrf_field() }}
      <div class="modal-body">
        <p>you are going to add a service, aren't you?.</p>
        <input type="text" name="name"/>
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
