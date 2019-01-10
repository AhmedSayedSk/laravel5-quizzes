<?php

namespace App\Http\Controllers\Api\V1;

use App\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreModulesRequest;
use App\Http\Requests\Admin\UpdateModulesRequest;
use Yajra\DataTables\DataTables;

class ModulesController extends Controller
{
    public function index()
    {
        return Module::all();
    }

    public function show($id)
    {
        return Module::findOrFail($id);
    }

    public function update(UpdateModulesRequest $request, $id)
    {
        $module = Module::findOrFail($id);
        $module->update($request->all());
        

        return $module;
    }

    public function store(StoreModulesRequest $request)
    {
        $module = Module::create($request->all());
        

        return $module;
    }

    public function destroy($id)
    {
        $module = Module::findOrFail($id);
        $module->delete();
        return '';
    }
}
