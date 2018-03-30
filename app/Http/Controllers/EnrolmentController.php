<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEnrolmentRequest;
use App\Http\Requests\UpdateEnrolmentRequest;
use App\Repositories\EnrolmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EnrolmentController extends AppBaseController
{
    /** @var  EnrolmentRepository */
    private $enrolmentRepository;

    public function __construct(EnrolmentRepository $enrolmentRepo)
    {
        $this->enrolmentRepository = $enrolmentRepo;
    }

    /**
     * Display a listing of the Enrolment.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->enrolmentRepository->pushCriteria(new RequestCriteria($request));
        $enrolments = $this->enrolmentRepository->all();

        return view('enrolments.index')
            ->with('enrolments', $enrolments);
    }

    /**
     * Show the form for creating a new Enrolment.
     *
     * @return Response
     */
    public function create()
    {
        return view('enrolments.create');
    }

    /**
     * Store a newly created Enrolment in storage.
     *
     * @param CreateEnrolmentRequest $request
     *
     * @return Response
     */
    public function store(CreateEnrolmentRequest $request)
    {
        $input = $request->all();

        $enrolment = $this->enrolmentRepository->create($input);

        Flash::success('Enrolment saved successfully.');

        return redirect(route('enrolments.index'));
    }

    /**
     * Display the specified Enrolment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $enrolment = $this->enrolmentRepository->findWithoutFail($id);

        if (empty($enrolment)) {
            Flash::error('Enrolment not found');

            return redirect(route('enrolments.index'));
        }

        return view('enrolments.show')->with('enrolment', $enrolment);
    }

    /**
     * Show the form for editing the specified Enrolment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $enrolment = $this->enrolmentRepository->findWithoutFail($id);

        if (empty($enrolment)) {
            Flash::error('Enrolment not found');

            return redirect(route('enrolments.index'));
        }

        return view('enrolments.edit')->with('enrolment', $enrolment);
    }

    /**
     * Update the specified Enrolment in storage.
     *
     * @param  int              $id
     * @param UpdateEnrolmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEnrolmentRequest $request)
    {
        $enrolment = $this->enrolmentRepository->findWithoutFail($id);

        if (empty($enrolment)) {
            Flash::error('Enrolment not found');

            return redirect(route('enrolments.index'));
        }

        $enrolment = $this->enrolmentRepository->update($request->all(), $id);

        Flash::success('Enrolment updated successfully.');

        return redirect(route('enrolments.index'));
    }

    /**
     * Remove the specified Enrolment from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $enrolment = $this->enrolmentRepository->findWithoutFail($id);

        if (empty($enrolment)) {
            Flash::error('Enrolment not found');

            return redirect(route('enrolments.index'));
        }

        $this->enrolmentRepository->delete($id);

        Flash::success('Enrolment deleted successfully.');

        return redirect(route('enrolments.index'));
    }
}
