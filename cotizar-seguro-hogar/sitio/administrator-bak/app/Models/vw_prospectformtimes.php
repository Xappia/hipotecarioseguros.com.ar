<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vw_prospectformtimes
 * @package App\Models
 * @version December 19, 2017, 10:57 pm UTC
 *
 * @property integer id
 * @property string formtype
 * @property integer ntimes
 */
class vw_prospectformtimes extends Model
{
    use SoftDeletes;

    public $table = 'vw_prospectformtimes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'formtype',
        'ntimes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'formtype' => 'string',
        'ntimes' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
