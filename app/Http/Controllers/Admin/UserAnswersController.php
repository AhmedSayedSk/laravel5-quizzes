<?php

namespace App\Http\Controllers\Admin;

use App\UserAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserAnswersRequest;
use App\Http\Requests\Admin\UpdateUserAnswersRequest;
use Yajra\DataTables\DataTables;

class UserAnswersController extends Controller
{
    /**
     * Display a listing of UserAnswer.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('user_answer_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = UserAnswer::query();
            $query->with("auth");
            $query->with("choice");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('user_answer_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'user_answers.id',
                'user_answers.auth_id',
                'user_answers.choice_id',
                'user_answers.answer',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'user_answer_';
                $routeKey = 'admin.user_answers';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('auth.name', function ($row) {
                return $row->auth ? $row->auth->name : '';
            });
            $table->editColumn('choice.image', function ($row) {
                return $row->choice ? $row->choice->image : '';
            });
            $table->editColumn('answer', function ($row) {
                return $row->answer ? $row->answer : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.user_answers.index');
    }

    /**
     * Show the form for creating new UserAnswer.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('user_answer_create')) {
            return abort(401);
        }
        
        $auths = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $choices = \App\QuizQuestionChoice::get()->pluck('image', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.user_answers.create', compact('auths', 'choices'));
    }

    /**
     * Store a newly created UserAnswer in storage.
     *
     * @param  \App\Http\Requests\StoreUserAnswersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserAnswersRequest $request)
    {
        if (! Gate::allows('user_answer_create')) {
            return abort(401);
        }
        $user_answer = UserAnswer::create($request->all());



        return redirect()->route('admin.user_answers.index');
    }


    /**
     * Show the form for editing UserAnswer.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('user_answer_edit')) {
            return abort(401);
        }
        
        $auths = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $choices = \App\QuizQuestionChoice::get()->pluck('image', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $user_answer = UserAnswer::findOrFail($id);

        return view('admin.user_answers.edit', compact('user_answer', 'auths', 'choices'));
    }

    /**
     * Update UserAnswer in storage.
     *
     * @param  \App\Http\Requests\UpdateUserAnswersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserAnswersRequest $request, $id)
    {
        if (! Gate::allows('user_answer_edit')) {
            return abort(401);
        }
        $user_answer = UserAnswer::findOrFail($id);
        $user_answer->update($request->all());



        return redirect()->route('admin.user_answers.index');
    }


    /**
     * Display UserAnswer.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('user_answer_view')) {
            return abort(401);
        }
        $user_answer = UserAnswer::findOrFail($id);

        return view('admin.user_answers.show', compact('user_answer'));
    }


    /**
     * Remove UserAnswer from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('user_answer_delete')) {
            return abort(401);
        }
        $user_answer = UserAnswer::findOrFail($id);
        $user_answer->delete();

        return redirect()->route('admin.user_answers.index');
    }

    /**
     * Delete all selected UserAnswer at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('user_answer_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = UserAnswer::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore UserAnswer from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('user_answer_delete')) {
            return abort(401);
        }
        $user_answer = UserAnswer::onlyTrashed()->findOrFail($id);
        $user_answer->restore();

        return redirect()->route('admin.user_answers.index');
    }

    /**
     * Permanently delete UserAnswer from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('user_answer_delete')) {
            return abort(401);
        }
        $user_answer = UserAnswer::onlyTrashed()->findOrFail($id);
        $user_answer->forceDelete();

        return redirect()->route('admin.user_answers.index');
    }
}
