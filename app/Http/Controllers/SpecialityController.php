<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSpecialityRequest;
use App\Http\Requests\UpdateSpecialityRequest;
use App\Repositories\SpecialityRepository;
use App\Repositories\FacultyRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Flash;
use Response;

class SpecialityController extends AppBaseController
{
    /** @var SpecialityRepository $specialityRepository*/
    private $specialityRepository;

    /**
     * 
     * @var FacultyRepository $facultyRepository
     */
    private $facultyRepository;

    public function __construct(SpecialityRepository $specialityRepo, FacultyRepository $facultyRepo)
    {
        $this->specialityRepository = $specialityRepo;
        $this->facultyRepository = $facultyRepo;
    }

    /**
     * Display a listing of the Speciality.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $specialities = Speciality::orderBy('cipher')->get();

        return view('specialities.index')
            ->with('specialities', $specialities);
    }

    /**
     * Show the form for creating a new Speciality.
     *
     * @return Response
     */
    public function create()
    {
        $faculties = $this->facultyRepository->makeModel()->pluck('name', 'id');
        return view('specialities.create')
            ->with('faculties', $faculties);
    }

    /**
     * Store a newly created Speciality in storage.
     *
     * @param CreateSpecialityRequest $request
     *
     * @return Response
     */
    public function store(CreateSpecialityRequest $request)
    {
        $input = $request->all();

        $speciality = $this->specialityRepository->create($input);

        Flash::success('Мамандық сәтті сақталды.');

        return redirect(route('specialities.index'));
    }

    /**
     * Display the specified Speciality.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $speciality = $this->specialityRepository->find($id);

        if (empty($speciality)) {
            Flash::error('Мамандық табылмады');

            return redirect(route('specialities.index'));
        }

        return view('specialities.show')->with('speciality', $speciality);
    }

    /**
     * Show the form for editing the specified Speciality.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $speciality = $this->specialityRepository->find($id);
        $faculties = $this->facultyRepository->makeModel()->pluck('name', 'id');

        if (empty($speciality)) {
            Flash::error('Мамандық табылмады');

            return redirect(route('specialities.index'));
        }

        return view('specialities.edit')->with(['speciality' => $speciality, 'faculties' => $faculties]);
    }

    /**
     * Update the specified Speciality in storage.
     *
     * @param int $id
     * @param UpdateSpecialityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSpecialityRequest $request)
    {
        $speciality = $this->specialityRepository->find($id);

        if (empty($speciality)) {
            Flash::error('Мамандық табылмады');

            return redirect(route('specialities.index'));
        }

        $speciality = $this->specialityRepository->update($request->all(), $id);

        Flash::success('Мамандық сәтті жаңартылды.');

        return redirect(route('specialities.index'));
    }

    /**
     * Remove the specified Speciality from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $speciality = $this->specialityRepository->find($id);

        if (empty($speciality)) {
            Flash::error('Мамандық табылмады');

            return redirect(route('specialities.index'));
        }

        $this->specialityRepository->delete($id);

        Flash::success('Мамандық сәтті жойылды.');

        return redirect(route('specialities.index'));
    }
}
