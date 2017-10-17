<div class="modal fade" id="product_create">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        {{'id','salon_id','service_id','price','duration'}}
        <h5 class="modal-title">New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Want to create a new product.</p>
        <label>Salon</label>

        <select name="salon_id">
          @foreach($salons as $salon)
          <option value="{{$salon->id}}">{{salon->name}}</option>
          @endforeach
        </select>

        <label>Service</label>
        <select name="service_id">
          @foreach($service as $service)
          <option value="{{service->id}}">{{service->name}}</option>
          @endforeach
        </select>

        <label>price</label>
        <input class="form-control input-sm" type="text" name="price">

        <label>duration</label>
        <input class="form-control input-sm" type="text" name="duration">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
