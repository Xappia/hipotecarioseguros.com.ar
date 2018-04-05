<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemplanRequest;
use App\Http\Requests\UpdatemplanRequest;
use App\Repositories\mplanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class mplanController extends AppBaseController
{
    /** @var  mplanRepository */
    private $mplanRepository;

    public function __construct(mplanRepository $mplanRepo)
    {
        $this->mplanRepository = $mplanRepo;
    }

    /**
     * Display a listing of the mplan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mplanRepository->pushCriteria(new RequestCriteria($request));
        $mplans = $this->mplanRepository->all();

        return view('mplans.index')
            ->with('mplans', $mplans);
    }

    /**
     * Display a performance of the mplannew.
     *
     * @param Request $request
     * @return Response
     */
    public function performance(Request $request)
    {
        $this->mplannewRepository->pushCriteria(new RequestCriteria($request));
        $mplannews = $this->mplannewRepository->all();

        return view('mplannews.performance')
            ->with('mplannews', $mplannews);
    }
    
    /**
     * Show the form for creating a new mplan.
     *
     * @return Response
     */
    public function create()
    {
        return view('mplans.create');
    }

    /**
     * Store a newly created mplan in storage.
     *
     * @param CreatemplanRequest $request
     *
     * @return Response
     */
    public function store(CreatemplanRequest $request)
    {
        $input = $request->all();

        $mplan = $this->mplanRepository->create($input);

        Flash::success('Guardado.');

        return redirect(route('mplans.index'));
    }

    /**
     * Display the specified mplan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mplan = $this->mplanRepository->findWithoutFail($id);

        if (empty($mplan)) {
            Flash::error('No encontrado.');

            return redirect(route('mplans.index'));
        }

        return view('mplans.show')->with('mplan', $mplan);
    }

    /**
     * Show the form for editing the specified mplan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mplan = $this->mplanRepository->findWithoutFail($id);

        if (empty($mplan)) {
            Flash::error('No encontrado.');

            return redirect(route('mplans.index'));
        }

        return view('mplans.edit')->with('mplan', $mplan);
    }

    /**
     * Update the specified mplan in storage.
     *
     * @param  int              $id
     * @param UpdatemplanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemplanRequest $request)
    {
        $mplan = $this->mplanRepository->findWithoutFail($id);

        if (empty($mplan)) {
            Flash::error('No encontrado.');

            return redirect(route('mplans.index'));
        }

        $mplan = $this->mplanRepository->update($request->all(), $id);

        Flash::success('Actualizado.');

        return redirect(route('mplans.index'));
    }

    /**
     * Remove the specified mplan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mplan = $this->mplanRepository->findWithoutFail($id);

        if (empty($mplan)) {
            Flash::error('No encontrado.');

            return redirect(route('mplans.index'));
        }

        $this->mplanRepository->delete($id);

        Flash::success('Eliminado.');

        return redirect(route('mplans.index'));
    }
}
