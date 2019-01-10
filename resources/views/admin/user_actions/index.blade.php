@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.user-actions.title')</h3>
    @can('user_action_create')
    <p>
        <a href="{{ route('admin.user_actions.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable @can('user_action_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('user_action_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.user-actions.created_at')</th>
                        <th>@lang('quickadmin.user-actions.fields.user')</th>
                        <th>@lang('quickadmin.user-actions.fields.action')</th>
                        <th>@lang('quickadmin.user-actions.fields.action-model')</th>
                        <th>@lang('quickadmin.user-actions.fields.action-id')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('user_action_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.user_actions.mass_destroy') }}';
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.user_actions.index') !!}';
            window.dtDefaultOptions.columns = [@can('user_action_delete')
                    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endcan{data: 'created_at', name: 'created_at'},
                {data: 'user.name', name: 'user.name'},
                {data: 'action', name: 'action'},
                {data: 'action_model', name: 'action_model'},
                {data: 'action_id', name: 'action_id'},
                
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });
    </script>
@endsection