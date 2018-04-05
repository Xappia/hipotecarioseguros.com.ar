<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemprospectRequest;
use App\Http\Requests\UpdatemprospectRequest;
use App\Repositories\mprospectRepository;
use App\Repositories\vw_prospectsanswersRepository;
use App\Repositories\vw_prospectsplansRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\vw_question;
use App\Models\vw_prospectsplans;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class mprospectController extends AppBaseController
{
    /** @var  mprospectRepository */
    private $mprospectRepository;

    /** @var  prospectsanswers */
    private $prospectsanswers;

    /** @var  prospectsplans */
    private $prospectsplans;

    public function __construct(mprospectRepository $mprospectRepo)
    {
        $this->mprospectRepository = $mprospectRepo;
    }

    /**
     * Display a listing of the mprospect.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mprospectRepository->pushCriteria(new RequestCriteria($request));
        $mprospects = $this->mprospectRepository->all();

        return view('mprospects.index')
            ->with('mprospects', $mprospects);
    }

    /**
     * Show the form for creating a new mprospect.
     *
     * @return Response
     */
    public function create()
    {
        return view('mprospects.create');
    }

    /**
     * Store a newly created mprospect in storage.
     *
     * @param CreatemprospectRequest $request
     *
     * @return Response
     */
    public function store(CreatemprospectRequest $request)
    {
        $input = $request->all();

        $mprospect = $this->mprospectRepository->create($input);

        Flash::success('Guardado.');

        return redirect(route('mprospects.index'));
    }

    /**
     * Display the specified mprospect.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mprospect = $this->mprospectRepository->findWithoutFail($id);

        $prospectsanswers = vw_question::all();

        $prospectsplans = vw_prospectsplans::all();

        if (empty($mprospect)) {
            Flash::error('No encontrado.');

            return redirect(route('mprospects.index'));
        }

        return view('mprospects.show')->with(array('mprospect' => $mprospect, 'prospectsanswers' => $prospectsanswers, 'prospectsplans' => $prospectsplans));
    }

    /**
     * Show the form for editing the specified mprospect.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mprospect = $this->mprospectRepository->findWithoutFail($id);

        if (empty($mprospect)) {
            Flash::error('No encontrado.');

            return redirect(route('mprospects.index'));
        }

        return view('mprospects.edit')->with('mprospect', $mprospect);
    }

    /**
     * Update the specified mprospect in storage.
     *
     * @param  int              $id
     * @param UpdatemprospectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemprospectRequest $request)
    {
        $mprospect = $this->mprospectRepository->findWithoutFail($id);

        if (empty($mprospect)) {
            Flash::error('No encontrado.');

            return redirect(route('mprospects.index'));
        }

        $mprospect = $this->mprospectRepository->update($request->all(), $id);

        Flash::success('Actualizado.');

        return redirect(route('mprospects.index'));
    }

    /**
     * Remove the specified mprospect from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mprospect = $this->mprospectRepository->findWithoutFail($id);

        if (empty($mprospect)) {
            Flash::error('No encontrado.');

            return redirect(route('mprospects.index'));
        }

        $this->mprospectRepository->delete($id);

        Flash::success('Eliminado.');

        return redirect(route('mprospects.index'));
    }
}
