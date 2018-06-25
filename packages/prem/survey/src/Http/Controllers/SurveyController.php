<?php

namespace Survey\Http\Controllers;

use App\Http\Controllers\Controller;


class SurveyController extends Controller{


public function index(){
    
    return view ('survey::survey-index');
}    
}


