<?php

use App\SectionLanguage;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $findSection = SectionLanguage::where('section_id', 4);
        $findSection->delete();

        /* seccion1 español*/
        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_lbltitle';
        $section_language->lang        = 'es';
        $section_language->description = '<span class="objectsans-heavy">EQUIPO </span>';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_title1';
        $section_language->lang        = 'es';
        $section_language->description = 'Antonio Flores Hernández';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_position1';
        $section_language->lang        = 'es';
        $section_language->description = 'SEO y fundador';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_description1';
        $section_language->lang        = 'es';
        $section_language->description = '
        <p> 
            Antes de fundar TOR Capital, Antonio pasó siete años trabajando en la industria financiera. Mientras era estudiante, realizó una pasantía de dos años en Ernst & Young en el equipo de servicios de Aseguramiento, a la que se unió a tiempo completo, permaneciendo por dos años más. Más tarde se unió a PricewaterhouseCoopers, donde obtuvo habilidades financieras sofisticadas, y donde tuvo exposición a una red muy grande de corporaciones y gerentes en la región de América Latina. Más tarde, Antonio trabajó como Asociado Senior de Inversiones en KPMG International Cooperative, donde trabajó principalmente durante tres años modelando y analizando inversiones potenciales, así como identificando oportunidades para futuras inversiones.

        </p>
        <p>
            Antonio tiene una licenciatura en Administración de Negocios Internacionales del Instituto Tecnológico y de Estudios Superiores de Monterrey y un MBA de la London Business School.
        </p>
        ';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_title2';
        $section_language->lang        = 'es';
        $section_language->description = 'Roberto Heredia Carrizal';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_position2';
        $section_language->lang        = 'es';
        $section_language->description = 'CSO ';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_description2';
        $section_language->lang        = 'es';
        $section_language->description = '
        <p> 
            Antes de fundar TOR Capital, Roberto comenzó su carrera profesional como colaborador de tiempo completo en el Banco Bilbao Vizcaya Argentaria, formando parte del equipo de Banca Corporativa. Luego se unió a Credit Suisse como analista en la División de Banca de Inversión en la Ciudad de México, donde trabajó por más de tres años. Roberto cerró transacciones importantes por más de $ 8 mil millones de dólares, asesorando a empresas nacionales e internacionales sobre fusiones y adquisiciones, tareas de asesoramiento estratégico (estructura de capital, recompra de acciones, opiniones de equidad y gobierno corporativo), financiamientos y transacciones de mercados de capitales. Más tarde, Roberto se unió a Deloitte Touche Tohmatsu Limited, donde tuvo la oportunidad de trabajar en más de 20 transacciones en diversas industrias y liderando varios aspectos del proceso de debida diligencia (valoración, negocios, calidad de ganancias, impuestos y legal).
        </p>
        <p>
            Roberto tiene una licenciatura en ingeniería industrial de la Universidad Iberoamericana y un MBA del Instituto Tecnológico y de Estudios Superiores de Monterrey.
        </p>
        ';
        $section_language->save();
        /* seccion1 español*/

        /* seccion1 ingles*/

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_lbltitle';
        $section_language->lang        = 'en';
        $section_language->description = '<span class="objectsans-heavy">THE </span> <span class="colorLow">TEAM</span>';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_title1';
        $section_language->lang        = 'en';
        $section_language->description = 'Antonio Flores Hernández';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_position1';
        $section_language->lang        = 'en';
        $section_language->description = 'SEO & founder ';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_description1';
        $section_language->lang        = 'en';
        $section_language->description = '
        <p> 
            Prior to founding TOR Capital, Antonio spent seven years working in the financial industry. While student, he had a two years internship at Ernst & Young in the Assurance services team, which he joined as a full-timer later lasting for two years more. Later he joined PricewaterhouseCoopers, where he gained insight on sophisticated financial skills as well as exposure to a very large network of corporates and managers in the Latin America region. Later Antonio worked as a Senior Investment Associate at KPMG International Cooperative, where he primarily worked during three years modelling and analysing potential investments as well as identifying opportunities for future investments.

        </p>
        <p>
            Antonio holds a BS in International Business Management from Instituto Tecnológico y de Estudios Superiores de Monterrey and an MBA from London Business School.
        </p>
        ';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_title2';
        $section_language->lang        = 'en';
        $section_language->description = 'Roberto Heredia Carrizal';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_position2';
        $section_language->lang        = 'en';
        $section_language->description = 'CSO ';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_description2';
        $section_language->lang        = 'en';
        $section_language->description = '
        <p> 
            Before founding TorCapital, Roberto started his full-time professional career in Banco Bilbao Vizcaya Argentaria, being part of the Corporate Banking team. He then joined Credit Suisse as an analyst in the Investment Banking Division in Mexico City, where he worked for 3+ years. Roberto Heredia closed important transactions amounting to over US$8bn, advising domestic and international companies on mergers and acquisitions, strategic advisory assignments (capital structure, share repurchase, fairness opinions and corporate governance), financings and capital markets transactions. Later, Roberto joined Deloitte Touche Tohmatsu Limited, where he had the opportunity to work in more than 20 transactions in various industries and leading several aspects of the due diligence process (valuation, business, quality of earnings, tax and legal).
        </p>
        <p>
            Roberto holds a BS in Industrial Engineer from Universidad Iberoamericana and an MBA from Instituto Tecnológico y de Estudios Superiores de Monterrey.
        </p>
        ';
        $section_language->save();

        /* seccion1 ingles*/

        /* seccion1 frances*/
        $section_language              = new SectionLanguage();
        $section_language->section_id  = 4;
        $section_language->name        = 'person_lbltitle';
        $section_language->lang        = 'fr';
        $section_language->description = '<span class="objectsans-heavy">EQUIPE </span>';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 4;
        $section_language->name = 'person_title1';
        $section_language->lang = 'fr';
        $section_language->description = 'Antonio Flores Hernández';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 4;
        $section_language->name = 'person_position1';
        $section_language->lang = 'fr';
        $section_language->description = 'SEO & founder ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 4;
        $section_language->name = 'person_description1';
        $section_language->lang = 'fr';
        $section_language->description = '
        <p> 
            Avant de fonder TOR Capital, Antonio a travaillé 7 dans l´industrie financière. Durand ces études il a réalisé ses stages chez EY dans l´équipe en charge des ASSURANCES. Après cela il est resté 2 ans de plus a temps complet dans le même département. Il est ensuite passé chez PWC ou il a pu développer de solides compétences financières tout en étant en contact avec un très vaste réseau de grande entreprises et directeurs en Amérique Latine. Dernièrement, Antonio a travaillé comme associé Senior en charge des Investissements chez KPMG International. Il a été en charge de trouver et d´analyser les opportunités d´investissement pour le compte du groupe.

        </p>
        <p>
            Antonio est titulaire d´une licence en Administration Internationale d´entreprise obtenu au sein de Instituto Tecnológico y de Estudios Superiores de Monterrey. Antonio a également obtenu un MBA de la London Business School.

        </p>
        ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 4;
        $section_language->name = 'person_title2';
        $section_language->lang = 'fr';
        $section_language->description = 'Roberto Heredia Carrizal';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 4;
        $section_language->name = 'person_position2';
        $section_language->lang = 'fr';
        $section_language->description = 'CSO ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 4;
        $section_language->name = 'person_description2';
        $section_language->lang = 'fr';
        $section_language->description = '
        <p> 
           Avant de fonder TOR Capital, Roberto a commencé sa carrière professionnelle comme analyste au sein de la Banque Vizcaya en Argentine en charge des services offerts aux entreprises. Il s’est ensuite uni au Crédit Suisse durant trois ans (Mexico City) comme analyste au sein de la Division banque d´investissement. Roberto a été en charge de réaliser des investissements pour un montant total de plus de 8 Millions de Dollar, conseillant les entreprises nationales et internationales à propos de leur stratégie de Fusion et Acquisition, à propos de leur structure de capital et de levée de dette entre autres. Plus tard, Roberto a rejoint Deloitte Touche ou il a eu l´opportunité de travailler pour plus de 20 transactions dans différents secteurs et dirigeant différents aspects des audits avant-vente/achat (Valorisation, Business Plan, Fiscalité, Legal ...).

        </p>
        <p>
            Roberto holds a BS in Industrial Engineer from Universidad Iberoamericana and an MBA from Instituto Tecnológico y de Estudios Superiores de Monterrey.

        </p>
        ';
        $section_language->save();

        /* seccion1 frances*/

    }
}
