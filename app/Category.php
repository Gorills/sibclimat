<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{


    protected $fillable = ['title', 'description_short','description','image', 'slug', 'created_by', 'modified_by', 'parent_id',

        'text_one', 'text_two', 'text_three', 'meta_title', 'meta_description'

        ];

    // Mutators
    public function setSlugAttribute($value) {

        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-");

    }

    // Children

    public function children() {

        return $this->hasMany(self::class, 'parent_id');

    }
    public function products() {

        return $this->morphedByMany('App\Product', 'categoryable');

    }




}
