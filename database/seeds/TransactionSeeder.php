<?php

use App\SectionLanguage;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $findSection = SectionLanguage::where('section_id', 5);
        $findSection->delete();


        /* seccion1 ingles*/
        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = 'title';
        $section_language->lang        = 'en';
        $section_language->description = 'Transactions';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = 'description';
        $section_language->lang        = 'en';
        $section_language->description = ' “My international colleagues bring me buyers that I know will increase the value for my client, even if the transaction is closed locally.” - Ruud van Hoek, Clairfield, Netherlands.';
        $section_language->save();
        //lista
        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = '<p>
                                         France/Kenia/Japan
                                         
                                         <span class="transaction__subtitle">2019</span>
                                         </p>';
        $section_language->lang        = 'en';
        $section_language->type        = 'ul';
        $section_language->description = '<p>BBOXX, a next‐generation energy provider, closed a USD 50 million fundraising&nbsp; event as part of a Series D financing round. This 4th round was led by Mitsubishi&nbsp; Corporation, lead investor.<br></p>';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = '<p>
                                         Finland/Germany
                                         
                                         <span class="transaction__subtitle">2019</span>
                                     </p>';
        $section_language->lang        = 'en';
        $section_language->type        = 'ul';
        $section_language->description = '<p>&nbsp; Högfors Oy, a Finnish manufacturer of butterfly valves, sold all outstanding shares to ARI-Armaturen Group, a German industrial company.<br></p>';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = '<p>
                                         Norway/US
                                         
                                         <span class="transaction__subtitle">2019</span>
                                     </p>';
        $section_language->lang        = 'en';
        $section_language->type        = 'ul';
        $section_language->description = '<p>  Feelgood Scene Film was sold by Sony Music Norway and other minority owners to Monday Media. Feelgood is the leading comedy production company in Norway featuring established successes in scripted comedy and studio comedy programs.<br></p>';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = '<p>
                                         UK/Spain
                                         
                                         <span class="transaction__subtitle">2019</span>
                                     </p>';
        $section_language->lang        = 'en';
        $section_language->type        = 'ul';
        $section_language->description = '<p>IDE Systems, a supplier of temporary power equipment for events, construction work and facilities management companies, completed an MBO with the backing&nbsp; of Santander.<br></p>';
        $section_language->save();
        // fin lista
        /* ingles*/

        /* seccion1 frances*/
        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = 'title';
        $section_language->lang        = 'fr';
        $section_language->description = 'Transactions';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = 'description';
        $section_language->lang        = 'fr';
        $section_language->description = '“Mes associés internationaux apportent des acquéreurs qui optimiseront la valeur de mon client, même si la transaction se finalise localement.” Ruud van Hoek, Clairfield Netherlands.';
        $section_language->save();

        //lista
        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = '<p>
                                         France/Kenia/Japan
                                         <span class="transaction__subtitle">2019</span>
                                         </p>';
        $section_language->lang        = 'fr';
        $section_language->type        = 'ul';
        $section_language->description = '<p>BBOXX, a next‐generation energy provider, closed a USD 50 million fundraising&nbsp; event as part of a Series D financing round. This 4th round was led by Mitsubishi&nbsp; Corporation, lead investor.<br></p>';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = '<p>
                                         Finland/Germany
                                         <span class="transaction__subtitle">2019</span>
                                     </p>';
        $section_language->lang        = 'fr';
        $section_language->type        = 'ul';
        $section_language->description = '<p>&nbsp; Högfors Oy, a Finnish manufacturer of butterfly valves, sold all outstanding shares to ARI-Armaturen Group, a German industrial company.<br></p>';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = '<p>
                                         Norway/US
                                         <span class="transaction__subtitle">2019</span>
                                     </p>';
        $section_language->lang        = 'fr';
        $section_language->type        = 'ul';
        $section_language->description = '<p>  Feelgood Scene Film was sold by Sony Music Norway and other minority owners to Monday Media. Feelgood is the leading comedy production company in Norway featuring established successes in scripted comedy and studio comedy programs.<br></p>';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = '<p>
                                         UK/Spain
                                         <span class="transaction__subtitle">2019</span>
                                     </p>';
        $section_language->lang        = 'fr';
        $section_language->type        = 'ul';
        $section_language->description = '<p>IDE Systems, a supplier of temporary power equipment for events, construction work and facilities management companies, completed an MBO with the backing&nbsp; of Santander.<br></p>';
        $section_language->save();
        // fin lista
        /* frances*/

        /* seccion español*/
        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = 'title';
        $section_language->lang        = 'es';
        $section_language->description = 'Transacciones';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = 'description';
        $section_language->lang        = 'es';
        $section_language->description = ' “Mis colegas internacionales traen compradores que sé que aumentarán el valor para mi cliente, incluso si la transacción se cierra localmente.” - Ruud van Hoek, Clairfield, Países Bajos.';
        $section_language->save();

        //lista
        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = '<p>
                                         France/Kenia/Japan
                                         <span class="transaction__subtitle">2019</span>
                                         </p>';
        $section_language->lang        = 'es';
        $section_language->type        = 'ul';
        $section_language->description = '<p>BBOXX, a next‐generation energy provider, closed a USD 50 million fundraising&nbsp; event as part of a Series D financing round. This 4th round was led by Mitsubishi&nbsp; Corporation, lead investor.<br></p>';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = '<p>
                                         Finland/Germany
                                         <span class="transaction__subtitle">2019</span>
                                     </p>';
        $section_language->lang        = 'es';
        $section_language->type        = 'ul';
        $section_language->description = '<p>&nbsp; Högfors Oy, a Finnish manufacturer of butterfly valves, sold all outstanding shares to ARI-Armaturen Group, a German industrial company.<br></p>';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = '<p>
                                         Norway/US
                                         <span class="transaction__subtitle">2019</span>
                                     </p>';
        $section_language->lang        = 'es';
        $section_language->type        = 'ul';
        $section_language->description = '<p>  Feelgood Scene Film was sold by Sony Music Norway and other minority owners to Monday Media. Feelgood is the leading comedy production company in Norway featuring established successes in scripted comedy and studio comedy programs.<br></p>';
        $section_language->save();

        $section_language              = new SectionLanguage();
        $section_language->section_id  = 5;
        $section_language->name        = '<p>
                                         UK/Spain
                                         <span class="transaction__subtitle">2019</span>
                                     </p>';
        $section_language->lang        = 'es';
        $section_language->type        = 'ul';
        $section_language->description = '<p>IDE Systems, a supplier of temporary power equipment for events, construction work and facilities management companies, completed an MBO with the backing&nbsp; of Santander.<br></p>';
        $section_language->save();
        // fin lista
        /* español*/
    }
}
