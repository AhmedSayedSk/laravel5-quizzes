@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.user-answers.title')</h3>
    
    {!! Form::model($user_answer, ['method' => 'PUT', 'route' => ['admin.user_answers.update', $user_answer->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('auth_id', trans('quickadmin.user-answers.fields.auth').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('auth_id', $auths, old('auth_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('auth_id'))
                        <p class="help-block">
                            {{ $errors->first('auth_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('choice_id', trans('quickadmin.user-answers.fields.choice').'', ['class' => 'control-label']) !!}
                    {!! Form::select('choice_id', $choices, old('choice_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('choice_id'))
                        <p class="help-block">
                            {{ $errors->first('choice_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('answer', trans('quickadmin.user-answers.fields.answer').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('answer', old('answer'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('answer'))
                        <p class="help-block">
                            {{ $errors->first('answer') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
                  CKEDITOR.replace($(this).attr('id'),{
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
        });
    </script>

@stop