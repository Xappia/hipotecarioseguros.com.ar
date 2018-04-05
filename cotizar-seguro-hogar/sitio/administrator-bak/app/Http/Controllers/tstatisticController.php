<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetstatisticRequest;
use App\Http\Requests\UpdatetstatisticRequest;
use App\Repositories\tstatisticRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tstatisticController extends AppBaseController
{
    /** @var  tstatisticRepository */
    private $tstatisticRepository;

    public function __construct(tstatisticRepository $tstatisticRepo)
    {
        $this->tstatisticRepository = $tstatisticRepo;
    }

    /**
     * Display a listing of the tstatistic.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tstatisticRepository->pushCriteria(new RequestCriteria($request));
        $tstatistics = $this->tstatisticRepository->all();

        return view('tstatistics.index')
            ->with('tstatistics', $tstatistics);
    }

    /**
     * Show the form for creating a new tstatistic.
     *
     * @return Response
     */
    public function create()
    {
        return view('tstatistics.create');
    }

    /**
     * Store a newly created tstatistic in storage.
     *
     * @param CreatetstatisticRequest $request
     *
     * @return Response
     */
    public function store(CreatetstatisticRequest $request)
    {
        $input = $request->all();

        $tstatistic = $this->tstatisticRepository->create($input);

        Flash::success('Guardado.');

        return redirect(route('tstatistics.index'));
    }

    /**
     * Display the specified tstatistic.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tstatistic = $this->tstatisticRepository->findWithoutFail($id);

        if (empty($tstatistic)) {
            Flash::error('No encontrado.');

            return redirect(route('tstatistics.index'));
        }

        return view('tstatistics.show')->with('tstatistic', $tstatistic);
    }

    /**
     * Show the form for editing the specified tstatistic.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tstatistic = $this->tstatisticRepository->findWithoutFail($id);

        if (empty($tstatistic)) {
            Flash::error('No encontrado.');

            return redirect(route('tstatistics.index'));
        }

        return view('tstatistics.edit')->with('tstatistic', $tstatistic);
    }

    /**
     * Update the specified tstatistic in storage.
     *
     * @param  int              $id
     * @param UpdatetstatisticRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetstatisticRequest $request)
    {
        $tstatistic = $this->tstatisticRepository->findWithoutFail($id);

        if (empty($tstatistic)) {
            Flash::error('No encontrado.');

            return redirect(route('tstatistics.index'));
        }

        $tstatistic = $this->tstatisticRepository->update($request->all(), $id);

        Flash::success('Actualizado.');

        return redirect(route('tstatistics.index'));
    }

    /**
     * Remove the specified tstatistic from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tstatistic = $this->tstatisticRepository->findWithoutFail($id);

        if (empty($tstatistic)) {
            Flash::error('No encontrado.');

            return redirect(route('tstatistics.index'));
        }

        $this->tstatisticRepository->delete($id);

        Flash::success('Eliminado.');

        return redirect(route('tstatistics.index'));
    }
}
