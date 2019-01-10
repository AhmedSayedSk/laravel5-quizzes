<?php

namespace App\Http\Controllers\Admin;

use App\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuizzesRequest;
use App\Http\Requests\Admin\UpdateQuizzesRequest;
use Yajra\DataTables\DataTables;

class QuizzesController extends Controller
{
    /**
     * Display a listing of Quiz.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('quiz_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Quiz::query();
            $query->with("auth");
            $query->with("category");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('quiz_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'quizzes.id',
                'quizzes.slug',
                'quizzes.auth_id',
                'quizzes.category_id',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'quiz_';
                $routeKey = 'admin.quizzes';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('slug', function ($row) {
                return $row->slug ? $row->slug : '';
            });
            $table->editColumn('auth.name', function ($row) {
                return $row->auth ? $row->auth->name : '';
            });
            $table->editColumn('category.icon', function ($row) {
                return $row->category ? $row->category->icon : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.quizzes.index');
    }

    /**
     * Show the form for creating new Quiz.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('quiz_create')) {
            return abort(401);
        }
        
        $auths = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $categories = \App\QuizCategory::get()->pluck('icon', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.quizzes.create', compact('auths', 'categories'));
    }

    /**
     * Store a newly created Quiz in storage.
     *
     * @param  \App\Http\Requests\StoreQuizzesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizzesRequest $request)
    {
        if (! Gate::allows('quiz_create')) {
            return abort(401);
        }
        $quiz = Quiz::create($request->all());



        return redirect()->route('admin.quizzes.index');
    }


    /**
     * Show the form for editing Quiz.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('quiz_edit')) {
            return abort(401);
        }
        
        $auths = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $categories = \App\QuizCategory::get()->pluck('icon', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $quiz = Quiz::findOrFail($id);

        return view('admin.quizzes.edit', compact('quiz', 'auths', 'categories'));
    }

    /**
     * Update Quiz in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizzesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizzesRequest $request, $id)
    {
        if (! Gate::allows('quiz_edit')) {
            return abort(401);
        }
        $quiz = Quiz::findOrFail($id);
        $quiz->update($request->all());



        return redirect()->route('admin.quizzes.index');
    }


    /**
     * Display Quiz.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('quiz_view')) {
            return abort(401);
        }
        
        $auths = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $categories = \App\QuizCategory::get()->pluck('icon', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$quiz_questions = \App\QuizQuestion::where('quiz_id', $id)->get();

        $quiz = Quiz::findOrFail($id);

        return view('admin.quizzes.show', compact('quiz', 'quiz_questions'));
    }


    /**
     * Remove Quiz from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('quiz_delete')) {
            return abort(401);
        }
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();

        return redirect()->route('admin.quizzes.index');
    }

    /**
     * Delete all selected Quiz at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('quiz_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Quiz::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Quiz from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('quiz_delete')) {
            return abort(401);
        }
        $quiz = Quiz::onlyTrashed()->findOrFail($id);
        $quiz->restore();

        return redirect()->route('admin.quizzes.index');
    }

    /**
     * Permanently delete Quiz from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('quiz_delete')) {
            return abort(401);
        }
        $quiz = Quiz::onlyTrashed()->findOrFail($id);
        $quiz->forceDelete();

        return redirect()->route('admin.quizzes.index');
    }
}
