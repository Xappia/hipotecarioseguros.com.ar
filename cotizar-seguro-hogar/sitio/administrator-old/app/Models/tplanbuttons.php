<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tplanbuttons
 * @package App\Models
 * @version January 21, 2018, 12:53 am UTC
 *
 * @property integer idplan
 * @property integer btn1v
 * @property integer btn1c
 * @property integer btn2v
 * @property integer btn2c
 * @property integer btn3v
 * @property integer btn3c
 */
class tplanbuttons extends Model
{
    use SoftDeletes;

    public $table = 'tplanbuttons';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idplan',
        'btn1v',
        'btn1c',
        'btn2v',
        'btn2c',
        'btn3v',
        'btn3c'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idplan' => 'integer',
        'btn1v' => 'integer',
        'btn1c' => 'integer',
        'btn2v' => 'integer',
        'btn2c' => 'integer',
        'btn3v' => 'integer',
        'btn3c' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
