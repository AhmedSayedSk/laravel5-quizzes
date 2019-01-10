@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.user-actions.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.user-actions.fields.user')</th>
                            <td field-key='user'>{{ $user_action->user->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.user-actions.fields.action')</th>
                            <td field-key='action'>{{ $user_action->action }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.user-actions.fields.action-model')</th>
                            <td field-key='action_model'>{{ $user_action->action_model }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.user-actions.fields.action-id')</th>
                            <td field-key='action_id'>{{ $user_action->action_id }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.user_actions.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


