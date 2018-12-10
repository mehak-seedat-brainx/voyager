<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use Sluggable;
    public $timestamps = false;
    protected $primaryKey = 'Id';
    protected $fillable = [
        'ProTittle', 'ProBgColor', 'ProTags'
    ];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'ProTittle'
            ]
        ];
    }
}
