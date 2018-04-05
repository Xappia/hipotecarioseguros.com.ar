<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class mplan
 * @package App\Models
 * @version November 27, 2017, 3:39 pm UTC
 *
 * @property integer type
 * @property integer initscore
 * @property integer finalscore
 * @property string plan
 * @property string image
 * @property decimal amount1
 * @property decimal amount2
 * @property decimal amount3
 * @property decimal amount4
 * @property string coverage1
 * @property string coverage2
 * @property string coverage3
 * @property string coverage4
 */
class mplan extends Model
{
    use SoftDeletes;

    public $table = 'mplan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'type',
        'initscore',
        'finalscore',
        'plan',
        'image',
        'amount1',
        'amount2',
        'amount3',
        'amount4',
        'coverage1',
        'coverage2',
        'coverage3',
        'coverage4'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'integer',
        'initscore' => 'integer',
        'finalscore' => 'integer',
        'plan' => 'string',
        'image' => 'string',
        'coverage1' => 'string',
        'coverage2' => 'string',
        'coverage3' => 'string',
        'coverage4' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
