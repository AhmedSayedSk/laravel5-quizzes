@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.languages.title')</h3>
    
    {!! Form::model($language, ['method' => 'PUT', 'route' => ['admin.languages.update', $language->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', trans('quickadmin.languages.fields.title').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('symbol', trans('quickadmin.languages.fields.symbol').'', ['class' => 'control-label']) !!}
                    {!! Form::text('symbol', old('symbol'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('symbol'))
                        <p class="help-block">
                            {{ $errors->first('symbol') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($language->image)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$language->image) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$language->image) }}"></a>
                    @endif
                    {!! Form::label('image', trans('quickadmin.languages.fields.image').'', ['class' => 'control-label']) !!}
                    {!! Form::file('image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('image_max_size', 1) !!}
                    {!! Form::hidden('image_max_width', 64) !!}
                    {!! Form::hidden('image_max_height', 64) !!}
                    <p class="help-block"></p>
                    @if($errors->has('image'))
                        <p class="help-block">
                            {{ $errors->first('image') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

