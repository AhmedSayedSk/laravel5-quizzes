@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.quiz-categories.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.quiz-categories.fields.icon')</th>
                            <td field-key='icon'>@if($quiz_category->icon)<a href="{{ asset(env('UPLOAD_PATH').'/' . $quiz_category->icon) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $quiz_category->icon) }}"/></a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#quizzes" aria-controls="quizzes" role="tab" data-toggle="tab">Quizzes</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="quizzes">
<table class="table table-bordered table-striped {{ count($quizzes) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.quizzes.fields.slug')</th>
                        <th>@lang('quickadmin.quizzes.fields.auth')</th>
                        <th>@lang('quickadmin.quizzes.fields.category')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($quizzes) > 0)
            @foreach ($quizzes as $quiz)
                <tr data-entry-id="{{ $quiz->id }}">
                    <td field-key='slug'>{{ $quiz->slug }}</td>
                                <td field-key='auth'>{{ $quiz->auth->name ?? '' }}</td>
                                <td field-key='category'>{{ $quiz->category->icon ?? '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('quiz_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.quizzes.restore', $quiz->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('quiz_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.quizzes.perma_del', $quiz->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('quiz_view')
                                    <a href="{{ route('admin.quizzes.show',[$quiz->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('quiz_edit')
                                    <a href="{{ route('admin.quizzes.edit',[$quiz->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('quiz_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.quizzes.destroy', $quiz->id])) !!}
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

            <a href="{{ route('admin.quiz_categories.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


