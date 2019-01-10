@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.quiz-categories.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.quiz_categories.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('icon', trans('quickadmin.quiz-categories.fields.icon').'*', ['class' => 'control-label']) !!}
                    {!! Form::file('icon', ['class' => 'form-control', 'style' => 'margin-top: 4px;', 'required' => '']) !!}
                    {!! Form::hidden('icon_max_size', 2) !!}
                    {!! Form::hidden('icon_max_width', 4096) !!}
                    {!! Form::hidden('icon_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('icon'))
                        <p class="help-block">
                            {{ $errors->first('icon') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

