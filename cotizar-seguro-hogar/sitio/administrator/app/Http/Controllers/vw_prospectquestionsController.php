<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createvw_prospectquestionsRequest;
use App\Http\Requests\Updatevw_prospectquestionsRequest;
use App\Repositories\vw_prospectquestionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class vw_prospectquestionsController extends AppBaseController
{
    /** @var  vw_prospectquestionsRepository */
    private $vwProspectquestionsRepository;

    public function __construct(vw_prospectquestionsRepository $vwProspectquestionsRepo)
    {
        $this->vwProspectquestionsRepository = $vwProspectquestionsRepo;
    }

    /**
     * Display a listing of the vw_prospectquestions.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vwProspectquestionsRepository->pushCriteria(new RequestCriteria($request));
        $vwProspectquestions = $this->vwProspectquestionsRepository->all();

        return view('vw_prospectquestions.index')
            ->with('vwProspectquestions', $vwProspectquestions);
    }

    /**
     * Show the form for creating a new vw_prospectquestions.
     *
     * @return Response
     */
    public function create()
    {
        return view('vw_prospectquestions.create');
    }

    /**
     * Store a newly created vw_prospectquestions in storage.
     *
     * @param Createvw_prospectquestionsRequest $request
     *
     * @return Response
     */
    public function store(Createvw_prospectquestionsRequest $request)
    {
        $input = $request->all();

        $vwProspectquestions = $this->vwProspectquestionsRepository->create($input);

        Flash::success('Vw Prospectquestions saved successfully.');

        return redirect(route('vwProspectquestions.index'));
    }

    /**
     * Display the specified vw_prospectquestions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vwProspectquestions = $this->vwProspectquestionsRepository->findWithoutFail($id);

        if (empty($vwProspectquestions)) {
            Flash::error('Vw Prospectquestions not found');

            return redirect(route('vwProspectquestions.index'));
        }

        return view('vw_prospectquestions.show')->with('vwProspectquestions', $vwProspectquestions);
    }

    /**
     * Show the form for editing the specified vw_prospectquestions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vwProspectquestions = $this->vwProspectquestionsRepository->findWithoutFail($id);

        if (empty($vwProspectquestions)) {
            Flash::error('Vw Prospectquestions not found');

            return redirect(route('vwProspectquestions.index'));
        }

        return view('vw_prospectquestions.edit')->with('vwProspectquestions', $vwProspectquestions);
    }

    /**
     * Update the specified vw_prospectquestions in storage.
     *
     * @param  int              $id
     * @param Updatevw_prospectquestionsRequest $request
     *
     * @return Response
     */
    public function update($id, Updatevw_prospectquestionsRequest $request)
    {
        $vwProspectquestions = $this->vwProspectquestionsRepository->findWithoutFail($id);

        if (empty($vwProspectquestions)) {
            Flash::error('Vw Prospectquestions not found');

            return redirect(route('vwProspectquestions.index'));
        }

        $vwProspectquestions = $this->vwProspectquestionsRepository->update($request->all(), $id);

        Flash::success('Vw Prospectquestions updated successfully.');

        return redirect(route('vwProspectquestions.index'));
    }

    /**
     * Remove the specified vw_prospectquestions from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vwProspectquestions = $this->vwProspectquestionsRepository->findWithoutFail($id);

        if (empty($vwProspectquestions)) {
            Flash::error('Vw Prospectquestions not found');

            return redirect(route('vwProspectquestions.index'));
        }

        $this->vwProspectquestionsRepository->delete($id);

        Flash::success('Vw Prospectquestions deleted successfully.');

        return redirect(route('vwProspectquestions.index'));
    }
}
