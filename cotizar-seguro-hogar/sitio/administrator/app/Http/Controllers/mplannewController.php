<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemplannewRequest;
use App\Http\Requests\UpdatemplannewRequest;
use App\Repositories\mplannewRepository;
use App\Repositories\mincludeplanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\mincludeplan;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Image; 

class mplannewController extends AppBaseController
{
    /** @var  mplannewRepository */
    private $mplannewRepository;

    /** @var  mincludeplanRepository */
    private $mincludeplanRepository;

    private $mincludeplans;

    public function __construct(mplannewRepository $mplannewRepo)
    {
        $this->mplannewRepository = $mplannewRepo;
    }

    /**
     * Display a listing of the mplannew.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mplannewRepository->pushCriteria(new RequestCriteria($request));
        $mplannews = $this->mplannewRepository->all();

        return view('mplannews.index')
            ->with('mplannews', $mplannews);
    }

    /**
     * Display a performance of the mplannew.
     *
     * @param Request $request
     * @return Response
     */
    public function performance(Request $request)
    {
        $this->mplannewRepository->pushCriteria(new RequestCriteria($request));
        $mplannews = $this->mplannewRepository->all();

        return view('mplannews.performance')
            ->with('mplannews', $mplannews);
    }
    
    /**
     * Show the form for creating a new mplannew.
     *
     * @return Response
     */
    public function create()
    {
        return view('mplannews.create');
    }

    /**
     * Store a newly created mplannew in storage.
     *
     * @param CreatemplannewRequest $request
     *
     * @return Response
     */
    public function store(CreatemplannewRequest $request)
    {
        $input = $request->all();

        $mplannew = $this->mplannewRepository->create($input);

        Flash::success('Guardado.');

        return redirect(route('mplannews.index'));
    }

    /**
     * Display the specified mplannew.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mplannew = $this->mplannewRepository->findWithoutFail($id);

        if (empty($mplannew)) {
            Flash::error('No encontrado.');

            return redirect(route('mplannews.index'));
        }

        return view('mplannews.show')->with('mplannew', $mplannew);
    }

    /**
     * Show the form for editing the specified mplannew.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mplannew = $this->mplannewRepository->findWithoutFail($id);

        //$mincludeplans = mincludeplan::pluck('coverage', 'id');
        $mincludeplans = mincludeplan::all();

        if (empty($mplannew)) {
            Flash::error('No encontrado.');

            return redirect(route('mplannews.index'));
        }

        return view('mplannews.edit')->with(array('mplannew' => $mplannew, 'mincludeplans' => $mincludeplans));
    }

    /**
     * Update the specified mplannew in storage.
     *
     * @param  int              $id
     * @param UpdatemplannewRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemplannewRequest $request)
    {
        $mplannew = $this->mplannewRepository->findWithoutFail($id);

        if (empty($mplannew)) {
            Flash::error('No encontrado.');

            return redirect(route('mplannews.index'));
        }

        //Tratamiento de la imagen



        if ($request->hasFile('image1')) {

            //return dd($request->file('image1'));

            $this->validate($request,[
            'image1' => 'image'
            ]);
            
            $image_name = $request->file('image1')->getClientOriginalName();

            Image::make($request->file('image1'))
            ->save('files/' . $image_name);
        }
 

         if ($request->hasFile('coveragepdf1')) {

            //return dd($request->file('coveragepdf1'));

            $this->validate($request,[
            'coveragepdf1' => "mimes:pdf"
            ]);
            
            $pdf_name = $request->file('coveragepdf1')->getClientOriginalName();

            $request->file('coveragepdf1')->storeAs('/', $pdf_name);

            /*\Storage::disk('local')->put($pdf_name,$request->file('coveragepdf1')->getClientOriginalName());*/

        }

        $mplannew = $this->mplannewRepository->update($request->all(), $id);

        Flash::success('Actualizado.');
        
        return redirect(route('mplannews.index'));
    }

    /**
     * Remove the specified mplannew from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mplannew = $this->mplannewRepository->findWithoutFail($id);

        if (empty($mplannew)) {
            Flash::error('No encontrado.');

            return redirect(route('mplannews.index'));
        }

        $this->mplannewRepository->delete($id);

        Flash::success('Eliminado.');

        return redirect(route('mplannews.index'));
    }

    /**
     * Validate an image.
     *
     * @param plannewRequest $request
     *
     */
    public function posImage(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|image'
        ]);
    }

    /**
     * Validate a file.
     *
     * @param plannewRequest $request
     *
     */
    public function posFile(Request $request)
    {
        $this->validate($request,[
            'coveragepdf' => 'required|file'
        ]);
    }
}
