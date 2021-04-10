<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Social
 * @package App\Models
 * @version April 10, 2021, 7:19 am UTC
 *
 * @property string $icon
 * @property string $link
 */
class Social extends Model
{

    use HasFactory;

    public $table = 'social';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'icon',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'icon' => 'string',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'icon' => 'required|string|max:255',
        'link' => 'required|url|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
