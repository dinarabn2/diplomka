<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Speciality;
use App\Models\Faculty;
use App\Models\Group;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('surname')->count();
        $faculties = Faculty::orderBy('cipher')->count();
        $specialities = Speciality::orderBy('cipher')->count();
        $groups = Group::orderBy('name')->count();

        return view('home')
            ->with(['students' => $students, 'faculties' => $faculties, 'specialities' => $specialities, 'groups' => $groups]);
    }
}
