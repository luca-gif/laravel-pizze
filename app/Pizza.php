<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pizza extends Model
{

    protected $fillable = [
        'name',
        'description',
        'price',
        'isVegetarian',
        'popularity',
        'slug'
    ];

    public function ingredients()
    {
        return $this->belongsToMany("App\Ingredient");
    }

    public static function slugGenerator($string)
    {
        $slug = Str::slug($string, '-');
        $isSlug = Pizza::where('slug', $slug)->first();
        $i = 0;

        while ($isSlug) {
            $isSlug = Pizza::where('slug', "$slug-$i")->first();
            $i++;
        }

        return "$slug-$i";
    }
}
