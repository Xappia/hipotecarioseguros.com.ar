<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetprospectplanRequest;
use App\Http\Requests\UpdatetprospectplanRequest;
use App\Repositories\tprospectplanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tprospectplanController extends AppBaseController
{
    /** @var  tprospectplanRepository */
    private $tprospectplanRepository;

    public function __construct(tprospectplanRepository $tprospectplanRepo)
    {
        $this->tprospectplanRepository = $tprospectplanRepo;
    }

    /**
     * Display a listing of the tprospectplan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tprospectplanRepository->pushCriteria(new RequestCriteria($request));
        $tprospectplans = $this->tprospectplanRepository->all();

        return view('tprospectplans.index')
            ->with('tprospectplans', $tprospectplans);
    }

    /**
     * Show the form for creating a new tprospectplan.
     *
     * @return Response
     */
    public function create()
    {
        return view('tprospectplans.create');
    }

    /**
     * Store a newly created tprospectplan in storage.
     *
     * @param CreatetprospectplanRequest $request
     *
     * @return Response
     */
    public function store(CreatetprospectplanRequest $request)
    {
        $input = $request->all();

        $tprospectplan = $this->tprospectplanRepository->create($input);

        Flash::success('Guardado.');

        return redirect(route('tprospectplans.index'));
    }

    /**
     * Display the specified tprospectplan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tprospectplan = $this->tprospectplanRepository->findWithoutFail($id);

        if (empty($tprospectplan)) {
            Flash::error('No encontrado.');

            return redirect(route('tprospectplans.index'));
        }

        return view('tprospectplans.show')->with('tprospectplan', $tprospectplan);
    }

    /**
     * Show the form for editing the specified tprospectplan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tprospectplan = $this->tprospectplanRepository->findWithoutFail($id);

        if (empty($tprospectplan)) {
            Flash::error('No encontrado.');

            return redirect(route('tprospectplans.index'));
        }

        return view('tprospectplans.edit')->with('tprospectplan', $tprospectplan);
    }

    /**
     * Update the specified tprospectplan in storage.
     *
     * @param  int              $id
     * @param UpdatetprospectplanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetprospectplanRequest $request)
    {
        $tprospectplan = $this->tprospectplanRepository->findWithoutFail($id);

        if (empty($tprospectplan)) {
            Flash::error('No encontrado.');

            return redirect(route('tprospectplans.index'));
        }

        $tprospectplan = $this->tprospectplanRepository->update($request->all(), $id);

        Flash::success('Actualizado.');

        return redirect(route('tprospectplans.index'));
    }

    /**
     * Remove the specified tprospectplan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tprospectplan = $this->tprospectplanRepository->findWithoutFail($id);

        if (empty($tprospectplan)) {
            Flash::error('No encontrado.');

            return redirect(route('tprospectplans.index'));
        }

        $this->tprospectplanRepository->delete($id);

        Flash::success('Eliminado.');

        return redirect(route('tprospectplans.index'));
    }
}
