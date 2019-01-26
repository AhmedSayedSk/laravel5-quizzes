<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
class testFrontendController extends Controller
{
    //
    public function returnview(){
       return view(Route::getFacadeRoot()->current()->uri());
    }
}
