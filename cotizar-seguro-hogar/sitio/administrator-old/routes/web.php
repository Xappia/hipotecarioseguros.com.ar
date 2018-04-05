<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('mquestions', 'mquestionController');

Route::resource('mplannews', 'mplannewController');

Route::resource('performance', 'mplannewController');

Route::resource('mincludeplans', 'mincludeplanController');

Route::resource('mprospects', 'mprospectController');

Route::resource('tpropectsquiestions', 'tpropectsquiestionsController');

Route::resource('tprospectplans', 'tprospectplanController');

Route::resource('tstatistics', 'tstatisticController');

Route::resource('upload', 'UploadController');

Route::resource('mplans', 'mplanController');

Route::resource('tcoveragesplans', 'tcoveragesplanController');





Route::resource('tscorings', 'tscoringController');

Route::resource('vwProspectsplans', 'vw_prospectsplansController');

Route::resource('tagreementfiles', 'tagreementfileController');

Route::resource('vwQuestions', 'vw_questionController');

Route::resource('vwQuestiontimes', 'vw_questiontimesController');

Route::resource('vwProspectformtimes', 'vw_prospectformtimesController');

Route::resource('vwProspectquestions', 'vw_prospectquestionsController');

Route::resource('vwProspectsanswers', 'vw_prospectsanswersController');

Route::resource('mforms', 'mformsController');

Route::resource('tplanbuttons', 'tplanbuttonsController');

Route::resource('mplanperformances', 'mplanperformanceController');