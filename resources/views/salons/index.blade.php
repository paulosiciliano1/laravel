@extends('layouts.app')

@section('content')
<div class="col-md-8">
  {{--id', 'name', 'address', 'created_at','updated_at'--}}
  @include('salons.create')
  @include('salons.edit')
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
          <tr id="data_{{$salon->id}}">
            <th scope="row"><input type="checkbox" name="checkbox[]" value="{{$salon->id}}">_{{$key}}</th>
            <td>{{$salon->id}}</td>
            <td>{{$salon->name}}</td>
            <td>{{$salon->address}}</td>
            <td>{{$salon->created_at}}</td>
            <td>{{$salon->updated_at}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $salons->links() }}
</div>
<div class="col-md-2">
  <ul>
    <li><button id="create">create</button></li>
    <li><button id="edit">edit</button></li>
    <li><button id="delete">delete</button></li>
  </ul>
</div>
@endsection

@section('scripts')
  @parent
  <script src="js/salons.js" type="text/javascript"></script>
@endsection
