@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.names.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.names.fields.title')</th>
                            <td field-key='title'>{{ $name->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.names.fields.description')</th>
                            <td field-key='description'>{!! $name->description !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.names.fields.module')</th>
                            <td field-key='module'>{{ $name->module->title ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.names.fields.reference-id')</th>
                            <td field-key='reference_id'>{{ $name->reference_id }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.names.fields.language')</th>
                            <td field-key='language'>{{ $name->language->title ?? '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.names.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
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
