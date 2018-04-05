<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemquestionRequest;
use App\Http\Requests\UpdatemquestionRequest;
use App\Repositories\mquestionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\mquestion;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class mquestionController extends AppBaseController
{
    /** @var  mquestionRepository */
    private $mquestionRepository;

    public function __construct(mquestionRepository $mquestionRepo)
    {
        $this->mquestionRepository = $mquestionRepo;
    }

    /**
     * Display a listing of the mquestion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mquestionRepository->pushCriteria(new RequestCriteria($request));
        $mquestions = $this->mquestionRepository->all();

        return view('mquestions.index')
            ->with('mquestions', $mquestions);
    }

    /**
     * Show the form for creating a new mquestion.
     *
     * @return Response
     */
    public function create()
    {
        return view('mquestions.create');
    }

    /**
     * Store a newly created mquestion in storage.
     *
     * @param CreatemquestionRequest $request
     *
     * @return Response
     */
    public function store(CreatemquestionRequest $request)
    {
        $input = $request->all();

        $mquestion = $this->mquestionRepository->create($input);

        Flash::success('Guardado.');

        return redirect(route('mquestions.index'));
    }

    /**
     * Display the specified mquestion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mquestion = $this->mquestionRepository->findWithoutFail($id);

        if (empty($mquestion)) {
            Flash::error('No encontrado.');

            return redirect(route('mquestions.index'));
        }

        return view('mquestions.show')->with('mquestion', $mquestion);
    }

    /**
     * Show the form for editing the specified mquestion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mquestion = $this->mquestionRepository->findWithoutFail($id);

        $mquestions = mquestion::pluck('description', 'question');

        if (empty($mquestion)) {
            Flash::error('No encontrado.');

            return redirect(route('mquestions.index'));
        }

        return view('mquestions.edit')->with(array('mquestion' => $mquestion, 'mquestions' => $mquestions));
    }

    /**
     * Update the specified mquestion in storage.
     *
     * @param  int              $id
     * @param UpdatemquestionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemquestionRequest $request)
    {
        $mquestion = $this->mquestionRepository->findWithoutFail($id);

        if (empty($mquestion)) {
            Flash::error('No encontrado.');

            return redirect(route('mquestions.index'));
        }

         if ($request->hasFile('phpfile1')) {

            //return dd($request->file('phpfile1'));

            $this->validate($request,[
            'phpfile1' => "mimes:php"
            ]);

        }

        $mquestion = $this->mquestionRepository->update($request->all(), $id);

        Flash::success('Actualizado.');

       return redirect(route('mquestions.index'));
    }

    /**
     * Remove the specified mquestion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mquestion = $this->mquestionRepository->findWithoutFail($id);

        if (empty($mquestion)) {
            Flash::error('No encontrado.');

            return redirect(route('mquestions.index'));
        }

        $this->mquestionRepository->delete($id);

        Flash::success('Eliminado.');

        return redirect(route('mquestions.index'));
    }
}
