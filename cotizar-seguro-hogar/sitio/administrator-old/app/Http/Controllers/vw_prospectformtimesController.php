<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createvw_prospectformtimesRequest;
use App\Http\Requests\Updatevw_prospectformtimesRequest;
use App\Repositories\vw_prospectformtimesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class vw_prospectformtimesController extends AppBaseController
{
    /** @var  vw_prospectformtimesRepository */
    private $vwProspectformtimesRepository;

    public function __construct(vw_prospectformtimesRepository $vwProspectformtimesRepo)
    {
        $this->vwProspectformtimesRepository = $vwProspectformtimesRepo;
    }

    /**
     * Display a listing of the vw_prospectformtimes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vwProspectformtimesRepository->pushCriteria(new RequestCriteria($request));
        $vwProspectformtimes = $this->vwProspectformtimesRepository->all();

        return view('vw_prospectformtimes.index')
            ->with('vwProspectformtimes', $vwProspectformtimes);
    }

    /**
     * Show the form for creating a new vw_prospectformtimes.
     *
     * @return Response
     */
    public function create()
    {
        return view('vw_prospectformtimes.create');
    }

    /**
     * Store a newly created vw_prospectformtimes in storage.
     *
     * @param Createvw_prospectformtimesRequest $request
     *
     * @return Response
     */
    public function store(Createvw_prospectformtimesRequest $request)
    {
        $input = $request->all();

        $vwProspectformtimes = $this->vwProspectformtimesRepository->create($input);

        Flash::success('Vw Prospectformtimes saved successfully.');

        return redirect(route('vwProspectformtimes.index'));
    }

    /**
     * Display the specified vw_prospectformtimes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vwProspectformtimes = $this->vwProspectformtimesRepository->findWithoutFail($id);

        if (empty($vwProspectformtimes)) {
            Flash::error('Vw Prospectformtimes not found');

            return redirect(route('vwProspectformtimes.index'));
        }

        return view('vw_prospectformtimes.show')->with('vwProspectformtimes', $vwProspectformtimes);
    }

    /**
     * Show the form for editing the specified vw_prospectformtimes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vwProspectformtimes = $this->vwProspectformtimesRepository->findWithoutFail($id);

        if (empty($vwProspectformtimes)) {
            Flash::error('Vw Prospectformtimes not found');

            return redirect(route('vwProspectformtimes.index'));
        }

        return view('vw_prospectformtimes.edit')->with('vwProspectformtimes', $vwProspectformtimes);
    }

    /**
     * Update the specified vw_prospectformtimes in storage.
     *
     * @param  int              $id
     * @param Updatevw_prospectformtimesRequest $request
     *
     * @return Response
     */
    public function update($id, Updatevw_prospectformtimesRequest $request)
    {
        $vwProspectformtimes = $this->vwProspectformtimesRepository->findWithoutFail($id);

        if (empty($vwProspectformtimes)) {
            Flash::error('Vw Prospectformtimes not found');

            return redirect(route('vwProspectformtimes.index'));
        }

        $vwProspectformtimes = $this->vwProspectformtimesRepository->update($request->all(), $id);

        Flash::success('Vw Prospectformtimes updated successfully.');

        return redirect(route('vwProspectformtimes.index'));
    }

    /**
     * Remove the specified vw_prospectformtimes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vwProspectformtimes = $this->vwProspectformtimesRepository->findWithoutFail($id);

        if (empty($vwProspectformtimes)) {
            Flash::error('Vw Prospectformtimes not found');

            return redirect(route('vwProspectformtimes.index'));
        }

        $this->vwProspectformtimesRepository->delete($id);

        Flash::success('Vw Prospectformtimes deleted successfully.');

        return redirect(route('vwProspectformtimes.index'));
    }
}
