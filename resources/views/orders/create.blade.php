<div class="modal fade" id="order_create">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="orders.store" method="post">
      <div class="modal-body">
        {{--'product_id', 'user_id', 'created_at', 'arrival_time'--}}
        <input type = "text" name = "product_id">
        <input type = "text" name = "user_id">
        <p>Created at: <input type="text" name="created_at" id="created_at"></p>
        <p>Arrival time: <input type="text" name="arrival_time" id="arrival_time"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
