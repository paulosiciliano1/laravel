@extends('layouts.app')

@section('content')
<div class="col-md-8">
  {{--id', 'name', 'address', 'created_at','updated_at'--}}
      <table class="table">
        <caption>Salons</caption>
        <thead>
          <tr>
            <th>#</th>
            <th>id</th>
            <th>name</th>
            <th>address</th>
            <th>created_at</th>
            <th>updated_at</th>
          </tr>
        </thead>
        <tbody>
          {{--'id','salon_id','service_id','price','duration'--}}
          @foreach($salons as $key => $salon)
          <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$salon->id}}</td>
            <td>{{$salon->name}}</td>
            <td>{{$salon->address}}</td>
            <td>{{$salon->created_at}}</td>
            <td>{{$salon->updated_at}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection

@section('scripts')
  @parent
  <script src="js/salons.js" type="text/javascript"></script>
@endsection
