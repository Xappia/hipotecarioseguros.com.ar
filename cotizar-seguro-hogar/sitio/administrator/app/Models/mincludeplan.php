<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class mincludeplan
 * @package App\Models
 * @version November 27, 2017, 3:40 pm UTC
 *
 * @property integer idplan
 * @property string coverage
 * @property decimal amount
 */
class mincludeplan extends Model
{
    use SoftDeletes;

    public $table = 'mincludeplan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idplan',
        'coverage',
        'amount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idplan' => 'integer',
        'coverage' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
