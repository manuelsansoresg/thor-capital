<?php

use App\SectionLanguage;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
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
        $section_language->section_id = 2;
        $section_language->name = 'title';
        $section_language->lang = 'es';
        $section_language->description = '<span class="objectsans-heavy">CRITERIOS</span>  <span class="d-block"></span> <span class="colorLow">DE INVERSIÓN</span>';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'description';
        $section_language->lang = 'es';
        $section_language->description = 'Nuestra experiencia de dueño, director y empresario nos permite tener una visión totalmente diferente para determinar cómo realizamos nuestras inversiones.  
        <p class="mt-3 ml-0 ml-md-5">
            Los criterios de inversiones de TOR Capital no son inamovible como pueden estar ciertas reglas bien establecidas porque consideramos a TOR Capital que cada empresa es única, con su propia historia y que requiere un análisis profundo más allá de los números.    
        </p>
            
         <p class="mt-3 ml-0 ml-md-5">
         El centro de nuestras inversiones se ubica en las empresas:
        </p>
                
            <br>
            <ul class="ml-0 ml-md-5">
                <li>
                 De por lo menos 3 años de operaciones
                </li>
                <li>
                Teniendo en Ingreso anual entre 5 y 50 millones
                </li>
                <li>
                Obteniendo un EBITDA de por lo menos 1 million 
                </li>
                <li>
                 Compuesta de un equipo de Dirección experimendo
                </li>
            </ul>
            ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'INDUSTRIAS';
        $section_language->lang = 'es';
        $section_language->type = 'ul';
        $section_language->description = '
                                        <ul >
                                            <li>Servicios profesionales </li>
                                            <li>Salud</li>
                                            <li>Educación</li>
                                            <li>Reciclaje et valorisation de las basuras </li>
                                            <li>Energía renovables</li>
                                            <li>Fintech</li>
                                            <li>Bienes Raíces</li> 
                                            <li>Nuevas tecnologías</li>
                                            </ul>
                                          ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'TIPOS DE TRANSACCION';
        $section_language->lang = 'es';
        $section_language->type = 'ul';
        $section_language->description = '
                                           
                                          ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'PROCESO DE INVERSIÓN';
        $section_language->lang = 'es';
        $section_language->type = 'ul';
        $section_language->description = '
                                           Hemos elaborado un proceso de inversión que nos ha permitido determinar los montos que invertimos en un plazo de 4 a 6 meses dependiendo del flujo de información recibido: <br>
                                            <ol class="ul-number">
                                            <li>Firma de los acuerdos de confidencialidad</li>
                                            <li>Informaciones preliminares</li>
                                            <li>Carta de intención preliminar</li>
                                            <li>Due diligence parcial</li>
                                            <li>Firma de la carta de intención definitiva</li>
                                            <li>Due diligence adicional (Legal y contable)</li>
                                            <li>Firma del acuerdo de inversión final</li> 
                                            </ol>

                                          ';
        $section_language->save();
       /* seccion1 español*/

        /* seccion1 ingles*/
        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'title';
        $section_language->lang = 'en';
        $section_language->description = '<span class="objectsans-heavy">Investment</span>  <span class="d-block"></span> <span class="colorLow">Criteria</span> ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'description';
        $section_language->lang = 'en';
        $section_language->description = 'Our combined experience as owner-operators-entrepreneurs provides a total different approach about how we evaluate businesses.
         <p class="mt-3 ml-0 ml-md-5">
             Tor Capital investment criteria are not immovable as might be some rules well established because in TOR Capital we consider that each business is unique, with its own story and require a deep individual analisis beyond only numbers. This why we analyze everything.
        </p>
         <p class="mt-3 ml-0 ml-md-5">
            However the analysis process will be quicker when:
        </p>
            <br>
            <ul class="ml-0 ml-md-5">
                <li>Companies with 3+ years of operating history</li>
                <li>Revenues of $5 to $50 million</li>
                <li>EBITDA of at least $1 million</li>
                <li>Experienced management teams</li>
            </ul>
           


            ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'INDUSTRIES';
        $section_language->lang = 'en';
        $section_language->type = 'ul';
        $section_language->description = '
                                            <ul>
                                            <li>Business Services, Education, Healthcare </li>
                                            <li>Consumer Products and Services, Waste and Recycling</li>
                                            <li>Renewable Energy</li>
                                            <li>Fintech</li>
                                            <li>Real estate</li>
                                            <li>Early stage Disruptive Tech</li>
                                            </ul>
                                          ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'TRANSACTION TYPES';
        $section_language->lang = 'en';
        $section_language->type = 'ul';
        $section_language->description = '
                                            <ul>
                                                <li>Growth Capital</li>
                                                <li>Acquisition Financing</li>
                                                <li>Shareholder Liquidity</li>
                                                <li>Recapitalizations</li>
                                                <li>Management Buyouts</li>
                                            </ul>   
                                          ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'INVESTMENT PROCESS';
        $section_language->lang = 'en';
        $section_language->type = 'ul';
        $section_language->description = '
                                           We designed an investment process that allow us to determine our ticket in no more than 4-6 months if the flow of information is dynamic. <br>
                                           <ol class="ul-number">
                                            <li>Confidentiality agreement signature</li>
                                            <li>Preliminary information</li>
                                            <li>Preliminary indication of interest</li>
                                            <li>Parcial Due Diligence</li>
                                            <li>Letter of intent signature</li>
                                            <li>Additional due diligence Legal/Accounting</li>
                                            <li>Closing signature</li>
                                            </ol>


                                          ';
        $section_language->save();
        /* seccion1 ingles*/

        /* seccion1 fraces*/
        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'title';
        $section_language->lang = 'fr';
        $section_language->description = '<span class="objectsans-heavy">CRITÈRES</span>  <span class="d-block"></span> <span class="colorLow">  D´INVESTISSEMENT</span> ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'description';
        $section_language->lang = 'fr';
        $section_language->description = 'Notre expérience combiné de propriétaire, directeur et entrepreneur nous permet d\'offrir une approche totalement différente de comment nous évaluons nos investissements 
         <p class="mt-3 ml-0 ml-md-5">
            Les critères dínvestissement de Tor Capital ne sont pas aussi inamovibles comme peuvent l\'être certaines regles bien etablies parce que nous considérons à TOR Capital que chaque entreprise est unique, avec sa propre histoire et qu´elle requiert une analyse profonde bien au delà des seul chiffres.
        </p>
         
        <p class="mt-3 ml-0 ml-md-5">
         Le coeur de nos investissements se situe cependant dans des entreprises:
         </p>
            <br>
           <ul class="ml-0 ml-md-5">
            <li>Ayant pour le moins 3 ans dóperations</li>
            <li>Ayant un CA compris entre $5 et $50 millions</li>
            <li>Ayant un EBITDA d´au moins $1 million</li>
            <li>Composée d´une équipe dirigeante expérimentée</li> 
        </ul>


            ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'INDUSTRIES';
        $section_language->lang = 'fr';
        $section_language->type = 'ul';
        $section_language->description = '
                                            <ul>
                                            <li>Services professionnels</li>
                                            <li> Sante</li>
                                            <li> Education</li>
                                            <li> Recyclage et valorisation des déchets</li>
                                            <li> Énergie renouvelable</li>
                                            <li> Fintech</li>
                                            <li> Immobilier</li>
                                            <li> Nouvelles technologies</li>
                                            </ul>


                                          ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'TRANSACTION TYPES';
        $section_language->lang = 'fr';
        $section_language->type = 'ul';
        $section_language->description = '
                                           
                                          ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'Processus d´investissement';
        $section_language->lang = 'fr';
        $section_language->type = 'ul';
        $section_language->description = '
                                           Nous avons élaboré un processus d\'investissement qui nous permet de déterminer le montant de l\'investissement que nous réaliserons en 4 à 6 mois en fonction du flux dínformation reçu:
                                             <br>
                                           <ol class="ul-number">
                                                <li>Signature des accords de confidentialité</li>
                                                <li>Informations préliminaires</li>
                                                <li>Lettre d\'intention préliminaire</li> 
                                                <li>Due diligence partielle </li>
                                                <li>Signature de la carte d\'intention definitive</li>
                                                <li>Due diligence additionnelle (Legal et comptable) </li>
                                                <li>Signature du contrat d\'investissement final </li>
                                            </ol>



                                          ';
        $section_language->save();
        /* seccion1 fraces*/
    }
}
