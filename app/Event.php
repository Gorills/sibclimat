<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    protected $fillable = ['title', 'description','full_description','image', 'slug', 'created_by', 'modified_by'];

    // Mutators
    public function setSlugAttribute($value) {

        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-");

    }
}
