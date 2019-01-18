@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        		<div class="text-center" style="margin-bottom: 20px">
        			<img src="{{ asset('images/admin-login-png-6.png') }}" style="width: 64px; margin-bottom: -10px">
              <h2>{{ ucfirst(config('app.name')) }} @lang('quickadmin.qa_login')</h2>
              <h3 style="margin-top: 0px;">@lang('main.control_panel')</h3>
        		</div>
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>@lang('quickadmin.qa_whoops')</strong> @lang('quickadmin.qa_there_were_problems_with_input'):
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('invalid_inputs'))
                    	<div class="alert alert-danger">
 												{{ session()->get('invalid_inputs') }}
                    	</div>
                    @endif

                    <form class="form-horizontal"
                        role="form"
                        method="POST"
                        action="{{ route('auth.login') }}">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-4 control-label">@lang('quickadmin.qa_email')</label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">@lang('quickadmin.qa_password')</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('auth.password.reset') }}">@lang('quickadmin.qa_forgot_password')</a>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <label>
                                    <input type="checkbox"
                                           name="remember"> @lang('quickadmin.qa_remember_me')
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary"
                                        style="margin-right: 15px;">
                                    @lang('quickadmin.qa_login')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection