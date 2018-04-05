<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class mforms
 * @package App\Models
 * @version January 10, 2018, 8:24 pm UTC
 *
 * @property string formtype
 * @property integer nshow
 * @property integer nfilled
 */
class mforms extends Model
{
    use SoftDeletes;

    public $table = 'mforms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'formtype',
        'nshow',
        'nfilled'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'formtype' => 'string',
        'nshow' => 'integer',
        'nfilled' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
