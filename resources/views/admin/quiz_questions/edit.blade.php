@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.quiz-questions.title')</h3>
    
    {!! Form::model($quiz_question, ['method' => 'PUT', 'route' => ['admin.quiz_questions.update', $quiz_question->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($quiz_question->image)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$quiz_question->image) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$quiz_question->image) }}"></a>
                    @endif
                    {!! Form::label('image', trans('quickadmin.quiz-questions.fields.image').'', ['class' => 'control-label']) !!}
                    {!! Form::file('image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('image_max_size', 2) !!}
                    {!! Form::hidden('image_max_width', 4096) !!}
                    {!! Form::hidden('image_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('image'))
                        <p class="help-block">
                            {{ $errors->first('image') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('quiz_id', trans('quickadmin.quiz-questions.fields.quiz').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('quiz_id', $quizzes, old('quiz_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('quiz_id'))
                        <p class="help-block">
                            {{ $errors->first('quiz_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('type_id', trans('quickadmin.quiz-questions.fields.type').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('type_id', $types, old('type_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('type_id'))
                        <p class="help-block">
                            {{ $errors->first('type_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

