<?php

namespace App\Http\Controllers\Api\V1;

use App\QuizQuestion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuizQuestionsRequest;
use App\Http\Requests\Admin\UpdateQuizQuestionsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class QuizQuestionsController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return QuizQuestion::all();
    }

    public function show($id)
    {
        return QuizQuestion::findOrFail($id);
    }

    public function update(UpdateQuizQuestionsRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $quiz_question = QuizQuestion::findOrFail($id);
        $quiz_question->update($request->all());
        

        return $quiz_question;
    }

    public function store(StoreQuizQuestionsRequest $request)
    {
        $request = $this->saveFiles($request);
        $quiz_question = QuizQuestion::create($request->all());
        

        return $quiz_question;
    }

    public function destroy($id)
    {
        $quiz_question = QuizQuestion::findOrFail($id);
        $quiz_question->delete();
        return '';
    }
}
