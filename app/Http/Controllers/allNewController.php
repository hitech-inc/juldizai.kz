<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateallNewRequest;
use App\Http\Requests\UpdateallNewRequest;
use App\Repositories\allNewRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class allNewController extends AppBaseController
{
    /** @var  allNewRepository */
    private $allNewRepository;

    public function __construct(allNewRepository $allNewRepo)
    {
        $this->allNewRepository = $allNewRepo;
    }

    /**
     * Display a listing of the allNew.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->allNewRepository->pushCriteria(new RequestCriteria($request));
        $allNews = $this->allNewRepository->all();

        return view('backend.all_news.index')
            ->with('allNews', $allNews);
    }

    /**
     * Show the form for creating a new allNew.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.all_news.create');
    }

    /**
     * Store a newly created allNew in storage.
     *
     * @param CreateallNewRequest $request
     *
     * @return Response
     */
    public function store(CreateallNewRequest $request)
    {
        $input = $request->all();

        $allNew = $this->allNewRepository->create($input);

        Flash::success('All New saved successfully.');

        return redirect(route('allNews.index'));
    }

    /**
     * Display the specified allNew.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $allNew = $this->allNewRepository->findWithoutFail($id);

        if (empty($allNew)) {
            Flash::error('All New not found');

            return redirect(route('allNews.index'));
        }

        return view('backend.all_news.show')->with('allNew', $allNew);
    }

    /**
     * Show the form for editing the specified allNew.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $allNew = $this->allNewRepository->findWithoutFail($id);

        if (empty($allNew)) {
            Flash::error('All New not found');

            return redirect(route('allNews.index'));
        }

        return view('backend.all_news.edit')->with('allNew', $allNew);
    }

    /**
     * Update the specified allNew in storage.
     *
     * @param  int              $id
     * @param UpdateallNewRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateallNewRequest $request)
    {
        $allNew = $this->allNewRepository->findWithoutFail($id);

        if (empty($allNew)) {
            Flash::error('All New not found');

            return redirect(route('allNews.index'));
        }

        $allNew = $this->allNewRepository->update($request->all(), $id);

        Flash::success('All New updated successfully.');

        return redirect(route('allNews.index'));
    }

    /**
     * Remove the specified allNew from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $allNew = $this->allNewRepository->findWithoutFail($id);

        if (empty($allNew)) {
            Flash::error('All New not found');

            return redirect(route('allNews.index'));
        }

        $this->allNewRepository->delete($id);

        Flash::success('All New deleted successfully.');

        return redirect(route('allNews.index'));
    }
}
