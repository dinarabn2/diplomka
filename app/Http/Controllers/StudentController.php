<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Repositories\StudentRepository;
use App\Repositories\FacultyRepository;
use App\Repositories\GroupRepository;
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
    public $studentRepository;

    /**
     * 
     * @var FacultyRepository $facultyRepository
     * @var SpecialityRepository $specialityRepository
     */
    public $facultyRepository;
    public $specialityRepository;

    /**
     * 
     * @var GroupRepository
     */
    public $groupRepository;

    /**
     * 
     * @var array
     */
    public $genderSelect = [];
    public $educationSelect = [];
    public $statusSelect = [];

    public function __construct(StudentRepository $studentRepo, FacultyRepository $facultyRepo, SpecialityRepository $specialityRepo, GroupRepository  $groupRepositoryRepo)
    {
        $this->studentRepository = $studentRepo;
        $this->facultyRepository = $facultyRepo;
        $this->specialityRepository = $specialityRepo;
        $this->groupRepository = $groupRepositoryRepo;
        $this->genderSelect = ['male' => 'Ұл', 'female' => 'Қыз'];
        $this->educationSelect = ['grant' => 'Грант', 'paid' => 'Ақылы'];
        $this->statusSelect = [
            '1' => 'Тұл жетім',
            '2' => 'Жетім',
            '3' => 'Мүгедек',
            '4' => 'Ата-анасы мүгедек',
            '5' => 'Көп балалы отбасынан',
            '6' => 'М. Әуезов атындағы ОҚУ-да бір отбасынан екі немесе одан көп оқитын студенттер'
        ];
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
            ->with(['students' => $students, 'gender' => $this->genderSelect, 'education' => $this->educationSelect, 'status' => $this->statusSelect ]);
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
        $groups = $this->groupRepository->makeModel()->pluck('name', 'id');
        $genders = $this->genderSelect;
        $educations = $this->educationSelect;
        $statuses = $this->statusSelect;

        return view('students.create', compact('faculties', 'specialities', 'groups', 'genders', 'educations', 'statuses'));
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
        $input = $request->all();
        $student = $this->studentRepository->create($input);

        Flash::success('Студент сәтті сақталды.');

        return redirect(route('students.index'));

        // $student = new Student();
        // $student->name = $request->name;
        // $student->surname = $request->surname;
        // $student->phone = $request->phone;
        // $student->img = $request->img;
        // $student->text = $request->text;
        // $student->birthday = $request->birthday;
        // $student->course = $request->course;
        // $student->education_type = $request->education_type;
        // $student->gender = $request->gender;
        // $student->education_type = $request->education_type;
        // $student->group_id = $request->group_id;

        // $student->save();

        // Flash::success('Студент сәтті сақталды.');
        // return redirect(route('students.index'));
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

        return view('students.show')->with(['student' => $student, 'gender' => $this->genderSelect, 'education' => $this->educationSelect]);
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
        $groups = $this->groupRepository->makeModel()->pluck('name', 'id');
        $genders = $this->genderSelect;
        $educations = $this->educationSelect;

        if (empty($student)) {
            Flash::error('Студент табылмады.');

            return redirect(route('students.index'));
        }

        return view('students.edit')->with(
            [
                'student' => $student, 
                'faculties' => $faculties, 
                'specialities' => $specialities, 
                'groups' => $groups,
                'genders' => $genders,
                'educations' => $educations,
            ]);
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
