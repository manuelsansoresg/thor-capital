<?php

use App\SectionLanguage;
use Illuminate\Support\Facades\DB;

function get_section($section, $name, $type= null,  $result = 0){
    DB::enableQueryLog();

    $lang = (session('lang') == null)? 'es' : session('lang');
    $section_language = SectionLanguage::where('lang', $lang)->where('section_id', $section);
    if($name != ''){
        $section_language = $section_language->where('name', $name);
    }
    if($type != null){
        $section_language = $section_language->where('type', $type);
    }

    if($result == 0){
        $section_language = $section_language->first();
    }else{
        $section_language = $section_language->get();
    }

    return $section_language;
}
