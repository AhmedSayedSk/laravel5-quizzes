<?php

namespace App\Http\Controllers\Admin;

use App\UserAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserActionsRequest;
use App\Http\Requests\Admin\UpdateUserActionsRequest;
use Yajra\DataTables\DataTables;

class UserActionsController extends Controller
{
    /**
     * Display a listing of UserAction.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('user_action_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = UserAction::query();
            $query->with("user");
            $template = 'actionsTemplate';
            
            $query->select([
                'user_actions.id',
                'user_actions.user_id',
                'user_actions.action',
                'user_actions.action_model',
                'user_actions.action_id',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'user_action_';
                $routeKey = 'admin.user_actions';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('user.name', function ($row) {
                return $row->user ? $row->user->name : '';
            });
            $table->editColumn('action_model', function ($row) {
                return $row->action_model ? $row->action_model : '';
            });
            $table->editColumn('action_id', function ($row) {
                return $row->action_id ? $row->action_id : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.user_actions.index');
    }

    /**
     * Show the form for creating new UserAction.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('user_action_create')) {
            return abort(401);
        }
        
        $users = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.user_actions.create', compact('users'));
    }

    /**
     * Store a newly created UserAction in storage.
     *
     * @param  \App\Http\Requests\StoreUserActionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserActionsRequest $request)
    {
        if (! Gate::allows('user_action_create')) {
            return abort(401);
        }
        $user_action = UserAction::create($request->all());



        return redirect()->route('admin.user_actions.index');
    }


    /**
     * Show the form for editing UserAction.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('user_action_edit')) {
            return abort(401);
        }
        
        $users = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $user_action = UserAction::findOrFail($id);

        return view('admin.user_actions.edit', compact('user_action', 'users'));
    }

    /**
     * Update UserAction in storage.
     *
     * @param  \App\Http\Requests\UpdateUserActionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserActionsRequest $request, $id)
    {
        if (! Gate::allows('user_action_edit')) {
            return abort(401);
        }
        $user_action = UserAction::findOrFail($id);
        $user_action->update($request->all());



        return redirect()->route('admin.user_actions.index');
    }


    /**
     * Display UserAction.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('user_action_view')) {
            return abort(401);
        }
        $user_action = UserAction::findOrFail($id);

        return view('admin.user_actions.show', compact('user_action'));
    }


    /**
     * Remove UserAction from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('user_action_delete')) {
            return abort(401);
        }
        $user_action = UserAction::findOrFail($id);
        $user_action->delete();

        return redirect()->route('admin.user_actions.index');
    }

    /**
     * Delete all selected UserAction at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('user_action_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = UserAction::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
