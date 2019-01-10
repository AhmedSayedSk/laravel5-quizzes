@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.quiz-categories.title')</h3>
    
    {!! Form::model($quiz_category, ['method' => 'PUT', 'route' => ['admin.quiz_categories.update', $quiz_category->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($quiz_category->icon)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$quiz_category->icon) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$quiz_category->icon) }}"></a>
                    @endif
                    {!! Form::label('icon', trans('quickadmin.quiz-categories.fields.icon').'*', ['class' => 'control-label']) !!}
                    {!! Form::file('icon', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
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

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

