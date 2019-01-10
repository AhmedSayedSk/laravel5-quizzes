<?php

namespace App\Http\Controllers\Admin;

use App\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreModulesRequest;
use App\Http\Requests\Admin\UpdateModulesRequest;
use Yajra\DataTables\DataTables;

class ModulesController extends Controller
{
    /**
     * Display a listing of Module.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('module_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Module::query();
            $query->with("parent");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('module_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'modules.id',
                'modules.title',
                'modules.parent_id',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'module_';
                $routeKey = 'admin.modules';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('parent.title', function ($row) {
                return $row->parent ? $row->parent->title : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.modules.index');
    }

    /**
     * Show the form for creating new Module.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('module_create')) {
            return abort(401);
        }
        
        $parents = \App\Module::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.modules.create', compact('parents'));
    }

    /**
     * Store a newly created Module in storage.
     *
     * @param  \App\Http\Requests\StoreModulesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModulesRequest $request)
    {
        if (! Gate::allows('module_create')) {
            return abort(401);
        }
        $module = Module::create($request->all());



        return redirect()->route('admin.modules.index');
    }


    /**
     * Show the form for editing Module.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('module_edit')) {
            return abort(401);
        }
        
        $parents = \App\Module::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $module = Module::findOrFail($id);

        return view('admin.modules.edit', compact('module', 'parents'));
    }

    /**
     * Update Module in storage.
     *
     * @param  \App\Http\Requests\UpdateModulesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModulesRequest $request, $id)
    {
        if (! Gate::allows('module_edit')) {
            return abort(401);
        }
        $module = Module::findOrFail($id);
        $module->update($request->all());



        return redirect()->route('admin.modules.index');
    }


    /**
     * Display Module.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('module_view')) {
            return abort(401);
        }
        
        $parents = \App\Module::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$modules = \App\Module::where('parent_id', $id)->get();$types = \App\Type::where('module_id', $id)->get();$names = \App\Name::where('module_id', $id)->get();

        $module = Module::findOrFail($id);

        return view('admin.modules.show', compact('module', 'modules', 'types', 'names'));
    }


    /**
     * Remove Module from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('module_delete')) {
            return abort(401);
        }
        $module = Module::findOrFail($id);
        $module->delete();

        return redirect()->route('admin.modules.index');
    }

    /**
     * Delete all selected Module at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('module_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Module::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Module from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('module_delete')) {
            return abort(401);
        }
        $module = Module::onlyTrashed()->findOrFail($id);
        $module->restore();

        return redirect()->route('admin.modules.index');
    }

    /**
     * Permanently delete Module from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('module_delete')) {
            return abort(401);
        }
        $module = Module::onlyTrashed()->findOrFail($id);
        $module->forceDelete();

        return redirect()->route('admin.modules.index');
    }
}
