<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetcoveragesplanRequest;
use App\Http\Requests\UpdatetcoveragesplanRequest;
use App\Repositories\tcoveragesplanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tcoveragesplanController extends AppBaseController
{
    /** @var  tcoveragesplanRepository */
    private $tcoveragesplanRepository;

    public function __construct(tcoveragesplanRepository $tcoveragesplanRepo)
    {
        $this->tcoveragesplanRepository = $tcoveragesplanRepo;
    }

    /**
     * Display a listing of the tcoveragesplan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tcoveragesplanRepository->pushCriteria(new RequestCriteria($request));
        $tcoveragesplans = $this->tcoveragesplanRepository->all();

        return view('tcoveragesplans.index')
            ->with('tcoveragesplans', $tcoveragesplans);
    }

    /**
     * Show the form for creating a new tcoveragesplan.
     *
     * @return Response
     */
    public function create()
    {
        return view('tcoveragesplans.create');
    }

    /**
     * Store a newly created tcoveragesplan in storage.
     *
     * @param CreatetcoveragesplanRequest $request
     *
     * @return Response
     */
    public function store(CreatetcoveragesplanRequest $request)
    {
        $input = $request->all();

        $tcoveragesplan = $this->tcoveragesplanRepository->create($input);

        Flash::success('Tcoveragesplan saved successfully.');

        return redirect(route('tcoveragesplans.index'));
    }

    /**
     * Display the specified tcoveragesplan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tcoveragesplan = $this->tcoveragesplanRepository->findWithoutFail($id);

        if (empty($tcoveragesplan)) {
            Flash::error('Tcoveragesplan not found');

            return redirect(route('tcoveragesplans.index'));
        }

        return view('tcoveragesplans.show')->with('tcoveragesplan', $tcoveragesplan);
    }

    /**
     * Show the form for editing the specified tcoveragesplan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tcoveragesplan = $this->tcoveragesplanRepository->findWithoutFail($id);

        if (empty($tcoveragesplan)) {
            Flash::error('Tcoveragesplan not found');

            return redirect(route('tcoveragesplans.index'));
        }

        return view('tcoveragesplans.edit')->with('tcoveragesplan', $tcoveragesplan);
    }

    /**
     * Update the specified tcoveragesplan in storage.
     *
     * @param  int              $id
     * @param UpdatetcoveragesplanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetcoveragesplanRequest $request)
    {
        $tcoveragesplan = $this->tcoveragesplanRepository->findWithoutFail($id);

        if (empty($tcoveragesplan)) {
            Flash::error('Tcoveragesplan not found');

            return redirect(route('tcoveragesplans.index'));
        }

        $tcoveragesplan = $this->tcoveragesplanRepository->update($request->all(), $id);

        Flash::success('Tcoveragesplan updated successfully.');

        return redirect(route('tcoveragesplans.index'));
    }

    /**
     * Remove the specified tcoveragesplan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tcoveragesplan = $this->tcoveragesplanRepository->findWithoutFail($id);

        if (empty($tcoveragesplan)) {
            Flash::error('Tcoveragesplan not found');

            return redirect(route('tcoveragesplans.index'));
        }

        $this->tcoveragesplanRepository->delete($id);

        Flash::success('Tcoveragesplan deleted successfully.');

        return redirect(route('tcoveragesplans.index'));
    }
}
