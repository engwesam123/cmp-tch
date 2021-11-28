<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\curriculum;
use App\Models\CurriculumDistribution;
use App\Models\preparation;
use App\Models\presentation;
use App\Models\program;
use App\Models\SocialMedia;
use App\Models\teacherGuide;

class frontendController extends Controller
{

    public function index(){
        $preparations   = preparation::all();
        $presentations  = Presentation::all();
        $programs =   Program::where('available_id', 1)->get();
        $teacherGuides  = teacherGuide::all();
        $curriculumsDis = CurriculumDistribution::all();
        $curriculums    = curriculum::all();
        $socialMediads = SocialMedia::all();

        return view('frontend.index', compact('preparations','programs',
                            'presentations', 'teacherGuides','curriculums','curriculumsDis', 'socialMediads'));
    }
}
