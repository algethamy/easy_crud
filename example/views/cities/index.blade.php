@extends('app')

@section('content')
    <div class="panel panel-success ">
        <div class="panel-heading">
            <a class="btn btn-default pull-left" href="{{ route('cities.create') }}"><i class="fa fa-plus fa-lg"></i>&nbsp;   New</a>
            <h3 class="panel-title">Cities</h3>
        </div>
        <div class="panel-body">
            <table id="data_table" class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Control</th>
                </tr>
                </thead>
                <tbody>

                @foreach($objects as $city)
                    <tr>
                        <td>{{ $city->id }}</td>
                        <td>{{ $city->name }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('cities.edit', $city->id) }}">
                                <i class="fa fa-edit fa-lg"></i>&nbsp; Edit
                            </a>
                            <button class='btn btn-danger delete' data-toggle="modal" data-target=".modal-danger-{{ $city->id }}">
                                <i class="fa fa-times fa-lg"></i> &nbsp; Delete
                            </button>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            <div class="panel-footer text-center">
                <a class="btn btn-info" href="#"><i class="fa fa-undo fa-gl"></i> Back</a>
            </div>
        </div>
    </div>
@endsection