<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetplanbuttonsRequest;
use App\Http\Requests\UpdatetplanbuttonsRequest;
use App\Repositories\tplanbuttonsRepository;
use App\Repositories\mplannewRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\mplannew;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tplanbuttonsController extends AppBaseController
{
    /** @var  tplanbuttonsRepository */
    private $tplanbuttonsRepository;

    public function __construct(tplanbuttonsRepository $tplanbuttonsRepo)
    {
        $this->tplanbuttonsRepository = $tplanbuttonsRepo;
    }

    /**
     * Display a listing of the tplanbuttons.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tplanbuttonsRepository->pushCriteria(new RequestCriteria($request));
        $tplanbuttons = $this->tplanbuttonsRepository->all();

        $mplannews = mplannew::pluck('type', 'id');

        return view('tplanbuttons.index')
            ->with(array('tplanbuttons' => $tplanbuttons, 'mplannews' => $mplannews));
    }

    /**
     * Show the form for creating a new tplanbuttons.
     *
     * @return Response
     */
    public function create()
    {
        return view('tplanbuttons.create');
    }

    /**
     * Store a newly created tplanbuttons in storage.
     *
     * @param CreatetplanbuttonsRequest $request
     *
     * @return Response
     */
    public function store(CreatetplanbuttonsRequest $request)
    {
        $input = $request->all();

        $tplanbuttons = $this->tplanbuttonsRepository->create($input);

        Flash::success('Tplanbuttons saved successfully.');

        return redirect(route('tplanbuttons.index'));
    }

    /**
     * Display the specified tplanbuttons.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tplanbuttons = $this->tplanbuttonsRepository->findWithoutFail($id);

        if (empty($tplanbuttons)) {
            Flash::error('Tplanbuttons not found');

            return redirect(route('tplanbuttons.index'));
        }

        return view('tplanbuttons.show')->with('tplanbuttons', $tplanbuttons);
    }

    /**
     * Show the form for editing the specified tplanbuttons.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tplanbuttons = $this->tplanbuttonsRepository->findWithoutFail($id);

        if (empty($tplanbuttons)) {
            Flash::error('Tplanbuttons not found');

            return redirect(route('tplanbuttons.index'));
        }

        return view('tplanbuttons.edit')->with('tplanbuttons', $tplanbuttons);
    }

    /**
     * Update the specified tplanbuttons in storage.
     *
     * @param  int              $id
     * @param UpdatetplanbuttonsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetplanbuttonsRequest $request)
    {
        $tplanbuttons = $this->tplanbuttonsRepository->findWithoutFail($id);

        if (empty($tplanbuttons)) {
            Flash::error('Tplanbuttons not found');

            return redirect(route('tplanbuttons.index'));
        }

        $tplanbuttons = $this->tplanbuttonsRepository->update($request->all(), $id);

        Flash::success('Tplanbuttons updated successfully.');

        return redirect(route('tplanbuttons.index'));
    }

    /**
     * Remove the specified tplanbuttons from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tplanbuttons = $this->tplanbuttonsRepository->findWithoutFail($id);

        if (empty($tplanbuttons)) {
            Flash::error('Tplanbuttons not found');

            return redirect(route('tplanbuttons.index'));
        }

        $this->tplanbuttonsRepository->delete($id);

        Flash::success('Tplanbuttons deleted successfully.');

        return redirect(route('tplanbuttons.index'));
    }
}
