@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style= "color: black">Players</h4>
                      <a href="{{url('/players/create')}}" class="btn btn-success">Add New Player</a>
                      </div>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Player No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Street</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Status</th>
            <th>School Id</th>
            <th>Team Id</th>
            
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($players as $player)
            <tr>
            
                <td>{{ $player->p_number }}</td>
                <td>{{ $player->pl_name }}</td>
                 <td>{{ $player->pf_name }}</td>
                <td>{{ $player->p_street }}</td>
                <td>{{ $player->p_city }}</td>
                <td>{{ $player->p_state }}</td>
                <td>{{ $player->p_zip }}</td>
                <td>{{ $player->p_email }}</td>
                <td>{{ $player->p_phone }}</td>
                <td>{{ $player->p_estatus }}</td>
                <td>{{ $player->school->s_number }}</td>
                <td>{{ $player->team->tm_number }}</td>
                <td><a href="{{url('players',$player->id)}}" class="btn btn-primary">View</a></td>
                <td><a href="{{route('payers.edit',$player->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['players.destroy', $player->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
    </div>
        </div>
    </div>
</div>
@endsection
