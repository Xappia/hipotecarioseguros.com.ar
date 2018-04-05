<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class mprospect
 * @package App\Models
 * @version November 27, 2017, 3:50 pm UTC
 *
 * @property string name
 * @property string lastname
 * @property string dni
 * @property integer gender
 * @property string timezone
 * @property integer idcard
 * @property string phonetype
 * @property integer phonecode
 * @property integer phonenumber
 * @property string email
   @property integer formtype
   @property date fillingdate
 */
class mprospect extends Model
{
    use SoftDeletes;

    public $table = 'mprospect';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'lastname',
        'dni',
        'gender',
        'timezone',
        'idcard',
        'phonetype',
        'phonecode',
        'phonenumber',
        'email',
        'formtype',
        'fillingdate'
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
        'dni' => 'string',
        'gender' => 'integer',
        'timezone' => 'string',
        'idcard' => 'integer',
        'phonetype' => 'string',
        'phonecode' => 'integer',
        'phonenumber' => 'integer',
        'email' => 'string',
        'formtype' => 'integer',
        'fillingdate' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
