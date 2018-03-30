<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateComentaryRequest;
use App\Http\Requests\UpdateComentaryRequest;
use App\Repositories\ComentaryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ComentaryController extends AppBaseController
{
    /** @var  ComentaryRepository */
    private $comentaryRepository;

    public function __construct(ComentaryRepository $comentaryRepo)
    {
        $this->comentaryRepository = $comentaryRepo;
    }

    /**
     * Display a listing of the Comentary.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->comentaryRepository->pushCriteria(new RequestCriteria($request));
        $comentaries = $this->comentaryRepository->all();

        return view('comentaries.index')
            ->with('comentaries', $comentaries);
    }

    /**
     * Show the form for creating a new Comentary.
     *
     * @return Response
     */
    public function create()
    {
        return view('comentaries.create');
    }

    /**
     * Store a newly created Comentary in storage.
     *
     * @param CreateComentaryRequest $request
     *
     * @return Response
     */
    public function store(CreateComentaryRequest $request)
    {
        $input = $request->all();

        $comentary = $this->comentaryRepository->create($input);

        Flash::success('Comentary saved successfully.');

        return redirect(route('comentaries.index'));
    }

    /**
     * Display the specified Comentary.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $comentary = $this->comentaryRepository->findWithoutFail($id);

        if (empty($comentary)) {
            Flash::error('Comentary not found');

            return redirect(route('comentaries.index'));
        }

        return view('comentaries.show')->with('comentary', $comentary);
    }

    /**
     * Show the form for editing the specified Comentary.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $comentary = $this->comentaryRepository->findWithoutFail($id);

        if (empty($comentary)) {
            Flash::error('Comentary not found');

            return redirect(route('comentaries.index'));
        }

        return view('comentaries.edit')->with('comentary', $comentary);
    }

    /**
     * Update the specified Comentary in storage.
     *
     * @param  int              $id
     * @param UpdateComentaryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateComentaryRequest $request)
    {
        $comentary = $this->comentaryRepository->findWithoutFail($id);

        if (empty($comentary)) {
            Flash::error('Comentary not found');

            return redirect(route('comentaries.index'));
        }

        $comentary = $this->comentaryRepository->update($request->all(), $id);

        Flash::success('Comentary updated successfully.');

        return redirect(route('comentaries.index'));
    }

    /**
     * Remove the specified Comentary from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $comentary = $this->comentaryRepository->findWithoutFail($id);

        if (empty($comentary)) {
            Flash::error('Comentary not found');

            return redirect(route('comentaries.index'));
        }

        $this->comentaryRepository->delete($id);

        Flash::success('Comentary deleted successfully.');

        return redirect(route('comentaries.index'));
    }
}
