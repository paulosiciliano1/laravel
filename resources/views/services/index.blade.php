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
          <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$service->id}}</td>
            <td>{{$service->name}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
<div class="col-md-2">
  <button id="create">create</button>
  <button id="edit">edit</button>
  <button id="delete">delete</button>
</div>
@endsection

@section('scripts')
  @parent
  <script src="js/services.js" type="text/javascript"></script>
@endsection
