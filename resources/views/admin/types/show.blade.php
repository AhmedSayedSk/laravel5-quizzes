@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.types.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.types.fields.title')</th>
                            <td field-key='title'>{{ $type->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.types.fields.module')</th>
                            <td field-key='module'>{{ $type->module->title ?? '' }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#quiz_questions" aria-controls="quiz_questions" role="tab" data-toggle="tab">Questions</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="quiz_questions">
<table class="table table-bordered table-striped {{ count($quiz_questions) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.quiz-questions.fields.image')</th>
                        <th>@lang('quickadmin.quiz-questions.fields.quiz')</th>
                        <th>@lang('quickadmin.quiz-questions.fields.type')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($quiz_questions) > 0)
            @foreach ($quiz_questions as $quiz_question)
                <tr data-entry-id="{{ $quiz_question->id }}">
                    <td field-key='image'>@if($quiz_question->image)<a href="{{ asset(env('UPLOAD_PATH').'/' . $quiz_question->image) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $quiz_question->image) }}"/></a>@endif</td>
                                <td field-key='quiz'>{{ $quiz_question->quiz->slug ?? '' }}</td>
                                <td field-key='type'>{{ $quiz_question->type->title ?? '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('quiz_question_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.quiz_questions.restore', $quiz_question->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('quiz_question_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.quiz_questions.perma_del', $quiz_question->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('quiz_question_view')
                                    <a href="{{ route('admin.quiz_questions.show',[$quiz_question->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('quiz_question_edit')
                                    <a href="{{ route('admin.quiz_questions.edit',[$quiz_question->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('quiz_question_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.quiz_questions.destroy', $quiz_question->id])) !!}
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

            <a href="{{ route('admin.types.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


