@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.user-actions.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.user_actions.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

