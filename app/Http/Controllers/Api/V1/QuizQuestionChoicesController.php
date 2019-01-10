<?php

namespace App\Http\Controllers\Api\V1;

use App\QuizQuestionChoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuizQuestionChoicesRequest;
use App\Http\Requests\Admin\UpdateQuizQuestionChoicesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class QuizQuestionChoicesController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return QuizQuestionChoice::all();
    }

    public function show($id)
    {
        return QuizQuestionChoice::findOrFail($id);
    }

    public function update(UpdateQuizQuestionChoicesRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $quiz_question_choice = QuizQuestionChoice::findOrFail($id);
        $quiz_question_choice->update($request->all());
        

        return $quiz_question_choice;
    }

    public function store(StoreQuizQuestionChoicesRequest $request)
    {
        $request = $this->saveFiles($request);
        $quiz_question_choice = QuizQuestionChoice::create($request->all());
        

        return $quiz_question_choice;
    }

    public function destroy($id)
    {
        $quiz_question_choice = QuizQuestionChoice::findOrFail($id);
        $quiz_question_choice->delete();
        return '';
    }
}
