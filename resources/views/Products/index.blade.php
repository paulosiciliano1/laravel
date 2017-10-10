@extends('layouts.app')

@section('content')
<div class="col-md-8">
      <table class="table">
        <caption>Products</caption>
        <thead>
          <tr>
            <th>#</th>
            <th>id</th>
            <th>Salon</th>
            <th>Service</th>
            <th>price</th>
            <th>duration</th>
          </tr>
        </thead>
        <tbody>
          {{--'id','salon_id','service_id','price','duration'--}}
          @foreach($products as $key => $product)
          <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$product->id}}</td>
            <td>{{$product->salon()}}</td>
            <td>{{$product->service()}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->duration}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection

@section('scripts')
  @parent
  <script src="js/products.js" type="text/javascript"></script>
@endsection
