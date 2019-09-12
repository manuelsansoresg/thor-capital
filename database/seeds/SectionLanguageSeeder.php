<?php

use App\Section;
use Illuminate\Database\Seeder;

class SectionLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = ['about', 'criteria', 'contact', 'team', 'transaction'];

        foreach ($sections as $section){
            $a_section = new Section();
            $a_section->name = $section;
            $a_section->save();
        }

    }
}
