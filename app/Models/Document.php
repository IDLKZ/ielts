<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Document
 * @package App\Models
 * @version August 13, 2021, 6:10 am UTC
 *
 * @property string $title_ru
 * @property string $title_kz
 * @property string $title_en
 * @property string $document
 */
class Document extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'documents';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title_ru',
        'title_kz',
        'title_en',
        'document'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title_ru' => 'string',
        'title_kz' => 'string',
        'title_en' => 'string',
        'document' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title_ru' => 'required|string|max:255',
        'title_kz' => 'required|string|max:255',
        'title_en' => 'required|string|max:255',
        'document' => 'required|file|max:10240',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
