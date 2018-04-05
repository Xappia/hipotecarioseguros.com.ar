<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createvw_questionRequest;
use App\Http\Requests\Updatevw_questionRequest;
use App\Repositories\vw_questionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class vw_questionController extends AppBaseController
{
    /** @var  vw_questionRepository */
    private $vwQuestionRepository;

    public function __construct(vw_questionRepository $vwQuestionRepo)
    {
        $this->vwQuestionRepository = $vwQuestionRepo;
    }

    /**
     * Display a listing of the vw_question.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vwQuestionRepository->pushCriteria(new RequestCriteria($request));
        $vwQuestions = $this->vwQuestionRepository->all();

        return view('vw_questions.index')
            ->with('vwQuestions', $vwQuestions);
    }

    /**
     * Show the form for creating a new vw_question.
     *
     * @return Response
     */
    public function create()
    {
        return view('vw_questions.create');
    }

    /**
     * Store a newly created vw_question in storage.
     *
     * @param Createvw_questionRequest $request
     *
     * @return Response
     */
    public function store(Createvw_questionRequest $request)
    {
        $input = $request->all();

        $vwQuestion = $this->vwQuestionRepository->create($input);

        Flash::success('Vw Question saved successfully.');

        return redirect(route('vwQuestions.index'));
    }

    /**
     * Display the specified vw_question.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vwQuestion = $this->vwQuestionRepository->findWithoutFail($id);

        if (empty($vwQuestion)) {
            Flash::error('Vw Question not found');

            return redirect(route('vwQuestions.index'));
        }

        return view('vw_questions.show')->with('vwQuestion', $vwQuestion);
    }

    /**
     * Show the form for editing the specified vw_question.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vwQuestion = $this->vwQuestionRepository->findWithoutFail($id);

        if (empty($vwQuestion)) {
            Flash::error('Vw Question not found');

            return redirect(route('vwQuestions.index'));
        }

        return view('vw_questions.edit')->with('vwQuestion', $vwQuestion);
    }

    /**
     * Update the specified vw_question in storage.
     *
     * @param  int              $id
     * @param Updatevw_questionRequest $request
     *
     * @return Response
     */
    public function update($id, Updatevw_questionRequest $request)
    {
        $vwQuestion = $this->vwQuestionRepository->findWithoutFail($id);

        if (empty($vwQuestion)) {
            Flash::error('Vw Question not found');

            return redirect(route('vwQuestions.index'));
        }

        $vwQuestion = $this->vwQuestionRepository->update($request->all(), $id);

        Flash::success('Vw Question updated successfully.');

        return redirect(route('vwQuestions.index'));
    }

    /**
     * Remove the specified vw_question from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vwQuestion = $this->vwQuestionRepository->findWithoutFail($id);

        if (empty($vwQuestion)) {
            Flash::error('Vw Question not found');

            return redirect(route('vwQuestions.index'));
        }

        $this->vwQuestionRepository->delete($id);

        Flash::success('Vw Question deleted successfully.');

        return redirect(route('vwQuestions.index'));
    }
}
