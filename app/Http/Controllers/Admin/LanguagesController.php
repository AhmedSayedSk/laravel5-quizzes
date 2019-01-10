<?php

namespace App\Http\Controllers\Admin;

use App\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreLanguagesRequest;
use App\Http\Requests\Admin\UpdateLanguagesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class LanguagesController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Language.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('language_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Language::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('language_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'languages.id',
                'languages.title',
                'languages.symbol',
                'languages.image',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'language_';
                $routeKey = 'admin.languages';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('symbol', function ($row) {
                return $row->symbol ? $row->symbol : '';
            });
            $table->editColumn('image', function ($row) {
                if($row->image) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->image) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->image) .'"/>'; };
            });

            $table->rawColumns(['actions','massDelete','image']);

            return $table->make(true);
        }

        return view('admin.languages.index');
    }

    /**
     * Show the form for creating new Language.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('language_create')) {
            return abort(401);
        }
        return view('admin.languages.create');
    }

    /**
     * Store a newly created Language in storage.
     *
     * @param  \App\Http\Requests\StoreLanguagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLanguagesRequest $request)
    {
        if (! Gate::allows('language_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $language = Language::create($request->all());



        return redirect()->route('admin.languages.index');
    }


    /**
     * Show the form for editing Language.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('language_edit')) {
            return abort(401);
        }
        $language = Language::findOrFail($id);

        return view('admin.languages.edit', compact('language'));
    }

    /**
     * Update Language in storage.
     *
     * @param  \App\Http\Requests\UpdateLanguagesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLanguagesRequest $request, $id)
    {
        if (! Gate::allows('language_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $language = Language::findOrFail($id);
        $language->update($request->all());



        return redirect()->route('admin.languages.index');
    }


    /**
     * Display Language.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('language_view')) {
            return abort(401);
        }
        $names = \App\Name::where('language_id', $id)->get();

        $language = Language::findOrFail($id);

        return view('admin.languages.show', compact('language', 'names'));
    }


    /**
     * Remove Language from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('language_delete')) {
            return abort(401);
        }
        $language = Language::findOrFail($id);
        $language->delete();

        return redirect()->route('admin.languages.index');
    }

    /**
     * Delete all selected Language at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('language_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Language::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Language from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('language_delete')) {
            return abort(401);
        }
        $language = Language::onlyTrashed()->findOrFail($id);
        $language->restore();

        return redirect()->route('admin.languages.index');
    }

    /**
     * Permanently delete Language from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('language_delete')) {
            return abort(401);
        }
        $language = Language::onlyTrashed()->findOrFail($id);
        $language->forceDelete();

        return redirect()->route('admin.languages.index');
    }
}
