<?php

namespace App\Http\Controllers\Admin;

use App\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreNamesRequest;
use App\Http\Requests\Admin\UpdateNamesRequest;
use Yajra\DataTables\DataTables;

class NamesController extends Controller
{
    /**
     * Display a listing of Name.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('name_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Name::query();
            $query->with("module");
            $query->with("language");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('name_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'names.id',
                'names.title',
                'names.description',
                'names.module_id',
                'names.reference_id',
                'names.language_id',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'name_';
                $routeKey = 'admin.names';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : '';
            });
            $table->editColumn('module.title', function ($row) {
                return $row->module ? $row->module->title : '';
            });
            $table->editColumn('reference_id', function ($row) {
                return $row->reference_id ? $row->reference_id : '';
            });
            $table->editColumn('language.title', function ($row) {
                return $row->language ? $row->language->title : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.names.index');
    }

    /**
     * Show the form for creating new Name.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('name_create')) {
            return abort(401);
        }
        
        $modules = \App\Module::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $languages = \App\Language::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.names.create', compact('modules', 'languages'));
    }

    /**
     * Store a newly created Name in storage.
     *
     * @param  \App\Http\Requests\StoreNamesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNamesRequest $request)
    {
        if (! Gate::allows('name_create')) {
            return abort(401);
        }
        $name = Name::create($request->all());



        return redirect()->route('admin.names.index');
    }


    /**
     * Show the form for editing Name.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('name_edit')) {
            return abort(401);
        }
        
        $modules = \App\Module::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $languages = \App\Language::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $name = Name::findOrFail($id);

        return view('admin.names.edit', compact('name', 'modules', 'languages'));
    }

    /**
     * Update Name in storage.
     *
     * @param  \App\Http\Requests\UpdateNamesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNamesRequest $request, $id)
    {
        if (! Gate::allows('name_edit')) {
            return abort(401);
        }
        $name = Name::findOrFail($id);
        $name->update($request->all());



        return redirect()->route('admin.names.index');
    }


    /**
     * Display Name.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('name_view')) {
            return abort(401);
        }
        $name = Name::findOrFail($id);

        return view('admin.names.show', compact('name'));
    }


    /**
     * Remove Name from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('name_delete')) {
            return abort(401);
        }
        $name = Name::findOrFail($id);
        $name->delete();

        return redirect()->route('admin.names.index');
    }

    /**
     * Delete all selected Name at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('name_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Name::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Name from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('name_delete')) {
            return abort(401);
        }
        $name = Name::onlyTrashed()->findOrFail($id);
        $name->restore();

        return redirect()->route('admin.names.index');
    }

    /**
     * Permanently delete Name from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('name_delete')) {
            return abort(401);
        }
        $name = Name::onlyTrashed()->findOrFail($id);
        $name->forceDelete();

        return redirect()->route('admin.names.index');
    }
}
