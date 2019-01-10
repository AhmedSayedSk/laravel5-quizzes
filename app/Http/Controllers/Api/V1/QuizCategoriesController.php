<?php

namespace App\Http\Controllers\Api\V1;

use App\QuizCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuizCategoriesRequest;
use App\Http\Requests\Admin\UpdateQuizCategoriesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class QuizCategoriesController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return QuizCategory::all();
    }

    public function show($id)
    {
        return QuizCategory::findOrFail($id);
    }

    public function update(UpdateQuizCategoriesRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $quiz_category = QuizCategory::findOrFail($id);
        $quiz_category->update($request->all());
        

        return $quiz_category;
    }

    public function store(StoreQuizCategoriesRequest $request)
    {
        $request = $this->saveFiles($request);
        $quiz_category = QuizCategory::create($request->all());
        

        return $quiz_category;
    }

    public function destroy($id)
    {
        $quiz_category = QuizCategory::findOrFail($id);
        $quiz_category->delete();
        return '';
    }
}
