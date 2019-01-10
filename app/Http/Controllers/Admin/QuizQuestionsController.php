<?php

namespace App\Http\Controllers\Admin;

use App\QuizQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuizQuestionsRequest;
use App\Http\Requests\Admin\UpdateQuizQuestionsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class QuizQuestionsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of QuizQuestion.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('quiz_question_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = QuizQuestion::query();
            $query->with("quiz");
            $query->with("type");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('quiz_question_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'quiz_questions.id',
                'quiz_questions.image',
                'quiz_questions.quiz_id',
                'quiz_questions.type_id',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'quiz_question_';
                $routeKey = 'admin.quiz_questions';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('image', function ($row) {
                if($row->image) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->image) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->image) .'"/>'; };
            });
            $table->editColumn('quiz.slug', function ($row) {
                return $row->quiz ? $row->quiz->slug : '';
            });
            $table->editColumn('type.title', function ($row) {
                return $row->type ? $row->type->title : '';
            });

            $table->rawColumns(['actions','massDelete','image']);

            return $table->make(true);
        }

        return view('admin.quiz_questions.index');
    }

    /**
     * Show the form for creating new QuizQuestion.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('quiz_question_create')) {
            return abort(401);
        }
        
        $quizzes = \App\Quiz::get()->pluck('slug', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $types = \App\Type::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.quiz_questions.create', compact('quizzes', 'types'));
    }

    /**
     * Store a newly created QuizQuestion in storage.
     *
     * @param  \App\Http\Requests\StoreQuizQuestionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizQuestionsRequest $request)
    {
        if (! Gate::allows('quiz_question_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $quiz_question = QuizQuestion::create($request->all());



        return redirect()->route('admin.quiz_questions.index');
    }


    /**
     * Show the form for editing QuizQuestion.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('quiz_question_edit')) {
            return abort(401);
        }
        
        $quizzes = \App\Quiz::get()->pluck('slug', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $types = \App\Type::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $quiz_question = QuizQuestion::findOrFail($id);

        return view('admin.quiz_questions.edit', compact('quiz_question', 'quizzes', 'types'));
    }

    /**
     * Update QuizQuestion in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizQuestionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizQuestionsRequest $request, $id)
    {
        if (! Gate::allows('quiz_question_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $quiz_question = QuizQuestion::findOrFail($id);
        $quiz_question->update($request->all());



        return redirect()->route('admin.quiz_questions.index');
    }


    /**
     * Display QuizQuestion.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('quiz_question_view')) {
            return abort(401);
        }
        
        $quizzes = \App\Quiz::get()->pluck('slug', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $types = \App\Type::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$quiz_question_choices = \App\QuizQuestionChoice::where('question_id', $id)->get();

        $quiz_question = QuizQuestion::findOrFail($id);

        return view('admin.quiz_questions.show', compact('quiz_question', 'quiz_question_choices'));
    }


    /**
     * Remove QuizQuestion from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('quiz_question_delete')) {
            return abort(401);
        }
        $quiz_question = QuizQuestion::findOrFail($id);
        $quiz_question->delete();

        return redirect()->route('admin.quiz_questions.index');
    }

    /**
     * Delete all selected QuizQuestion at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('quiz_question_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = QuizQuestion::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore QuizQuestion from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('quiz_question_delete')) {
            return abort(401);
        }
        $quiz_question = QuizQuestion::onlyTrashed()->findOrFail($id);
        $quiz_question->restore();

        return redirect()->route('admin.quiz_questions.index');
    }

    /**
     * Permanently delete QuizQuestion from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('quiz_question_delete')) {
            return abort(401);
        }
        $quiz_question = QuizQuestion::onlyTrashed()->findOrFail($id);
        $quiz_question->forceDelete();

        return redirect()->route('admin.quiz_questions.index');
    }
}
