<?php

namespace App\Http\Controllers\Admin;

use App\QuizCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuizCategoriesRequest;
use App\Http\Requests\Admin\UpdateQuizCategoriesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class QuizCategoriesController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of QuizCategory.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('quiz_category_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = QuizCategory::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('quiz_category_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'quiz_categories.id',
                'quiz_categories.icon',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'quiz_category_';
                $routeKey = 'admin.quiz_categories';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('icon', function ($row) {
                if($row->icon) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->icon) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->icon) .'"/>'; };
            });

            $table->rawColumns(['actions','massDelete','icon']);

            return $table->make(true);
        }

        return view('admin.quiz_categories.index');
    }

    /**
     * Show the form for creating new QuizCategory.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('quiz_category_create')) {
            return abort(401);
        }
        return view('admin.quiz_categories.create');
    }

    /**
     * Store a newly created QuizCategory in storage.
     *
     * @param  \App\Http\Requests\StoreQuizCategoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizCategoriesRequest $request)
    {
        if (! Gate::allows('quiz_category_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $quiz_category = QuizCategory::create($request->all());



        return redirect()->route('admin.quiz_categories.index');
    }


    /**
     * Show the form for editing QuizCategory.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('quiz_category_edit')) {
            return abort(401);
        }
        $quiz_category = QuizCategory::findOrFail($id);

        return view('admin.quiz_categories.edit', compact('quiz_category'));
    }

    /**
     * Update QuizCategory in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizCategoriesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizCategoriesRequest $request, $id)
    {
        if (! Gate::allows('quiz_category_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $quiz_category = QuizCategory::findOrFail($id);
        $quiz_category->update($request->all());



        return redirect()->route('admin.quiz_categories.index');
    }


    /**
     * Display QuizCategory.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('quiz_category_view')) {
            return abort(401);
        }
        $quizzes = \App\Quiz::where('category_id', $id)->get();

        $quiz_category = QuizCategory::findOrFail($id);

        return view('admin.quiz_categories.show', compact('quiz_category', 'quizzes'));
    }


    /**
     * Remove QuizCategory from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('quiz_category_delete')) {
            return abort(401);
        }
        $quiz_category = QuizCategory::findOrFail($id);
        $quiz_category->delete();

        return redirect()->route('admin.quiz_categories.index');
    }

    /**
     * Delete all selected QuizCategory at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('quiz_category_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = QuizCategory::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore QuizCategory from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('quiz_category_delete')) {
            return abort(401);
        }
        $quiz_category = QuizCategory::onlyTrashed()->findOrFail($id);
        $quiz_category->restore();

        return redirect()->route('admin.quiz_categories.index');
    }

    /**
     * Permanently delete QuizCategory from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('quiz_category_delete')) {
            return abort(401);
        }
        $quiz_category = QuizCategory::onlyTrashed()->findOrFail($id);
        $quiz_category->forceDelete();

        return redirect()->route('admin.quiz_categories.index');
    }
}
