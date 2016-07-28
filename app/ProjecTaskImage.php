<?php

namespace Trma;

use Illuminate\Database\Eloquent\Model;

class ProjecTaskImage extends Model
{
    protected $table = 'project_task_images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
    ];
}
