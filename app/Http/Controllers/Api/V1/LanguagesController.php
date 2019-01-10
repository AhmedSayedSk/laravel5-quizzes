<?php

namespace App\Http\Controllers\Api\V1;

use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreLanguagesRequest;
use App\Http\Requests\Admin\UpdateLanguagesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class LanguagesController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return Language::all();
    }

    public function show($id)
    {
        return Language::findOrFail($id);
    }

    public function update(UpdateLanguagesRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $language = Language::findOrFail($id);
        $language->update($request->all());
        

        return $language;
    }

    public function store(StoreLanguagesRequest $request)
    {
        $request = $this->saveFiles($request);
        $language = Language::create($request->all());
        

        return $language;
    }

    public function destroy($id)
    {
        $language = Language::findOrFail($id);
        $language->delete();
        return '';
    }
}
