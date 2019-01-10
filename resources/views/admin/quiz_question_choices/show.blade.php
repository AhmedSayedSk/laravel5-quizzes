@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.quiz-question-choices.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.quiz-question-choices.fields.image')</th>
                            <td field-key='image'>@if($quiz_question_choice->image)<a href="{{ asset(env('UPLOAD_PATH').'/' . $quiz_question_choice->image) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $quiz_question_choice->image) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.quiz-question-choices.fields.question')</th>
                            <td field-key='question'>{{ $quiz_question_choice->question->image ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.quiz-question-choices.fields.is-answer')</th>
                            <td field-key='is_answer'>{{ Form::checkbox("is_answer", 1, $quiz_question_choice->is_answer == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#user_answers" aria-controls="user_answers" role="tab" data-toggle="tab">Answers</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="user_answers">
<table class="table table-bordered table-striped {{ count($user_answers) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.user-answers.fields.auth')</th>
                        <th>@lang('quickadmin.user-answers.fields.choice')</th>
                        <th>@lang('quickadmin.user-answers.fields.answer')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($user_answers) > 0)
            @foreach ($user_answers as $user_answer)
                <tr data-entry-id="{{ $user_answer->id }}">
                    <td field-key='auth'>{{ $user_answer->auth->name ?? '' }}</td>
                                <td field-key='choice'>{{ $user_answer->choice->image ?? '' }}</td>
                                <td field-key='answer'>{!! $user_answer->answer !!}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('user_answer_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.user_answers.restore', $user_answer->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('user_answer_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.user_answers.perma_del', $user_answer->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('user_answer_view')
                                    <a href="{{ route('admin.user_answers.show',[$user_answer->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('user_answer_edit')
                                    <a href="{{ route('admin.user_answers.edit',[$user_answer->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('user_answer_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.user_answers.destroy', $user_answer->id])) !!}
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

            <a href="{{ route('admin.quiz_question_choices.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


