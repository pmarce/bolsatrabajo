<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = array(
            array( 'name' => 'Español'),
            array( 'name' => 'Inglés'),
            array( 'name' => 'Portugués'),
            array( 'name' => 'Ruso'),
            array( 'name' => 'Árabe'),
            array( 'name' => 'Chino'),
            array( 'name' => 'Francés'),
            array( 'name' => 'Alemán'),
            array( 'name' => 'Afar'),
            array( 'name' => 'Afrikaans'),
            array( 'name' => 'Aimara'),
            array( 'name' => 'Akano'),
            array( 'name' => 'Albanés'),
            array( 'name' => 'Amárico'),
            array( 'name' => 'Aragonés'),
            array( 'name' => 'Armenio'),
            array( 'name' => 'Asamés'),
            array( 'name' => 'Avar'),
            array( 'name' => 'Avéstico'),
            array( 'name' => 'Azerí'),
            array( 'name' => 'Bambara'),
            array( 'name' => 'Baskir'),
            array( 'name' => 'Bengalí'),
            array( 'name' => 'Bhojpurí'),
            array( 'name' => 'Bielorruso'),
            array( 'name' => 'Birmano'),
            array( 'name' => 'Bislama'),
            array( 'name' => 'Bosnio'),
            array( 'name' => 'Bretón'),
            array( 'name' => 'Búlgaro'),
            array( 'name' => 'Cachemiro'),
            array( 'name' => 'Camboyano'),
            array( 'name' => 'Canarés'),
            array( 'name' => 'Catalán'),
            array( 'name' => 'Chamorro'),
            array( 'name' => 'Checheno'),
            array( 'name' => 'Checo'),
            array( 'name' => 'Chichewa'),
            array( 'name' => 'Chuan'),
            array( 'name' => 'Chuvasio'),
            array( 'name' => 'Cingalés'),
            array( 'name' => 'Coreano'),
            array( 'name' => 'Corso'),
            array( 'name' => 'Cree'),
            array( 'name' => 'Croata'),
            array( 'name' => 'Córnico'),
            array( 'name' => 'Danés'),
            array( 'name' => 'Dzongkha'),
            array( 'name' => 'Eslavo'),
            array( 'name' => 'Eslovaco'),
            array( 'name' => 'Esloveno'),
            array( 'name' => 'Esperanto'),
            array( 'name' => 'Estonio'),
            array( 'name' => 'Euskera'),
            array( 'name' => 'Ewe'),
            array( 'name' => 'Feroés'),
            array( 'name' => 'Finés'),
            array( 'name' => 'Fiyiano'),
            array( 'name' => 'Frisón'),
            array( 'name' => 'Fula'),
            array( 'name' => 'Gallego'),
            array( 'name' => 'Galés'),
            array( 'name' => 'Gaélico'),
            array( 'name' => 'Gaélico Escocés'),
            array( 'name' => 'Georgiano'),
            array( 'name' => 'Griego'),
            array( 'name' => 'Groenlandés'),
            array( 'name' => 'Guaraní'),
            array( 'name' => 'Guyaratí'),
            array( 'name' => 'Haitiano'),
            array( 'name' => 'Hausa'),
            array( 'name' => 'Hebreo'),
            array( 'name' => 'Herero'),
            array( 'name' => 'Hindú'),
            array( 'name' => 'Hiri Motu'),
            array( 'name' => 'Húngaro'),
            array( 'name' => 'Ido'),
            array( 'name' => 'Igbo'),
            array( 'name' => 'Indonesio'),
            array( 'name' => 'Interlingua'),
            array( 'name' => 'Inuktitut'),
            array( 'name' => 'Inupiaq'),
            array( 'name' => 'Islandés'),
            array( 'name' => 'Italiano'),
            array( 'name' => 'Japonés'),
            array( 'name' => 'Javanés'),
            array( 'name' => 'Kanuri'),
            array( 'name' => 'Kazajo'),
            array( 'name' => 'Kikuyu'),
            array( 'name' => 'Kirguís'),
            array( 'name' => 'Kirundi'),
            array( 'name' => 'Komi'),
            array( 'name' => 'Kongo'),
            array( 'name' => 'Kuanyama'),
            array( 'name' => 'Kurdo'),
            array( 'name' => 'Lao'),
            array( 'name' => 'Latín'),
            array( 'name' => 'Letón'),
            array( 'name' => 'Limburgués'),
            array( 'name' => 'Lingala'),
            array( 'name' => 'Lituano'),
            array( 'name' => 'Luba-Katanga'),
            array( 'name' => 'Luganda'),
            array( 'name' => 'Luxemburgués'),
            array( 'name' => 'Macedonio'),
            array( 'name' => 'Malayalam'),
            array( 'name' => 'Malayo'),
            array( 'name' => 'Maldivo'),
            array( 'name' => 'Malgache'),
            array( 'name' => 'Maltés'),
            array( 'name' => 'Manés'),
            array( 'name' => 'Maorí'),
            array( 'name' => 'Mapugundun'),
            array( 'name' => 'Maratí'),
            array( 'name' => 'Marshalés'),
            array( 'name' => 'Mongol'),
            array( 'name' => 'Nauruano'),
            array( 'name' => 'Navajo'),
            array( 'name' => 'Ndebele Del Norte'),
            array( 'name' => 'Ndebele Del Sur'),
            array( 'name' => 'Ndonga'),
            array( 'name' => 'Neerlandés'),
            array( 'name' => 'Nepalí'),
            array( 'name' => 'Noruego'),
            array( 'name' => 'Noruego Bokmål'),
            array( 'name' => 'Nynorsk'),
            array( 'name' => 'Occidental'),
            array( 'name' => 'Occitano'),
            array( 'name' => 'Ojibwa'),
            array( 'name' => 'Oriya'),
            array( 'name' => 'Oromo'),
            array( 'name' => 'Osético'),
            array( 'name' => 'Pali'),
            array( 'name' => 'Panyabí'),
            array( 'name' => 'Pastú'),
            array( 'name' => 'Persa'),
            array( 'name' => 'Polaco'),
            array( 'name' => 'Quechua'),
            array( 'name' => 'Romanche'),
            array( 'name' => 'Ruandés'),
            array( 'name' => 'Rumano'),
            array( 'name' => 'Sami Septentrional'),
            array( 'name' => 'Samoano'),
            array( 'name' => 'Sango'),
            array( 'name' => 'Sardo'),
            array( 'name' => 'Serbio'),
            array( 'name' => 'Sesotho'),
            array( 'name' => 'Setsuana'),
            array( 'name' => 'Shona'),
            array( 'name' => 'Sindhi'),
            array( 'name' => 'Somalí'),
            array( 'name' => 'Suajili'),
            array( 'name' => 'Suazi'),
            array( 'name' => 'Sueco'),
            array( 'name' => 'Sundanés'),
            array( 'name' => 'Sánscrito'),
            array( 'name' => 'Tagalo'),
            array( 'name' => 'Tahitiano'),
            array( 'name' => 'Tailandés'),
            array( 'name' => 'Tamil'),
            array( 'name' => 'Tayiko'),
            array( 'name' => 'Telugú'),
            array( 'name' => 'Tibetano'),
            array( 'name' => 'Tigriña'),
            array( 'name' => 'Tongano'),
            array( 'name' => 'Tsonga'),
            array( 'name' => 'Turco'),
            array( 'name' => 'Turcomano'),
            array( 'name' => 'Twi'),
            array( 'name' => 'Tártaro'),
            array( 'name' => 'Ucraniano'),
            array( 'name' => 'Uigur'),
            array( 'name' => 'Urdu'),
            array( 'name' => 'Uzbeko'),
            array( 'name' => 'Valón'),
            array( 'name' => 'Venda'),
            array( 'name' => 'Vietnamita'),
            array( 'name' => 'Volapük'),
            array( 'name' => 'Wolof'),
            array( 'name' => 'Xhosa'),
            array( 'name' => 'Yi De Sichuán'),
            array( 'name' => 'Yoruba'),
            array( 'name' => 'Yídish'),
            array( 'name' => 'Zulú')
        );
        DB::table('languages')->insert($languages);

    }
}