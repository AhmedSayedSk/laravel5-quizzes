@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.quiz-questions.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.quiz-questions.fields.image')</th>
                            <td field-key='image'>@if($quiz_question->image)<a href="{{ asset(env('UPLOAD_PATH').'/' . $quiz_question->image) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $quiz_question->image) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.quiz-questions.fields.quiz')</th>
                            <td field-key='quiz'>{{ $quiz_question->quiz->slug ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.quiz-questions.fields.type')</th>
                            <td field-key='type'>{{ $quiz_question->type->title ?? '' }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#quiz_question_choices" aria-controls="quiz_question_choices" role="tab" data-toggle="tab">Choices</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="quiz_question_choices">
<table class="table table-bordered table-striped {{ count($quiz_question_choices) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.quiz-question-choices.fields.image')</th>
                        <th>@lang('quickadmin.quiz-question-choices.fields.question')</th>
                        <th>@lang('quickadmin.quiz-question-choices.fields.is-answer')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($quiz_question_choices) > 0)
            @foreach ($quiz_question_choices as $quiz_question_choice)
                <tr data-entry-id="{{ $quiz_question_choice->id }}">
                    <td field-key='image'>@if($quiz_question_choice->image)<a href="{{ asset(env('UPLOAD_PATH').'/' . $quiz_question_choice->image) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $quiz_question_choice->image) }}"/></a>@endif</td>
                                <td field-key='question'>{{ $quiz_question_choice->question->image ?? '' }}</td>
                                <td field-key='is_answer'>{{ Form::checkbox("is_answer", 1, $quiz_question_choice->is_answer == 1 ? true : false, ["disabled"]) }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('quiz_question_choice_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.quiz_question_choices.restore', $quiz_question_choice->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('quiz_question_choice_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.quiz_question_choices.perma_del', $quiz_question_choice->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('quiz_question_choice_view')
                                    <a href="{{ route('admin.quiz_question_choices.show',[$quiz_question_choice->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('quiz_question_choice_edit')
                                    <a href="{{ route('admin.quiz_question_choices.edit',[$quiz_question_choice->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('quiz_question_choice_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.quiz_question_choices.destroy', $quiz_question_choice->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.quiz_questions.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


