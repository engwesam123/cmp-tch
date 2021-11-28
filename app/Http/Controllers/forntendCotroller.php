<?php

namespace App\Http\Controllers;

use App\Models\curriculum;
use App\Models\CurriculumDistribution;
use App\Models\preparation;
use App\Models\presentation;
use App\Models\program;
use App\Models\teacherGuide;
use Illuminate\Http\Request;

class forntendCotroller extends Controller
{

    public function index(){
        $preparations   = Preparation::all();
        $presentations  = Presentation::all();
        $programs =   Program::where('available_id', 1)->get();
        $teacherGuides  = teacherGuide::all();
        $curriculumsDis = CurriculumDistribution::all();
        $curriculums    = curriculum::all();

        return view('frontend.index', compact('preparations','programs',
                            'presentations', 'teacherGuides','curriculums','curriculumsDis'));
    }
}
