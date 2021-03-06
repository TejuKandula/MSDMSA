@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
<h3> New Team</h3>
    {!! Form::open(['url' => 'teams']) !!}

    <div class="form-group">
        {!! Form::select('school_id', $schools) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tm_number', 'Team Number:') !!}
        {!! Form::text('tm_number',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tm_name', 'Team Name:') !!}
        {!! Form::text('tm_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tm_coach', 'Team Coach:') !!}
        {!! Form::text('tm_coach',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tm_coachemail', 'Team Coach Email:') !!}
        {!! Form::text('tm_coachemail',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tm_coachphone', 'Team Coach Phone:') !!}
        {!! Form::text('tm_coachphone',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    </div>
    </div>
    </div>
    </div>

@stop
