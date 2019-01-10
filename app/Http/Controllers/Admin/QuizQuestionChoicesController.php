<?php

namespace App\Http\Controllers\Admin;

use App\QuizQuestionChoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuizQuestionChoicesRequest;
use App\Http\Requests\Admin\UpdateQuizQuestionChoicesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class QuizQuestionChoicesController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of QuizQuestionChoice.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('quiz_question_choice_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = QuizQuestionChoice::query();
            $query->with("question");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('quiz_question_choice_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'quiz_question_choices.id',
                'quiz_question_choices.image',
                'quiz_question_choices.question_id',
                'quiz_question_choices.is_answer',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'quiz_question_choice_';
                $routeKey = 'admin.quiz_question_choices';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('image', function ($row) {
                if($row->image) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->image) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->image) .'"/>'; };
            });
            $table->editColumn('question.image', function ($row) {
                return $row->question ? $row->question->image : '';
            });
            $table->editColumn('is_answer', function ($row) {
                return \Form::checkbox("is_answer", 1, $row->is_answer == 1, ["disabled"]);
            });

            $table->rawColumns(['actions','massDelete','image','is_answer']);

            return $table->make(true);
        }

        return view('admin.quiz_question_choices.index');
    }

    /**
     * Show the form for creating new QuizQuestionChoice.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('quiz_question_choice_create')) {
            return abort(401);
        }
        
        $questions = \App\QuizQuestion::get()->pluck('image', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.quiz_question_choices.create', compact('questions'));
    }

    /**
     * Store a newly created QuizQuestionChoice in storage.
     *
     * @param  \App\Http\Requests\StoreQuizQuestionChoicesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizQuestionChoicesRequest $request)
    {
        if (! Gate::allows('quiz_question_choice_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $quiz_question_choice = QuizQuestionChoice::create($request->all());



        return redirect()->route('admin.quiz_question_choices.index');
    }


    /**
     * Show the form for editing QuizQuestionChoice.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('quiz_question_choice_edit')) {
            return abort(401);
        }
        
        $questions = \App\QuizQuestion::get()->pluck('image', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $quiz_question_choice = QuizQuestionChoice::findOrFail($id);

        return view('admin.quiz_question_choices.edit', compact('quiz_question_choice', 'questions'));
    }

    /**
     * Update QuizQuestionChoice in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizQuestionChoicesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizQuestionChoicesRequest $request, $id)
    {
        if (! Gate::allows('quiz_question_choice_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $quiz_question_choice = QuizQuestionChoice::findOrFail($id);
        $quiz_question_choice->update($request->all());



        return redirect()->route('admin.quiz_question_choices.index');
    }


    /**
     * Display QuizQuestionChoice.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('quiz_question_choice_view')) {
            return abort(401);
        }
        
        $questions = \App\QuizQuestion::get()->pluck('image', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$user_answers = \App\UserAnswer::where('choice_id', $id)->get();

        $quiz_question_choice = QuizQuestionChoice::findOrFail($id);

        return view('admin.quiz_question_choices.show', compact('quiz_question_choice', 'user_answers'));
    }


    /**
     * Remove QuizQuestionChoice from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('quiz_question_choice_delete')) {
            return abort(401);
        }
        $quiz_question_choice = QuizQuestionChoice::findOrFail($id);
        $quiz_question_choice->delete();

        return redirect()->route('admin.quiz_question_choices.index');
    }

    /**
     * Delete all selected QuizQuestionChoice at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('quiz_question_choice_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = QuizQuestionChoice::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore QuizQuestionChoice from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('quiz_question_choice_delete')) {
            return abort(401);
        }
        $quiz_question_choice = QuizQuestionChoice::onlyTrashed()->findOrFail($id);
        $quiz_question_choice->restore();

        return redirect()->route('admin.quiz_question_choices.index');
    }

    /**
     * Permanently delete QuizQuestionChoice from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('quiz_question_choice_delete')) {
            return abort(401);
        }
        $quiz_question_choice = QuizQuestionChoice::onlyTrashed()->findOrFail($id);
        $quiz_question_choice->forceDelete();

        return redirect()->route('admin.quiz_question_choices.index');
    }
}
