@extends('layouts.app')

@section('content')

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Help</h1>
                    <h2>products</h2>
                    <h2>orders</h2>
                    <h2>users</h2>
                    <h2>salons</h2>
                    <h2>services</h2>
                      </ul>
                    </div>
                </div>
            </div>
        </div>

@endsection
