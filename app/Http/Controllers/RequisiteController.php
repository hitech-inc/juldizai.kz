<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequisiteRequest;
use App\Http\Requests\UpdateRequisiteRequest;
use App\Repositories\RequisiteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RequisiteController extends AppBaseController
{
    /** @var  RequisiteRepository */
    private $requisiteRepository;

    public function __construct(RequisiteRepository $requisiteRepo)
    {
        $this->requisiteRepository = $requisiteRepo;
    }

    /**
     * Display a listing of the Requisite.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->requisiteRepository->pushCriteria(new RequestCriteria($request));
        $requisites = $this->requisiteRepository->all();

        return view('backend.requisites.index')
            ->with('requisites', $requisites);
    }

    /**
     * Show the form for creating a new Requisite.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.requisites.create');
    }

    /**
     * Store a newly created Requisite in storage.
     *
     * @param CreateRequisiteRequest $request
     *
     * @return Response
     */
    public function store(CreateRequisiteRequest $request)
    {
        $input = $request->all();

        $requisite = $this->requisiteRepository->create($input);

        Flash::success('Requisite saved successfully.');

        return redirect(route('requisites.index'));
    }

    /**
     * Display the specified Requisite.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $requisite = $this->requisiteRepository->findWithoutFail($id);

        if (empty($requisite)) {
            Flash::error('Requisite not found');

            return redirect(route('requisites.index'));
        }

        return view('backend.requisites.show')->with('requisite', $requisite);
    }

    /**
     * Show the form for editing the specified Requisite.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $requisite = $this->requisiteRepository->findWithoutFail($id);

        if (empty($requisite)) {
            Flash::error('Requisite not found');

            return redirect(route('requisites.index'));
        }

        return view('backend.requisites.edit')->with('requisite', $requisite);
    }

    /**
     * Update the specified Requisite in storage.
     *
     * @param  int              $id
     * @param UpdateRequisiteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRequisiteRequest $request)
    {
        $requisite = $this->requisiteRepository->findWithoutFail($id);

        if (empty($requisite)) {
            Flash::error('Requisite not found');

            return redirect(route('requisites.index'));
        }

        $requisite = $this->requisiteRepository->update($request->all(), $id);

        Flash::success('Requisite updated successfully.');

        return redirect(route('requisites.index'));
    }

    /**
     * Remove the specified Requisite from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $requisite = $this->requisiteRepository->findWithoutFail($id);

        if (empty($requisite)) {
            Flash::error('Requisite not found');

            return redirect(route('requisites.index'));
        }

        $this->requisiteRepository->delete($id);

        Flash::success('Requisite deleted successfully.');

        return redirect(route('requisites.index'));
    }
}
