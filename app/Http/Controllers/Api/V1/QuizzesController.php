<?php

namespace App\Http\Controllers\Api\V1;

use App\Quiz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuizzesRequest;
use App\Http\Requests\Admin\UpdateQuizzesRequest;
use Yajra\DataTables\DataTables;

class QuizzesController extends Controller
{
    public function index()
    {
        return Quiz::all();
    }

    public function show($id)
    {
        return Quiz::findOrFail($id);
    }

    public function update(UpdateQuizzesRequest $request, $id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->update($request->all());
        

        return $quiz;
    }

    public function store(StoreQuizzesRequest $request)
    {
        $quiz = Quiz::create($request->all());
        

        return $quiz;
    }

    public function destroy($id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();
        return '';
    }
}
