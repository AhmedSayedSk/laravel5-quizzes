<?php

namespace App\Http\Controllers\Api\V1;

use App\Name;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreNamesRequest;
use App\Http\Requests\Admin\UpdateNamesRequest;
use Yajra\DataTables\DataTables;

class NamesController extends Controller
{
    public function index()
    {
        return Name::all();
    }

    public function show($id)
    {
        return Name::findOrFail($id);
    }

    public function update(UpdateNamesRequest $request, $id)
    {
        $name = Name::findOrFail($id);
        $name->update($request->all());
        

        return $name;
    }

    public function store(StoreNamesRequest $request)
    {
        $name = Name::create($request->all());
        

        return $name;
    }

    public function destroy($id)
    {
        $name = Name::findOrFail($id);
        $name->delete();
        return '';
    }
}
