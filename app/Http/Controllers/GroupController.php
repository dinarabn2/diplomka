<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Repositories\GroupRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Group;
use App\Repositories\TutorRepository;
use App\Repositories\FacultyRepository;
use App\Repositories\SpecialityRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class GroupController extends AppBaseController
{
    /** @var GroupRepository $groupRepository*/
    private $groupRepository;
    private $tutorRepository;
    private $facultyRepository;
    private $specialityRepository;

    public function __construct(GroupRepository $groupRepo, TutorRepository $tutorRepo, FacultyRepository $facultyRepo, SpecialityRepository $specialityRepo)
    {
        $this->groupRepository = $groupRepo;
        $this->tutorRepository = $tutorRepo;
        $this->facultyRepository = $facultyRepo;
        $this->specialityRepository = $specialityRepo;
    }

    /**
     * Display a listing of the Group.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $groups = null;
        switch ($request->query()) {
            case !empty($request->name):
                $groups = Group::where('name', 'like', "%{$request->name}%")->orderBy('name')->paginate(config('settings.groups.paginate'));
                break;
            case !empty($request->faculty):
                $groups = Group::whereHas('faculty', function ($query) use ($request) {
                    $query->where('id', $request->faculty);
                })->paginate(config('settings.groups.paginate'));
                break;
            case !empty($request->speciality):
                $groups = Group::whereHas('speciality', function ($query) use ($request) {
                    $query->where('id', $request->speciality);
                })->paginate(config('settings.groups.paginate'));
                break;
            default:
                $groups = Group::orderBy('name')->paginate(config('settings.groups.paginate'));
        }

        $faculties = $this->facultyRepository->makeModel()->pluck('name', 'id');
        $specialities = $this->specialityRepository->makeModel()->pluck('name', 'id');

        return view('groups.index')
            ->with(['groups'=> $groups, 'faculties' => $faculties, 'specialities' => $specialities]);
    }

    /**
     * Show the form for creating a new Group.
     *
     * @return Response
     */
    public function create()
    {
        $tutors = $this->tutorRepository->makeModel()->pluck('name', 'id');
        $faculties = $this->facultyRepository->makeModel()->pluck('name', 'id');
        $specialities = $this->specialityRepository->makeModel()->pluck('name', 'id');
        return view('groups.create', compact('tutors', 'faculties', 'specialities'));
    }

    /**
     * Store a newly created Group in storage.
     *
     * @param CreateGroupRequest $request
     *
     * @return Response
     */
    public function store(CreateGroupRequest $request)
    {
        $input = $request->all();

        $group = $this->groupRepository->create($input);

        Flash::success('Жарнама сәтті сақталды.');

        return redirect(route('groups.index'));
    }

    /**
     * Display the specified Group.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $group = $this->groupRepository->find($id);

        if (empty($group)) {
            Flash::error('Жарнама табылмады');

            return redirect(route('groups.index'));
        }

        return view('groups.show')->with('group', $group);
    }

    /**
     * Show the form for editing the specified Group.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $group = $this->groupRepository->find($id);
        $tutors = $this->tutorRepository->makeModel()->pluck('name', 'id');
        $faculties = $this->facultyRepository->makeModel()->pluck('name', 'id');
        $specialities = $this->specialityRepository->makeModel()->pluck('name', 'id');

        if (empty($group)) {
            Flash::error('Жарнама табылмады');

            return redirect(route('groups.index'));
        }

        return view('groups.edit')->with(['group'=> $group, 'tutors' => $tutors, 'faculties' => $faculties, 'specialities' => $specialities]);
    }

    /**
     * Update the specified Group in storage.
     *
     * @param int $id
     * @param UpdateGroupRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGroupRequest $request)
    {
        $group = $this->groupRepository->find($id);

        if (empty($group)) {
            Flash::error('Жарнама табылмады');

            return redirect(route('groups.index'));
        }

        $group = $this->groupRepository->update($request->all(), $id);

        Flash::success('Жарнама сәтті жаңартылды.');

        return redirect(route('groups.index'));
    }

    /**
     * Remove the specified Group from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $group = $this->groupRepository->find($id);

        if (empty($group)) {
            Flash::error('Жарнама табылмады');

            return redirect(route('groups.index'));
        }

        $this->groupRepository->delete($id);

        Flash::success('Жарнама сәтті жойылды.');

        return redirect(route('groups.index'));
    }
}
