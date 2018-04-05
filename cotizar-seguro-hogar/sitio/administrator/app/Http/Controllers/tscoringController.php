<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetscoringRequest;
use App\Http\Requests\UpdatetscoringRequest;
use App\Repositories\tscoringRepository;
use App\Repositories\mquestionRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\mquestion;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tscoringController extends AppBaseController
{
    /** @var  tscoringRepository */
    private $tscoringRepository;

    /** @var  mquestionRepository */
    private $mquestionRepository;

    public function __construct(tscoringRepository $tscoringRepo)
    {
        $this->tscoringRepository = $tscoringRepo;
    }

    /**
     * Display a listing of the tscoring.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tscoringRepository->pushCriteria(new RequestCriteria($request));
        $tscorings = $this->tscoringRepository->all();

        $mquestion = mquestion::pluck('description', 'id');

        return view('tscorings.index')
            ->with(array('tscorings' => $tscorings, 'mquestion' => $mquestion));
    }

    /**
     * Show the form for creating a new tscoring.
     *
     * @return Response
     */
    public function create()
    {
        return view('tscorings.create');
    }

    /**
     * Store a newly created tscoring in storage.
     *
     * @param CreatetscoringRequest $request
     *
     * @return Response
     */
    public function store(CreatetscoringRequest $request)
    {
        $input = $request->all();

        $tscoring = $this->tscoringRepository->create($input);

        Flash::success('Guardado.');

        return redirect(route('tscorings.index'));
    }

    /**
     * Display the specified tscoring.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tscoring = $this->tscoringRepository->findWithoutFail($id);
        
        $mquestion = mquestion::pluck('description', 'id');

        if (empty($tscoring)) {
            Flash::error('No encontrado.');

            return redirect(route('tscorings.index'));
        }

        return view('tscorings.show')->with(array('tscoring' => $tscoring, 'mquestion' => $mquestion));
    }

    /**
     * Show the form for editing the specified tscoring.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mquestion = mquestion::pluck('description', 'id');

        $tscoring = $this->tscoringRepository->findWithoutFail($id);

        if (empty($tscoring)) {
            Flash::error('No encontrado.');

            return redirect(route('tscorings.index'));
        }

        return view('tscorings.edit')->with(array('tscoring'=>$tscoring, 'mquestion'=>$mquestion));
    }

    /**
     * Update the specified tscoring in storage.
     *
     * @param  int              $id
     * @param UpdatetscoringRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetscoringRequest $request)
    {
        $tscoring = $this->tscoringRepository->findWithoutFail($id);

        if (empty($tscoring)) {
            Flash::error('No encontrado.');

            return redirect(route('tscorings.index'));
        }

        $tscoring = $this->tscoringRepository->update($request->all(), $id);

        Flash::success('Actualizado.');

        return redirect(route('tscorings.index'));
    }

    /**
     * Remove the specified tscoring from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tscoring = $this->tscoringRepository->findWithoutFail($id);

        if (empty($tscoring)) {
            Flash::error('No encontrado.');

            return redirect(route('tscorings.index'));
        }

        $this->tscoringRepository->delete($id);

        Flash::success('Eliminado.');

        return redirect(route('tscorings.index'));
    }
}
