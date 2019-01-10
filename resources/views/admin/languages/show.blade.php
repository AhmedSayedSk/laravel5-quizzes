@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.languages.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.languages.fields.title')</th>
                            <td field-key='title'>{{ $language->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.languages.fields.symbol')</th>
                            <td field-key='symbol'>{{ $language->symbol }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.languages.fields.image')</th>
                            <td field-key='image'>@if($language->image)<a href="{{ asset(env('UPLOAD_PATH').'/' . $language->image) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $language->image) }}"/></a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#names" aria-controls="names" role="tab" data-toggle="tab">Names</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="names">
<table class="table table-bordered table-striped {{ count($names) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.names.fields.title')</th>
                        <th>@lang('quickadmin.names.fields.description')</th>
                        <th>@lang('quickadmin.names.fields.module')</th>
                        <th>@lang('quickadmin.names.fields.reference-id')</th>
                        <th>@lang('quickadmin.names.fields.language')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($names) > 0)
            @foreach ($names as $name)
                <tr data-entry-id="{{ $name->id }}">
                    <td field-key='title'>{{ $name->title }}</td>
                                <td field-key='description'>{!! $name->description !!}</td>
                                <td field-key='module'>{{ $name->module->title ?? '' }}</td>
                                <td field-key='reference_id'>{{ $name->reference_id }}</td>
                                <td field-key='language'>{{ $name->language->title ?? '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('name_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.names.restore', $name->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('name_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.names.perma_del', $name->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('name_view')
                                    <a href="{{ route('admin.names.show',[$name->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('name_edit')
                                    <a href="{{ route('admin.names.edit',[$name->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('name_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.names.destroy', $name->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.languages.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


