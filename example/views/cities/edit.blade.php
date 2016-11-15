@extends('app')

@section('content')
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Edit city</h3>
        </div>
        <div class="panel-body">
            {!! Form::model($object, array('route' => ['cities.update', $object->id], 'method' => 'PUT')) !!}
            @include('cities._form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection