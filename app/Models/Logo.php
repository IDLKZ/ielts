<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Logo
 * @package App\Models
 * @version April 8, 2021, 4:15 pm UTC
 *
 * @property string $img
 */
class Logo extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'logos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'img' => 'required|file|max:100000',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
