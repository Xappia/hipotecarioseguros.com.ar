<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createvw_prospectsplansRequest;
use App\Http\Requests\Updatevw_prospectsplansRequest;
use App\Repositories\vw_prospectsplansRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class vw_prospectsplansController extends AppBaseController
{
    /** @var  vw_prospectsplansRepository */
    private $vwProspectsplansRepository;

    public function __construct(vw_prospectsplansRepository $vwProspectsplansRepo)
    {
        $this->vwProspectsplansRepository = $vwProspectsplansRepo;
    }

    /**
     * Display a listing of the vw_prospectsplans.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vwProspectsplansRepository->pushCriteria(new RequestCriteria($request));
        $vwProspectsplans = $this->vwProspectsplansRepository->all();

        return view('vw_prospectsplans.index')
            ->with('vwProspectsplans', $vwProspectsplans);
    }

    /**
     * Show the form for creating a new vw_prospectsplans.
     *
     * @return Response
     */
    public function create()
    {
        return view('vw_prospectsplans.create');
    }

    /**
     * Store a newly created vw_prospectsplans in storage.
     *
     * @param Createvw_prospectsplansRequest $request
     *
     * @return Response
     */
    public function store(Createvw_prospectsplansRequest $request)
    {
        $input = $request->all();

        $vwProspectsplans = $this->vwProspectsplansRepository->create($input);

        Flash::success('Vw Prospectsplans saved successfully.');

        return redirect(route('vwProspectsplans.index'));
    }

    /**
     * Display the specified vw_prospectsplans.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vwProspectsplans = $this->vwProspectsplansRepository->findWithoutFail($id);

        if (empty($vwProspectsplans)) {
            Flash::error('Vw Prospectsplans not found');

            return redirect(route('vwProspectsplans.index'));
        }

        return view('vw_prospectsplans.show')->with('vwProspectsplans', $vwProspectsplans);
    }

    /**
     * Show the form for editing the specified vw_prospectsplans.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vwProspectsplans = $this->vwProspectsplansRepository->findWithoutFail($id);

        if (empty($vwProspectsplans)) {
            Flash::error('Vw Prospectsplans not found');

            return redirect(route('vwProspectsplans.index'));
        }

        return view('vw_prospectsplans.edit')->with('vwProspectsplans', $vwProspectsplans);
    }

    /**
     * Update the specified vw_prospectsplans in storage.
     *
     * @param  int              $id
     * @param Updatevw_prospectsplansRequest $request
     *
     * @return Response
     */
    public function update($id, Updatevw_prospectsplansRequest $request)
    {
        $vwProspectsplans = $this->vwProspectsplansRepository->findWithoutFail($id);

        if (empty($vwProspectsplans)) {
            Flash::error('Vw Prospectsplans not found');

            return redirect(route('vwProspectsplans.index'));
        }

        $vwProspectsplans = $this->vwProspectsplansRepository->update($request->all(), $id);

        Flash::success('Vw Prospectsplans updated successfully.');

        return redirect(route('vwProspectsplans.index'));
    }

    /**
     * Remove the specified vw_prospectsplans from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vwProspectsplans = $this->vwProspectsplansRepository->findWithoutFail($id);

        if (empty($vwProspectsplans)) {
            Flash::error('Vw Prospectsplans not found');

            return redirect(route('vwProspectsplans.index'));
        }

        $this->vwProspectsplansRepository->delete($id);

        Flash::success('Vw Prospectsplans deleted successfully.');

        return redirect(route('vwProspectsplans.index'));
    }
}
