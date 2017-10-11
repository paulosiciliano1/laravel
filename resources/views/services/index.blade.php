@extends('layouts.app')

@section('content')
<div class="col-md-8">

      @include('services.create')

      @include('services.edit')
      {{--
      --}}
      <table class="table">
        <caption>Services</caption>
        <thead>
          <tr>
            <th>#</th>
            <th>id</th>
            <th>Service</th>
          </tr>
        </thead>
        <tbody>
          @foreach($services as $key => $service)
          <tr id="data_{{$service->id}}">
            <th scope="row"><input type="checkbox" name="checkbox[]" value="{{$service->id}}">_{{$key}}</th>
            <td>{{$service->id}}</td>
            <td>{{$service->name}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $services->links() }}
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
  <script src="js/services.js" type="text/javascript"></script>
@endsection
