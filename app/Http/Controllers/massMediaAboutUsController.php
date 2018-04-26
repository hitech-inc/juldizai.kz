<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemassMediaAboutUsRequest;
use App\Http\Requests\UpdatemassMediaAboutUsRequest;
use App\Repositories\massMediaAboutUsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class massMediaAboutUsController extends AppBaseController
{
    /** @var  massMediaAboutUsRepository */
    private $massMediaAboutUsRepository;

    public function __construct(massMediaAboutUsRepository $massMediaAboutUsRepo)
    {
        $this->massMediaAboutUsRepository = $massMediaAboutUsRepo;
    }

    /**
     * Display a listing of the massMediaAboutUs.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->massMediaAboutUsRepository->pushCriteria(new RequestCriteria($request));
        $massMediaAboutuses = $this->massMediaAboutUsRepository->all();

        return view('backend.mass_media_aboutuses.index')
            ->with('massMediaAboutuses', $massMediaAboutuses);
    }

    /**
     * Show the form for creating a new massMediaAboutUs.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.mass_media_aboutuses.create');
    }

    /**
     * Store a newly created massMediaAboutUs in storage.
     *
     * @param CreatemassMediaAboutUsRequest $request
     *
     * @return Response
     */
    public function store(CreatemassMediaAboutUsRequest $request)
    {
        $input = $request->all();

        $massMediaAboutUs = $this->massMediaAboutUsRepository->create($input);

        Flash::success('Mass Media About Us saved successfully.');

        return redirect(route('massMediaAboutuses.index'));
    }

    /**
     * Display the specified massMediaAboutUs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $massMediaAboutUs = $this->massMediaAboutUsRepository->findWithoutFail($id);

        if (empty($massMediaAboutUs)) {
            Flash::error('Mass Media About Us not found');

            return redirect(route('massMediaAboutuses.index'));
        }

        return view('backend.mass_media_aboutuses.show')->with('massMediaAboutUs', $massMediaAboutUs);
    }

    /**
     * Show the form for editing the specified massMediaAboutUs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $massMediaAboutUs = $this->massMediaAboutUsRepository->findWithoutFail($id);

        if (empty($massMediaAboutUs)) {
            Flash::error('Mass Media About Us not found');

            return redirect(route('massMediaAboutuses.index'));
        }

        return view('backend.mass_media_aboutuses.edit')->with('massMediaAboutUs', $massMediaAboutUs);
    }

    /**
     * Update the specified massMediaAboutUs in storage.
     *
     * @param  int              $id
     * @param UpdatemassMediaAboutUsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemassMediaAboutUsRequest $request)
    {
        $massMediaAboutUs = $this->massMediaAboutUsRepository->findWithoutFail($id);

        if (empty($massMediaAboutUs)) {
            Flash::error('Mass Media About Us not found');

            return redirect(route('massMediaAboutuses.index'));
        }

        $massMediaAboutUs = $this->massMediaAboutUsRepository->update($request->all(), $id);

        Flash::success('Mass Media About Us updated successfully.');

        return redirect(route('massMediaAboutuses.index'));
    }

    /**
     * Remove the specified massMediaAboutUs from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $massMediaAboutUs = $this->massMediaAboutUsRepository->findWithoutFail($id);

        if (empty($massMediaAboutUs)) {
            Flash::error('Mass Media About Us not found');

            return redirect(route('massMediaAboutuses.index'));
        }

        $this->massMediaAboutUsRepository->delete($id);

        Flash::success('Mass Media About Us deleted successfully.');

        return redirect(route('massMediaAboutuses.index'));
    }
}
