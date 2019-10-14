<?php

use App\SectionLanguage;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $findSection = SectionLanguage::where('section_id', 3);
        $findSection->delete();
        /* seccion1 español*/
        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'title';
        $section_language->lang = 'es';
        $section_language->description = '<span class="objectsans-heavy">CONTÁCTANOS</span>';
        $section_language->save();
        // inputs
        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'name';
        $section_language->lang = 'es';
        $section_language->description = 'Nombre';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'email';
        $section_language->lang = 'es';
        $section_language->description = 'Email';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'phone';
        $section_language->lang = 'es';
        $section_language->description = 'Teléfono';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'message';
        $section_language->lang = 'es';
        $section_language->description = 'Mensaje';
        $section_language->save();
        // inputs
        // textos inferiores
        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'txt_address';
        $section_language->lang = 'es';
        $section_language->description = 'Dirección';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'val_address';
        $section_language->lang = 'es';
        $section_language->description = '3335  Brown Bear Drive';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'txt_phone';
        $section_language->lang = 'es';
        $section_language->description = 'Número de teléfono';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'val_phone';
        $section_language->lang = 'es';
        $section_language->description = '071-246-3165';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'txt_email';
        $section_language->lang = 'es';
        $section_language->description = 'Email';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'val_email';
        $section_language->lang = 'es';
        $section_language->description = 'contacto@tor-capital.com';
        $section_language->save();
        // textos inferiores
        /* seccion1 español*/

        /* seccion1 ingles*/
        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'title';
        $section_language->lang = 'en';
        $section_language->description = '<span class="objectsans-heavy">CONTACT</span>  <span class="colorLow">US</span>';
        $section_language->save();
        // inputs
        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'name';
        $section_language->lang = 'en';
        $section_language->description = 'Name';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'email';
        $section_language->lang = 'en';
        $section_language->description = 'Email';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'phone';
        $section_language->lang = 'en';
        $section_language->description = 'Phone';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'message';
        $section_language->lang = 'en';
        $section_language->description = 'Message';
        $section_language->save();
        // inputs
        // textos inferiores
        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'txt_address';
        $section_language->lang = 'en';
        $section_language->description = 'Address';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'val_address';
        $section_language->lang = 'en';
        $section_language->description = '3335  Brown Bear Drive';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'txt_phone';
        $section_language->lang = 'en';
        $section_language->description = 'Phone number';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'txt_email';
        $section_language->lang = 'en';
        $section_language->description = 'Email';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'val_phone';
        $section_language->lang = 'en';
        $section_language->description = '071-246-3165';
        $section_language->save();

        $section_language = new SectionLanguage();

        $section_language->section_id = 3;
        $section_language->name = 'val_email';
        $section_language->lang = 'en';
        $section_language->description = 'contacto@tor-capital.com';
        $section_language->save();
        // textos inferiores
        /* seccion1 ingles*/

        /* seccion1 frances*/
        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'title';
        $section_language->lang = 'fr';
        $section_language->description = '<span class="objectsans-heavy">NOUS </span>  <span class="colorLow">CONTACTER</span>';
        $section_language->save();
        // inputs
        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'name';
        $section_language->lang = 'fr';
        $section_language->description = 'Nom';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'email';
        $section_language->lang = 'fr';
        $section_language->description = 'Email';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'phone';
        $section_language->lang = 'fr';
        $section_language->description = 'Telephone';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'message';
        $section_language->lang = 'fr';
        $section_language->description = 'Message';
        $section_language->save();
        // inputs
        // textos inferiores
        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'txt_address';
        $section_language->lang = 'fr';
        $section_language->description = 'Adresse';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'val_address';
        $section_language->lang = 'fr';
        $section_language->description = '3335  Brown Bear Drive';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'txt_phone';
        $section_language->lang = 'fr';
        $section_language->description = 'Numero de telephone';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'txt_email';
        $section_language->lang = 'fr';
        $section_language->description = 'Email';
        $section_language->save();

        $section_language->section_id = 3;
        $section_language->name = 'val_phone';
        $section_language->lang = 'fr';
        $section_language->description = '071-246-3165';
        $section_language->save();
        $section_language = new SectionLanguage();

        $section_language->section_id = 3;
        $section_language->name = 'val_email';
        $section_language->lang = 'fr';
        $section_language->description = 'contacto@tor-capital.com';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'txt_email';
        $section_language->lang = 'fr';
        $section_language->description = 'Email';
        $section_language->save();

        // textos inferiores

        /* seccion1 frances*/
    }
}
