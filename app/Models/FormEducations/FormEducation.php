<?php

namespace App\Models\FormEducations;

use App\Models\_Base\BaseModelMethod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormEducation extends Model
{
    use HasFactory, SoftDeletes, BaseModelMethod, FormEducationModelMethods, FormEducationModelRelations;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'form_educations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'form_id',
        'field',
        'degree'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'deleted_at' => 'datetime:Y-m-d H:i:s'
    ];
}
