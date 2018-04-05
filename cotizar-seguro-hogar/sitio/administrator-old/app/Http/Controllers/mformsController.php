<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemformsRequest;
use App\Http\Requests\UpdatemformsRequest;
use App\Repositories\mformsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class mformsController extends AppBaseController
{
    /** @var  mformsRepository */
    private $mformsRepository;

    public function __construct(mformsRepository $mformsRepo)
    {
        $this->mformsRepository = $mformsRepo;
    }

    /**
     * Display a listing of the mforms.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mformsRepository->pushCriteria(new RequestCriteria($request));
        $mforms = $this->mformsRepository->all();

        return view('mforms.index')
            ->with('mforms', $mforms);
    }

    /**
     * Show the form for creating a new mforms.
     *
     * @return Response
     */
    public function create()
    {
        return view('mforms.create');
    }

    /**
     * Store a newly created mforms in storage.
     *
     * @param CreatemformsRequest $request
     *
     * @return Response
     */
    public function store(CreatemformsRequest $request)
    {
        $input = $request->all();

        $mforms = $this->mformsRepository->create($input);

        Flash::success('Mforms saved successfully.');

        return redirect(route('mforms.index'));
    }

    /**
     * Display the specified mforms.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mforms = $this->mformsRepository->findWithoutFail($id);

        if (empty($mforms)) {
            Flash::error('Mforms not found');

            return redirect(route('mforms.index'));
        }

        return view('mforms.show')->with('mforms', $mforms);
    }

    /**
     * Show the form for editing the specified mforms.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mforms = $this->mformsRepository->findWithoutFail($id);

        if (empty($mforms)) {
            Flash::error('Mforms not found');

            return redirect(route('mforms.index'));
        }

        return view('mforms.edit')->with('mforms', $mforms);
    }

    /**
     * Update the specified mforms in storage.
     *
     * @param  int              $id
     * @param UpdatemformsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemformsRequest $request)
    {
        $mforms = $this->mformsRepository->findWithoutFail($id);

        if (empty($mforms)) {
            Flash::error('Mforms not found');

            return redirect(route('mforms.index'));
        }

        $mforms = $this->mformsRepository->update($request->all(), $id);

        Flash::success('Mforms updated successfully.');

        return redirect(route('mforms.index'));
    }

    /**
     * Remove the specified mforms from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mforms = $this->mformsRepository->findWithoutFail($id);

        if (empty($mforms)) {
            Flash::error('Mforms not found');

            return redirect(route('mforms.index'));
        }

        $this->mformsRepository->delete($id);

        Flash::success('Mforms deleted successfully.');

        return redirect(route('mforms.index'));
    }
}
