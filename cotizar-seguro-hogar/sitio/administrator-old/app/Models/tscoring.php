<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tscoring
 * @package App\Models
 * @version December 17, 2017, 6:36 pm UTC
 *
 * @property integer idquestion
 * @property string optionquestion
 * @property string descriptionquestion
 * @property integer rccscore
 * @property integer rcmscore
 * @property integer rcbscore
 * @property integer trecscore
 * @property integer tremscore
 * @property integer trebscore
 * @property integer ntimes
 */
class tscoring extends Model
{
    use SoftDeletes;

    public $table = 'tscoring';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idquestion',
        'optionquestion',
        'descriptionquestion',
        'rccscore',
        'rcmscore',
        'rcbscore',
        'trecscore',
        'tremscore',
        'trebscore',
        'ntimes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idquestion' => 'integer',
        'optionquestion' => 'string',
        'descriptionquestion' => 'string',
        'rccscore' => 'integer',
        'rcmscore' => 'integer',
        'rcbscore' => 'integer',
        'trecscore' => 'integer',
        'tremscore' => 'integer',
        'trebscore' => 'integer',
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
