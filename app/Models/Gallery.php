<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Gallery
 * @package App\Models
 * @version March 30, 2021, 7:23 pm UTC
 *
 * @property string $img
 */
class Gallery extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'galleries';

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
        'img' => 'required|file|max:4096|image',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
