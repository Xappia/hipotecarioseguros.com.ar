<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemincludeplanRequest;
use App\Http\Requests\UpdatemincludeplanRequest;
use App\Repositories\mincludeplanRepository;
use App\Repositories\mplanRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\mplannew;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class mincludeplanController extends AppBaseController
{
    /** @var  mincludeplanRepository */
    private $mincludeplanRepository;

    public function __construct(mincludeplanRepository $mincludeplanRepo)
    {
        $this->mincludeplanRepository = $mincludeplanRepo;
    }

    /**
     * Display a listing of the mincludeplan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mincludeplanRepository->pushCriteria(new RequestCriteria($request));
        $mincludeplans = $this->mincludeplanRepository->all();

        $mplannew = mplannew::pluck('type', 'id');

        return view('mincludeplans.index')
            ->with(array('mincludeplans' => $mincludeplans, 'mplannew' => $mplannew));
    }

    /**
     * Show the form for creating a new mincludeplan.
     *
     * @return Response
     */
    public function create()
    {
        //Para cruzar con el modelo de la clave foranea
        $mplannews = mplannew::pluck('type', 'id');
        return view('mincludeplans.create')->with('mplannews', $mplannews);
    }

    /**
     * Store a newly created mincludeplan in storage.
     *
     * @param CreatemincludeplanRequest $request
     *
     * @return Response
     */
    public function store(CreatemincludeplanRequest $request)
    {
        $input = $request->all();

        $mincludeplan = $this->mincludeplanRepository->create($input);

        Flash::success('Guardado.');

        return redirect(route('mincludeplans.index'));
    }

    /**
     * Display the specified mincludeplan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mincludeplan = $this->mincludeplanRepository->findWithoutFail($id);

        if (empty($mincludeplan)) {
            Flash::error('No encontrado');

            return redirect(route('mincludeplans.index'));
        }

        return view('mincludeplans.show')->with('mincludeplan', $mincludeplan);
    }

    /**
     * Show the form for editing the specified mincludeplan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mplannews = mplannew::pluck('type', 'id');

        $mincludeplan = $this->mincludeplanRepository->findWithoutFail($id);

        if (empty($mincludeplan)) {
            Flash::error('No encontrado');

            return redirect(route('mincludeplans.index'));
        }

        return view('mincludeplans.edit')->with(array('mincludeplan'=>$mincludeplan, 'mplannews'=> $mplannews));
    }

    /**
     * Update the specified mincludeplan in storage.
     *
     * @param  int              $id
     * @param UpdatemincludeplanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemincludeplanRequest $request)
    {
        $mincludeplan = $this->mincludeplanRepository->findWithoutFail($id);

        if (empty($mincludeplan)) {
            Flash::error('No encontrado');

            return redirect(route('mincludeplans.index'));
        }

        $mincludeplan = $this->mincludeplanRepository->update($request->all(), $id);

        Flash::success('Actualizado.');

        return redirect(route('mincludeplans.index'));
    }

    /**
     * Remove the specified mincludeplan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mincludeplan = $this->mincludeplanRepository->findWithoutFail($id);

        if (empty($mincludeplan)) {
            Flash::error('No encontrado');

            return redirect(route('mincludeplans.index'));
        }

        $this->mincludeplanRepository->delete($id);

        Flash::success('Eliminado.');

        return redirect(route('mincludeplans.index'));
    }
}
