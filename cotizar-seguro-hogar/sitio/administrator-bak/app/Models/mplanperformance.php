<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class mplanperformance
 * @package App\Models
 * @version January 22, 2018, 3:16 am UTC
 *
 * @property string type
 * @property string plan
 * @property string planlabel
 * @property string image
 * @property decimal amountplan
 * @property string costdaylabel
 * @property decimal costday
 * @property string coverage1label1
 * @property string coverage1
 * @property string coverage1label2
 * @property decimal amount1
 * @property string coverage2label1
 * @property string coverage2
 * @property string coverage2label2
 * @property decimal amount2
 * @property boolean randombutton
 * @property string buttonlabel
 * @property string buttonlabel2
 * @property string buttonlabel3
 * @property string footlabel
 * @property string coveragepdf
 * @property integer ntimes
 */
class mplanperformance extends Model
{
    use SoftDeletes;

    public $table = 'mplan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'type',
        'plan',
        'planlabel',
        'image',
        'amountplan',
        'costdaylabel',
        'costday',
        'coverage1label1',
        'coverage1',
        'coverage1label2',
        'amount1',
        'coverage2label1',
        'coverage2',
        'coverage2label2',
        'amount2',
        'randombutton',
        'buttonlabel',
        'buttonlabel2',
        'buttonlabel3',
        'footlabel',
        'coveragepdf',
        'ntimes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'plan' => 'string',
        'planlabel' => 'string',
        'image' => 'string',
        'costdaylabel' => 'string',
        'coverage1label1' => 'string',
        'coverage1' => 'string',
        'coverage1label2' => 'string',
        'coverage2label1' => 'string',
        'coverage2' => 'string',
        'coverage2label2' => 'string',
        'randombutton' => 'boolean',
        'buttonlabel' => 'string',
        'buttonlabel2' => 'string',
        'buttonlabel3' => 'string',
        'footlabel' => 'string',
        'coveragepdf' => 'string',
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
