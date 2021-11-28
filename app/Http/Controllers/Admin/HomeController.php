<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\curriculum;
use App\Models\CurriculumDistribution;
use App\Models\preparation;
use App\Models\presentation;
use App\Models\program;
use App\Models\teacherGuide;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $curriculums = curriculum::all();
        $CurriculumDistributions = CurriculumDistribution::all();
        $preparations = preparation::all();
        $presentations = presentation::all();
        $programs = program::all();
        $teacherGuides = teacherGuide::all();
        return view('home', compact('curriculums', 'CurriculumDistributions', 'preparations', 'presentations',
        'programs', 'teacherGuides'));
    }
}
