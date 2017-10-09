@extends('layouts.app')

@section('content')
<div class="col-md-8">
      <caption>Services</caption>
      <table class="table">
        {{--'id', 'name'--}}
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
@endsection
  {{--
@section('scripts')
  @parent

    script -edit
    script -create
    script -delete

@endsection
    --}}
