@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.user-answers.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.user-answers.fields.auth')</th>
                            <td field-key='auth'>{{ $user_answer->auth->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.user-answers.fields.choice')</th>
                            <td field-key='choice'>{{ $user_answer->choice->image ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.user-answers.fields.answer')</th>
                            <td field-key='answer'>{!! $user_answer->answer !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.user_answers.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
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
