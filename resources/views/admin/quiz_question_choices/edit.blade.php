@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.quiz-question-choices.title')</h3>
    
    {!! Form::model($quiz_question_choice, ['method' => 'PUT', 'route' => ['admin.quiz_question_choices.update', $quiz_question_choice->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($quiz_question_choice->image)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$quiz_question_choice->image) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$quiz_question_choice->image) }}"></a>
                    @endif
                    {!! Form::label('image', trans('quickadmin.quiz-question-choices.fields.image').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('question_id', trans('quickadmin.quiz-question-choices.fields.question').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('question_id', $questions, old('question_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('question_id'))
                        <p class="help-block">
                            {{ $errors->first('question_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('is_answer', trans('quickadmin.quiz-question-choices.fields.is-answer').'*', ['class' => 'control-label']) !!}
                    {!! Form::hidden('is_answer', 0) !!}
                    {!! Form::checkbox('is_answer', 1, old('is_answer', old('is_answer')), ['required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('is_answer'))
                        <p class="help-block">
                            {{ $errors->first('is_answer') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

