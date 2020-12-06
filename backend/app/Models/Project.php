<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $dates = [
      'created_at',
      'updated_at',
      'deleted_at'
    ];
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'github_url',
        'drawio_url',
        'mindmap_url',
        'tags',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
