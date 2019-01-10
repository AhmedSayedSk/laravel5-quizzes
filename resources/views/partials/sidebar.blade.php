@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            @can('users_collection_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>@lang('quickadmin.users-collection.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('quickadmin.users.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_answer_access')
                    <li>
                        <a href="{{ route('admin.user_answers.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('quickadmin.user-answers.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('role_access')
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('quickadmin.roles.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_action_access')
                    <li>
                        <a href="{{ route('admin.user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span>@lang('quickadmin.user-actions.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('quizzes_collection_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>@lang('quickadmin.quizzes-collection.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('quiz_access')
                    <li>
                        <a href="{{ route('admin.quizzes.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('quickadmin.quizzes.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('quiz_category_access')
                    <li>
                        <a href="{{ route('admin.quiz_categories.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('quickadmin.quiz-categories.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('questions_collection_access')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gears"></i>
                            <span>@lang('quickadmin.questions-collection.title')</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            @can('quiz_question_access')
                            <li>
                                <a href="{{ route('admin.quiz_questions.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span>@lang('quickadmin.quiz-questions.title')</span>
                                </a>
                            </li>@endcan
                            
                            @can('quiz_question_choice_access')
                            <li>
                                <a href="{{ route('admin.quiz_question_choices.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span>@lang('quickadmin.quiz-question-choices.title')</span>
                                </a>
                            </li>@endcan
                            
                        </ul>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('system_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gear"></i>
                    <span>@lang('quickadmin.system.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('module_access')
                    <li>
                        <a href="{{ route('admin.modules.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('quickadmin.modules.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('type_access')
                    <li>
                        <a href="{{ route('admin.types.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('quickadmin.types.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('name_access')
                    <li>
                        <a href="{{ route('admin.names.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('quickadmin.names.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('language_access')
                    <li>
                        <a href="{{ route('admin.languages.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('quickadmin.languages.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            

            

            



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

