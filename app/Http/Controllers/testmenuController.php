<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetestmenuRequest;
use App\Http\Requests\UpdatetestmenuRequest;
use App\Repositories\testmenuRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class testmenuController extends AppBaseController
{
    /** @var  testmenuRepository */
    private $testmenuRepository;

    public function __construct(testmenuRepository $testmenuRepo)
    {
        $this->testmenuRepository = $testmenuRepo;
    }

    /**
     * Display a listing of the testmenu.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->testmenuRepository->pushCriteria(new RequestCriteria($request));
        $testmenus = $this->testmenuRepository->all();

        return view('backend.testmenus.index')
            ->with('testmenus', $testmenus);
    }

    /**
     * Show the form for creating a new testmenu.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.testmenus.create');
    }

    /**
     * Store a newly created testmenu in storage.
     *
     * @param CreatetestmenuRequest $request
     *
     * @return Response
     */
    public function store(CreatetestmenuRequest $request)
    {
        $input = $request->all();

        $testmenu = $this->testmenuRepository->create($input);

        Flash::success('Testmenu saved successfully.');

        return redirect(route('testmenus.index'));
    }

    /**
     * Display the specified testmenu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testmenu = $this->testmenuRepository->findWithoutFail($id);

        if (empty($testmenu)) {
            Flash::error('Testmenu not found');

            return redirect(route('testmenus.index'));
        }

        return view('backend.testmenus.show')->with('testmenu', $testmenu);
    }

    /**
     * Show the form for editing the specified testmenu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testmenu = $this->testmenuRepository->findWithoutFail($id);

        if (empty($testmenu)) {
            Flash::error('Testmenu not found');

            return redirect(route('testmenus.index'));
        }

        return view('backend.testmenus.edit')->with('testmenu', $testmenu);
    }

    /**
     * Update the specified testmenu in storage.
     *
     * @param  int              $id
     * @param UpdatetestmenuRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetestmenuRequest $request)
    {
        $testmenu = $this->testmenuRepository->findWithoutFail($id);

        if (empty($testmenu)) {
            Flash::error('Testmenu not found');

            return redirect(route('testmenus.index'));
        }

        $testmenu = $this->testmenuRepository->update($request->all(), $id);

        Flash::success('Testmenu updated successfully.');

        return redirect(route('testmenus.index'));
    }

    /**
     * Remove the specified testmenu from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testmenu = $this->testmenuRepository->findWithoutFail($id);

        if (empty($testmenu)) {
            Flash::error('Testmenu not found');

            return redirect(route('testmenus.index'));
        }

        $this->testmenuRepository->delete($id);

        Flash::success('Testmenu deleted successfully.');

        return redirect(route('testmenus.index'));
    }
}
