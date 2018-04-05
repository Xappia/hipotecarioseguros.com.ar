<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetpropectsquiestionsRequest;
use App\Http\Requests\UpdatetpropectsquiestionsRequest;
use App\Repositories\tpropectsquiestionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tpropectsquiestionsController extends AppBaseController
{
    /** @var  tpropectsquiestionsRepository */
    private $tpropectsquiestionsRepository;

    public function __construct(tpropectsquiestionsRepository $tpropectsquiestionsRepo)
    {
        $this->tpropectsquiestionsRepository = $tpropectsquiestionsRepo;
    }

    /**
     * Display a listing of the tpropectsquiestions.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tpropectsquiestionsRepository->pushCriteria(new RequestCriteria($request));
        $tpropectsquiestions = $this->tpropectsquiestionsRepository->all();

        return view('tpropectsquiestions.index')
            ->with('tpropectsquiestions', $tpropectsquiestions);
    }

    /**
     * Show the form for creating a new tpropectsquiestions.
     *
     * @return Response
     */
    public function create()
    {
        return view('tpropectsquiestions.create');
    }

    /**
     * Store a newly created tpropectsquiestions in storage.
     *
     * @param CreatetpropectsquiestionsRequest $request
     *
     * @return Response
     */
    public function store(CreatetpropectsquiestionsRequest $request)
    {
        $input = $request->all();

        $tpropectsquiestions = $this->tpropectsquiestionsRepository->create($input);

        Flash::success('Guardado.');

        return redirect(route('tpropectsquiestions.index'));
    }

    /**
     * Display the specified tpropectsquiestions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tpropectsquiestions = $this->tpropectsquiestionsRepository->findWithoutFail($id);

        if (empty($tpropectsquiestions)) {
            Flash::error('No encontrado.');

            return redirect(route('tpropectsquiestions.index'));
        }

        return view('tpropectsquiestions.show')->with('tpropectsquiestions', $tpropectsquiestions);
    }

    /**
     * Show the form for editing the specified tpropectsquiestions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tpropectsquiestions = $this->tpropectsquiestionsRepository->findWithoutFail($id);

        if (empty($tpropectsquiestions)) {
            Flash::error('No encontrado.');

            return redirect(route('tpropectsquiestions.index'));
        }

        return view('tpropectsquiestions.edit')->with('tpropectsquiestions', $tpropectsquiestions);
    }

    /**
     * Update the specified tpropectsquiestions in storage.
     *
     * @param  int              $id
     * @param UpdatetpropectsquiestionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetpropectsquiestionsRequest $request)
    {
        $tpropectsquiestions = $this->tpropectsquiestionsRepository->findWithoutFail($id);

        if (empty($tpropectsquiestions)) {
            Flash::error('No encontrado.');

            return redirect(route('tpropectsquiestions.index'));
        }

        $tpropectsquiestions = $this->tpropectsquiestionsRepository->update($request->all(), $id);

        Flash::success('Actualizado.');

        return redirect(route('tpropectsquiestions.index'));
    }

    /**
     * Remove the specified tpropectsquiestions from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tpropectsquiestions = $this->tpropectsquiestionsRepository->findWithoutFail($id);

        if (empty($tpropectsquiestions)) {
            Flash::error('No encontrado.');

            return redirect(route('tpropectsquiestions.index'));
        }

        $this->tpropectsquiestionsRepository->delete($id);

        Flash::success('Eliminado.');

        return redirect(route('tpropectsquiestions.index'));
    }
}
