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

class uploadController extends AppBaseController
{
    public function index()
    {
        return view('upload.index');
    }

}