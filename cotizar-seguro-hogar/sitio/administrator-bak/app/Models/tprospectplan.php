<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tprospectplan
 * @package App\Models
 * @version November 27, 2017, 3:51 pm UTC
 *
 * @property integer idplan
 * @property string jsonscore
 * @property integer score
 * @property date answerdate
 * @property decimal amount1
 * @property decimal amount2
 * @property decimal amount3
 * @property decimal amount4
 * @property string coverage1
 * @property string coverage2
 * @property string coverage3
 * @property string coverage4
 */
class tprospectplan extends Model
{
    use SoftDeletes;

    public $table = 'tprospectplan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idplan',
        'jsonscore',
        'score',
        'answerdate',
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
        'idplan' => 'integer',
        'jsonscore' => 'string',
        'score' => 'integer',
        'answerdate' => 'date',
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
