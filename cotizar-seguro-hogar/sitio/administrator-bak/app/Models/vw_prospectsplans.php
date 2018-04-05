<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vw_prospectsplans
 * @package App\Models
 * @version December 19, 2017, 6:34 pm UTC
 *
 * @property string name
 * @property string lastname
 * @property string type
 * @property string vw_prospectsplanscol
 * @property decimal amountplan
 */
class vw_prospectsplans extends Model
{
    use SoftDeletes;

    public $table = 'vw_prospectsplans';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'lastname',
        'type',
        'vw_prospectsplanscol',
        'amountplan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'lastname' => 'string',
        'type' => 'string',
        'vw_prospectsplanscol' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
