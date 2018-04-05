<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createvw_questiontimesRequest;
use App\Http\Requests\Updatevw_questiontimesRequest;
use App\Repositories\vw_questiontimesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class vw_questiontimesController extends AppBaseController
{
    /** @var  vw_questiontimesRepository */
    private $vwQuestiontimesRepository;

    public function __construct(vw_questiontimesRepository $vwQuestiontimesRepo)
    {
        $this->vwQuestiontimesRepository = $vwQuestiontimesRepo;
    }

    /**
     * Display a listing of the vw_questiontimes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vwQuestiontimesRepository->pushCriteria(new RequestCriteria($request));
        $vwQuestiontimes = $this->vwQuestiontimesRepository->all();

        return view('vw_questiontimes.index')
            ->with('vwQuestiontimes', $vwQuestiontimes);
    }

    /**
     * Show the form for creating a new vw_questiontimes.
     *
     * @return Response
     */
    public function create()
    {
        return view('vw_questiontimes.create');
    }

    /**
     * Store a newly created vw_questiontimes in storage.
     *
     * @param Createvw_questiontimesRequest $request
     *
     * @return Response
     */
    public function store(Createvw_questiontimesRequest $request)
    {
        $input = $request->all();

        $vwQuestiontimes = $this->vwQuestiontimesRepository->create($input);

        Flash::success('Vw Questiontimes saved successfully.');

        return redirect(route('vwQuestiontimes.index'));
    }

    /**
     * Display the specified vw_questiontimes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vwQuestiontimes = $this->vwQuestiontimesRepository->findWithoutFail($id);

        if (empty($vwQuestiontimes)) {
            Flash::error('Vw Questiontimes not found');

            return redirect(route('vwQuestiontimes.index'));
        }

        return view('vw_questiontimes.show')->with('vwQuestiontimes', $vwQuestiontimes);
    }

    /**
     * Show the form for editing the specified vw_questiontimes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vwQuestiontimes = $this->vwQuestiontimesRepository->findWithoutFail($id);

        if (empty($vwQuestiontimes)) {
            Flash::error('Vw Questiontimes not found');

            return redirect(route('vwQuestiontimes.index'));
        }

        return view('vw_questiontimes.edit')->with('vwQuestiontimes', $vwQuestiontimes);
    }

    /**
     * Update the specified vw_questiontimes in storage.
     *
     * @param  int              $id
     * @param Updatevw_questiontimesRequest $request
     *
     * @return Response
     */
    public function update($id, Updatevw_questiontimesRequest $request)
    {
        $vwQuestiontimes = $this->vwQuestiontimesRepository->findWithoutFail($id);

        if (empty($vwQuestiontimes)) {
            Flash::error('Vw Questiontimes not found');

            return redirect(route('vwQuestiontimes.index'));
        }

        $vwQuestiontimes = $this->vwQuestiontimesRepository->update($request->all(), $id);

        Flash::success('Vw Questiontimes updated successfully.');

        return redirect(route('vwQuestiontimes.index'));
    }

    /**
     * Remove the specified vw_questiontimes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vwQuestiontimes = $this->vwQuestiontimesRepository->findWithoutFail($id);

        if (empty($vwQuestiontimes)) {
            Flash::error('Vw Questiontimes not found');

            return redirect(route('vwQuestiontimes.index'));
        }

        $this->vwQuestiontimesRepository->delete($id);

        Flash::success('Vw Questiontimes deleted successfully.');

        return redirect(route('vwQuestiontimes.index'));
    }
}
