<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLessonsRequest;
use App\Http\Requests\UpdateLessonsRequest;
use App\Models\Lessons;
use App\Models\Subject;
use App\Repositories\LessonsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LessonsController extends AppBaseController
{
    /** @var  LessonsRepository */
    private $lessonsRepository;

    public function __construct(LessonsRepository $lessonsRepo)
    {
        $this->lessonsRepository = $lessonsRepo;
    }

    /**
     * Display a listing of the Lessons.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if (auth()->user()->hasRole('Admin')){
            $this->lessonsRepository->pushCriteria(new RequestCriteria($request));
            $lessons = $this->lessonsRepository->all();

        }else{

            $this->lessonsRepository->pushCriteria(new RequestCriteria($request));
            $subjects= Subject::where('teacher', auth()->user()->id)->get();
       foreach ($subjects as $subject){
           $lessonsAlls = Lessons::where('subject', $subject->id)->get();
            foreach ($lessonsAlls as $lessonsAll){
                $lessons[]= $lessonsAll;
            }
       }
        }


        return view('lessons.index')
            ->with('lessons', $lessons);
    }

    /**
     * Show the form for creating a new Lessons.
     *
     * @return Response
     */
    public function create()
    {
        return view('lessons.create');
    }

    /**
     * Store a newly created Lessons in storage.
     *
     * @param CreateLessonsRequest $request
     *
     * @return Response
     */
    public function store(CreateLessonsRequest $request)
    {
        $input = $request->all();

        $lessons = $this->lessonsRepository->create($input);

        Flash::success('Lessons saved successfully.');

        return redirect(route('lessons.index'));
    }

    /**
     * Display the specified Lessons.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lessons = $this->lessonsRepository->findWithoutFail($id);

        if (empty($lessons)) {
            Flash::error('Lessons not found');

            return redirect(route('lessons.index'));
        }

        return view('lessons.show')->with('lessons', $lessons);
    }

    /**
     * Show the form for editing the specified Lessons.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lessons = $this->lessonsRepository->findWithoutFail($id);

        if (empty($lessons)) {
            Flash::error('Lessons not found');

            return redirect(route('lessons.index'));
        }

        return view('lessons.edit')->with('lessons', $lessons);
    }

    /**
     * Update the specified Lessons in storage.
     *
     * @param  int              $id
     * @param UpdateLessonsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLessonsRequest $request)
    {
        $lessons = $this->lessonsRepository->findWithoutFail($id);

        if (empty($lessons)) {
            Flash::error('Lessons not found');

            return redirect(route('lessons.index'));
        }

        $lessons = $this->lessonsRepository->update($request->all(), $id);

        Flash::success('Lessons updated successfully.');

        return redirect(route('lessons.index'));
    }

    /**
     * Remove the specified Lessons from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lessons = $this->lessonsRepository->findWithoutFail($id);

        if (empty($lessons)) {
            Flash::error('Lessons not found');

            return redirect(route('lessons.index'));
        }

        $this->lessonsRepository->delete($id);

        Flash::success('Lessons deleted successfully.');

        return redirect(route('lessons.index'));
    }
}
