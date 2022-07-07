<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pizza extends Model
{
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