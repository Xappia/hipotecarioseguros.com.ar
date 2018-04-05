<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetagreementfileRequest;
use App\Http\Requests\UpdatetagreementfileRequest;
use App\Repositories\tagreementfileRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tagreementfileController extends AppBaseController
{
    /** @var  tagreementfileRepository */
    private $tagreementfileRepository;

    public function __construct(tagreementfileRepository $tagreementfileRepo)
    {
        $this->tagreementfileRepository = $tagreementfileRepo;
    }

    /**
     * Display a listing of the tagreementfile.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tagreementfileRepository->pushCriteria(new RequestCriteria($request));
        $tagreementfiles = $this->tagreementfileRepository->all();

        return view('tagreementfiles.index')
            ->with('tagreementfiles', $tagreementfiles);
    }

    /**
     * Show the form for creating a new tagreementfile.
     *
     * @return Response
     */
    public function create()
    {
        return view('tagreementfiles.create');
    }

    /**
     * Store a newly created tagreementfile in storage.
     *
     * @param CreatetagreementfileRequest $request
     *
     * @return Response
     */
    public function store(CreatetagreementfileRequest $request)
    {
        $input = $request->all();

        $tagreementfile = $this->tagreementfileRepository->create($input);

        Flash::success('Guardado.');

        return redirect(route('tagreementfiles.index'));
    }

    /**
     * Display the specified tagreementfile.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tagreementfile = $this->tagreementfileRepository->findWithoutFail($id);

        if (empty($tagreementfile)) {
            Flash::error('No encontrado.');

            return redirect(route('tagreementfiles.index'));
        }

        return view('tagreementfiles.show')->with('tagreementfile', $tagreementfile);
    }

    /**
     * Show the form for editing the specified tagreementfile.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tagreementfile = $this->tagreementfileRepository->findWithoutFail($id);

        if (empty($tagreementfile)) {
            Flash::error('No encontrado.');

            return redirect(route('tagreementfiles.index'));
        }

        return view('tagreementfiles.edit')->with('tagreementfile', $tagreementfile);
    }

    /**
     * Update the specified tagreementfile in storage.
     *
     * @param  int              $id
     * @param UpdatetagreementfileRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetagreementfileRequest $request)
    {
        $tagreementfile = $this->tagreementfileRepository->findWithoutFail($id);

        if (empty($tagreementfile)) {
            Flash::error('No encontrado.');

            return redirect(route('tagreementfiles.index'));
        }

        $tagreementfile = $this->tagreementfileRepository->update($request->all(), $id);

        Flash::success('Actualizado.');

        return redirect(route('tagreementfiles.index'));
    }

    /**
     * Remove the specified tagreementfile from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tagreementfile = $this->tagreementfileRepository->findWithoutFail($id);

        if (empty($tagreementfile)) {
            Flash::error('No encontrado.');

            return redirect(route('tagreementfiles.index'));
        }

        $this->tagreementfileRepository->delete($id);

        Flash::success('Eliminado.');

        return redirect(route('tagreementfiles.index'));
    }
}
