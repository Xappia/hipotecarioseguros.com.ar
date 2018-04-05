<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tcoveragesplan
 * @package App\Models
 * @version December 11, 2017, 6:51 pm UTC
 *
 * @property integer planid
 * @property string name
 * @property decimal amount
 */
class tcoveragesplan extends Model
{
    use SoftDeletes;

    public $table = 'tcoveragesplan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'planid',
        'name',
        'amount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'planid' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
