<?php

namespace App\Http\Controllers\Admin;

use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTypesRequest;
use App\Http\Requests\Admin\UpdateTypesRequest;
use Yajra\DataTables\DataTables;

class TypesController extends Controller
{
    /**
     * Display a listing of Type.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('type_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Type::query();
            $query->with("module");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('type_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'types.id',
                'types.title',
                'types.module_id',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'type_';
                $routeKey = 'admin.types';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('module.title', function ($row) {
                return $row->module ? $row->module->title : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.types.index');
    }

    /**
     * Show the form for creating new Type.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('type_create')) {
            return abort(401);
        }
        
        $modules = \App\Module::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.types.create', compact('modules'));
    }

    /**
     * Store a newly created Type in storage.
     *
     * @param  \App\Http\Requests\StoreTypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypesRequest $request)
    {
        if (! Gate::allows('type_create')) {
            return abort(401);
        }
        $type = Type::create($request->all());



        return redirect()->route('admin.types.index');
    }


    /**
     * Show the form for editing Type.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('type_edit')) {
            return abort(401);
        }
        
        $modules = \App\Module::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $type = Type::findOrFail($id);

        return view('admin.types.edit', compact('type', 'modules'));
    }

    /**
     * Update Type in storage.
     *
     * @param  \App\Http\Requests\UpdateTypesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypesRequest $request, $id)
    {
        if (! Gate::allows('type_edit')) {
            return abort(401);
        }
        $type = Type::findOrFail($id);
        $type->update($request->all());



        return redirect()->route('admin.types.index');
    }


    /**
     * Display Type.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('type_view')) {
            return abort(401);
        }
        
        $modules = \App\Module::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$quiz_questions = \App\QuizQuestion::where('type_id', $id)->get();

        $type = Type::findOrFail($id);

        return view('admin.types.show', compact('type', 'quiz_questions'));
    }


    /**
     * Remove Type from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('type_delete')) {
            return abort(401);
        }
        $type = Type::findOrFail($id);
        $type->delete();

        return redirect()->route('admin.types.index');
    }

    /**
     * Delete all selected Type at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('type_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Type::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Type from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('type_delete')) {
            return abort(401);
        }
        $type = Type::onlyTrashed()->findOrFail($id);
        $type->restore();

        return redirect()->route('admin.types.index');
    }

    /**
     * Permanently delete Type from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('type_delete')) {
            return abort(401);
        }
        $type = Type::onlyTrashed()->findOrFail($id);
        $type->forceDelete();

        return redirect()->route('admin.types.index');
    }
}
