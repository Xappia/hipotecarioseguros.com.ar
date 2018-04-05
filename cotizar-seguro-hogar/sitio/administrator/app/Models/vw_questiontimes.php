<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vw_questiontimes
 * @package App\Models
 * @version December 19, 2017, 10:39 pm UTC
 *
 * @property integer id
 * @property string question
 * @property integer ntimes
 */
class vw_questiontimes extends Model
{
    use SoftDeletes;

    public $table = 'vw_questiontimes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'question',
        'ntimes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'question' => 'string',
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
