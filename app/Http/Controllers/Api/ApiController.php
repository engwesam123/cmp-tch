<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\curriculum;
use App\Models\CurriculumDistribution;
use App\Models\preparation;
use App\Models\presentation;
use App\Models\program;
use App\Models\teacherGuide;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    use GeneralTrait;

    public function getPreparations(){
         $preparations =   Preparation::get();
          return response()->json($preparations);
    }

    public function getCurriculums(){
        $curriculums =   Curriculum::get();
        return response()->json($curriculums);
    }

    public function getPresentations(){
        $presentations =   Presentation::get();
        return response()->json($presentations);
    }

    public function getandroidPrograms(){
        $programs =   Program::where('available_id', 2)->get();
        return response()->json($programs);
    }

    public function getIosPrograms(){
        $programs =   Program::where('available_id', 3)->get();
        return response()->json($programs);
    }

    public function getTeacherGuides(){
        $teacherGuides =   teacherGuide::get();
        return response()->json($teacherGuides);
    }

    public function getCurriculumDistributions(){
        $CurriculumDistributions =   CurriculumDistribution::get();
        return response()->json($CurriculumDistributions);
    }
}

