<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemplanperformanceRequest;
use App\Http\Requests\UpdatemplanperformanceRequest;
use App\Repositories\mplanperformanceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class mplanperformanceController extends AppBaseController
{
    /** @var  mplanperformanceRepository */
    private $mplanperformanceRepository;

    public function __construct(mplanperformanceRepository $mplanperformanceRepo)
    {
        $this->mplanperformanceRepository = $mplanperformanceRepo;
    }

    /**
     * Display a listing of the mplanperformance.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mplanperformanceRepository->pushCriteria(new RequestCriteria($request));
        $mplanperformances = $this->mplanperformanceRepository->all();

        return view('mplanperformances.index')
            ->with('mplanperformances', $mplanperformances);
    }

    /**
     * Show the form for creating a new mplanperformance.
     *
     * @return Response
     */
    public function create()
    {
        return view('mplanperformances.create');
    }

    /**
     * Store a newly created mplanperformance in storage.
     *
     * @param CreatemplanperformanceRequest $request
     *
     * @return Response
     */
    public function store(CreatemplanperformanceRequest $request)
    {
        $input = $request->all();

        $mplanperformance = $this->mplanperformanceRepository->create($input);

        Flash::success('Mplanperformance saved successfully.');

        return redirect(route('mplanperformances.index'));
    }

    /**
     * Display the specified mplanperformance.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mplanperformance = $this->mplanperformanceRepository->findWithoutFail($id);

        if (empty($mplanperformance)) {
            Flash::error('Mplanperformance not found');

            return redirect(route('mplanperformances.index'));
        }

        return view('mplanperformances.show')->with('mplanperformance', $mplanperformance);
    }

    /**
     * Show the form for editing the specified mplanperformance.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mplanperformance = $this->mplanperformanceRepository->findWithoutFail($id);

        if (empty($mplanperformance)) {
            Flash::error('Mplanperformance not found');

            return redirect(route('mplanperformances.index'));
        }

        return view('mplanperformances.edit')->with('mplanperformance', $mplanperformance);
    }

    /**
     * Update the specified mplanperformance in storage.
     *
     * @param  int              $id
     * @param UpdatemplanperformanceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemplanperformanceRequest $request)
    {
        $mplanperformance = $this->mplanperformanceRepository->findWithoutFail($id);

        if (empty($mplanperformance)) {
            Flash::error('Mplanperformance not found');

            return redirect(route('mplanperformances.index'));
        }

        $mplanperformance = $this->mplanperformanceRepository->update($request->all(), $id);

        Flash::success('Mplanperformance updated successfully.');

        return redirect(route('mplanperformances.index'));
    }

    /**
     * Remove the specified mplanperformance from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mplanperformance = $this->mplanperformanceRepository->findWithoutFail($id);

        if (empty($mplanperformance)) {
            Flash::error('Mplanperformance not found');

            return redirect(route('mplanperformances.index'));
        }

        $this->mplanperformanceRepository->delete($id);

        Flash::success('Mplanperformance deleted successfully.');

        return redirect(route('mplanperformances.index'));
    }
}
