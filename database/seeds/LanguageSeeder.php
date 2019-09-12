<?php

use App\SectionLanguage;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* seccion1 español*/
        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'title';
        $section_language->lang = 'es';
        $section_language->description = 'NOSOTROS';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'description';
        $section_language->lang = 'es';
        $section_language->description = ' <span class="objectsans-bold"> TOR Capital </span> es una empresa de inversión privada que ofrece a largo plazo todo los servicios financieros permitiendo el acceso al capital privado.
                                        Ofrecemos consejos transparentes, sin conflictos de intereses con el objetivo de realizar inversiones en las Pymes formando parte de nuestras industrias cibles.';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'description2';
        $section_language->lang = 'es';
        $section_language->description = 'Tor Capital realiza inversiones entre $1 y $5 millones, dichas inversiones pueden estar realizadas en co-inversión. Somos flexibles al respecto de la estructura del capital invertido, ofrecemos entre otros soluciones de deuda subordinada, partes privilegiadas y también soluciones de capital de desarrollo y estructura para el “capital risk”';
        $section_language->save();
        /* seccion1 español*/

        /* seccion1 ingles*/
        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'title';
        $section_language->lang = 'en';
        $section_language->description = 'ABOUT US';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'description';
        $section_language->lang = 'en';
        $section_language->description = ' <span class="objectsans-bold"> TOR Capital </span>  is a private investment firm focused on offering long term partnership for private equity services. Our mission is to provide transparent, unconflicted advices and access to private capital to middle market companies in our target industries.';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'description2';
        $section_language->lang = 'en';
        $section_language->description = 'In Tor Capital we realize investment from $1 to $5 million target investment:
· Willingness to co-invest with partners
· Flexible capital structure: subordinated debt and preferred equitys';
        $section_language->save();
        /* seccion1 ingles*/

        /* seccion1 frances*/
        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'title';
        $section_language->lang = 'fr';
        $section_language->description = 'A PROPOS';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'description';
        $section_language->lang = 'fr';
        $section_language->description = ' <span class="objectsans-bold"> TOR Capital </span> est une société d\'investissement privée qui offre sur le long terme tous les services financier d´accès au capital privé.
Nous offrons des conseils transparents, sans conflit d\'intérêt pour permettre de réaliser des investissements au sein des des entreprise middle market formant parties de nos industries cibles .';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'description2';
        $section_language->lang = 'fr';
        $section_language->description = 'Tor Capital réalise des investissements compris entre $1 et $5 millions, qui peuvent être faits conjointement en co-investissement.
 Nous sommes flexibles sur la structure du capital investi, nous offrons aussi bien des solutions de dette subordonnées, de parts privilégiées que des solutions de capital développement et de capital risque 
';
        $section_language->save();
        /* seccion1 frances*/

    }
}
