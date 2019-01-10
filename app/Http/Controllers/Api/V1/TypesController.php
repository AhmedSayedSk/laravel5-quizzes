<?php

namespace App\Http\Controllers\Api\V1;

use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTypesRequest;
use App\Http\Requests\Admin\UpdateTypesRequest;
use Yajra\DataTables\DataTables;

class TypesController extends Controller
{
    public function index()
    {
        return Type::all();
    }

    public function show($id)
    {
        return Type::findOrFail($id);
    }

    public function update(UpdateTypesRequest $request, $id)
    {
        $type = Type::findOrFail($id);
        $type->update($request->all());
        

        return $type;
    }

    public function store(StoreTypesRequest $request)
    {
        $type = Type::create($request->all());
        

        return $type;
    }

    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();
        return '';
    }
}
