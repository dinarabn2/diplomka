<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class FrontController extends StudentController
{
    public function socialStatus(Request $reques)
    {
        $faculties = $this->facultyRepository->makeModel()->pluck('name', 'id');
        $specialities = $this->specialityRepository->makeModel()->pluck('name', 'id');
        $groups = $this->groupRepository->makeModel()->pluck('name', 'id');
        $genders = $this->genderSelect;
        $educations = $this->educationSelect;

        return view('frontend.social-status', compact('faculties', 'specialities', 'groups', 'genders', 'educations'));
    }

}