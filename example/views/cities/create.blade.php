@extends('app')

@section('content')
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">New city</h3>
        </div>
        <div class="panel-body">
            {!! Form::open(array('route' => 'cities.store', 'method' => 'POST')) !!}
            @include('cities._form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection