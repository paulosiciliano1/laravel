@extends('layouts.app')

@section('content')
{{--'order_id', 'user_id', 'created_at', 'arrival_time'--}}
<div class="col-md-8">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>id</th>
            <th>user</th>
            <th>created_at</th>
            <th>arrival_time</th>
          </tr>
        </thead>
        <tbody>
          {{--'id','salon_id','service_id','price','duration'--}}
          @foreach($orders as $key => $order)
            <tr>
              <th scope="row">{{$key}}</th>
              <td>{{$order->id}}</td>
              <td>{{$order->user()}}</td>
              <td>{{$order->created_at}}</td>
              <td>{{$order->arrival_time}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection

@section('scripts')
  @parent
  <script src="js/orders.js" type="text/javascript"></script>
@endsection
