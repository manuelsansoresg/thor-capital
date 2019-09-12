<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionLanguage extends Model
{
    protected $fillable = ['section_id', 'description'];

    static function getAbout()
    {
        $about = SectionLanguage::where('section_id', 1)->get();
        return $about;
    }

}
