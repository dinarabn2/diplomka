<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Repositories\StudentRepository;
use App\Repositories\FacultyRepository;
use App\Repositories\SpecialityRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Faculty;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Student;

class StudentController extends AppBaseController
{
    /** @var StudentRepository $studentRepository*/
    private $studentRepository;

    /**
     * 
     * @var FacultyRepository $facultyRepository
     * @var SpecialityRepository $specialityRepository
     */
    private $facultyRepository;
    private $specialityRepository;

    public function __construct(StudentRepository $studentRepo, FacultyRepository $facultyRepo, SpecialityRepository $specialityRepo )
    {
        $this->studentRepository = $studentRepo;
        $this->facultyRepository = $facultyRepo;
        $this->specialityRepository = $specialityRepo;
    }

    /**
     * Display a listing of the Student.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $students = $this->studentRepository->all();
        $students = Student::orderBy('surname')->get();

        return view('students.index')
            ->with('students', $students);
    }

    /**
     * Show the form for creating a new Student.
     *
     * @return Response
     */
    public function create()
    {
        $faculties = $this->facultyRepository->makeModel()->pluck('name', 'id');
        $specialities = $this->specialityRepository->makeModel()->pluck('name', 'id');

        return view('students.create', compact('faculties', 'specialities'));
    }

    /**
     * Store a newly created Student in storage.
     *
     * @param CreateStudentRequest $request
     *
     * @return Response
     */
    public function store(CreateStudentRequest $request)
    {
        // $input = $request->all();
        // $student = $this->studentRepository->create($input);

        // Flash::success('Студент сәтті сақталды.');

        // return redirect(route('students.index'));

        $student = new Student();
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->phone = $request->phone;
        $student->img = $request->img;
        $student->text = $request->text;
        $student->birthday = $request->birthday;
        $student->course = $request->course;
        $student->education_type = $request->education_type;
        $student->gender = $request->gender;
        $student->faculty_id = $request->faculty_id;
        $student->speciality_id = $request->speciality_id;

        $student->save();

        Flash::success('Студент сәтті сақталды.');
        return redirect(route('students.index'));
    }

    /**
     * Display the specified Student.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $student = $this->studentRepository->find($id);

        if (empty($student)) {
            Flash::error('Студент табылмады.');

            return redirect(route('students.index'));
        }

        return view('students.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified Student.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $student = $this->studentRepository->find($id);
        $faculties = $this->facultyRepository->makeModel()->pluck('name', 'id');
        $specialities = $this->specialityRepository->makeModel()->pluck('name', 'id');

        if (empty($student)) {
            Flash::error('Студент табылмады.');

            return redirect(route('students.index'));
        }

        return view('students.edit')->with(['student' => $student, 'faculties' => $faculties, 'specialities' => $specialities]);
    }

    /**
     * Update the specified Student in storage.
     *
     * @param int $id
     * @param UpdateStudentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStudentRequest $request)
    {
        $student = $this->studentRepository->find($id);

        if (empty($student)) {
            Flash::error('Студент табылмады.');

            return redirect(route('students.index'));
        }

        $student = $this->studentRepository->update($request->all(), $id);

        Flash::success('Студент сәтті жаңартылды.');

        return redirect(route('students.index'));
    }

    /**
     * Remove the specified Student from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $student = $this->studentRepository->find($id);

        if (empty($student)) {
            Flash::error('Студент табылмады.');

            return redirect(route('students.index'));
        }

        $this->studentRepository->delete($id);

        Flash::success('Студент жойылды.');

        return redirect(route('students.index'));
    }
}
