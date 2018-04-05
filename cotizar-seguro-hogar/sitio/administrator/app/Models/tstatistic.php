<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tstatistic
 * @package App\Models
 * @version November 27, 2017, 3:52 pm UTC
 *
 * @property string jsonscore
 * @property date answerdate
 */
class tstatistic extends Model
{
    use SoftDeletes;

    public $table = 'tstatistic';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'jsonscore',
        'answerdate'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jsonscore' => 'string',
        'answerdate' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
