<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        if (DB::table('languages')->count() == 0) {
            DB::table('languages')->insert([
            ['name' =>'Afghanistan','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Albania','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Algeria','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Andorra','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Angola','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Antigua and Barbuda','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Argentina','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Armenia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Australia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Austria','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Azerbaijan','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Bahamas','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Bahrain','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Bangladesh','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Barbados','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Belarus','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Belgium','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Belize','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Benin','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Bhutan','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Bolivia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Bosnia and Herzegovina','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Botswana','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Brazil','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Brunei','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Bulgaria','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Burkina Faso','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Burundi','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Cambodia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Cameroon','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Canada','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Cape Verde','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Central African Republic','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Chad','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Chile','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'China','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Colombia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Comoros','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Congo, Democratic Republic of the','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Congo, Republic of','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Costa Rica','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>"Côte d'Ivoire",'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Croatia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Cuba','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Cyprus','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Czech Republic','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Denmark','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Djibouti','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Dominica','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Dominican Republic','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'East Timor','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Ecuador','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Egypt','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'El Salvador','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Equatorial Guinea','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Eritrea','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Estonia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Ethiopia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Fiji','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Finland','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'France','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Gabon','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Gambia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Georgia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Germany','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Ghana','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Greece','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Grenada','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Guatemala','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Guinea','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Guinea-Bissau','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Guyana','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Haiti','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Honduras','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Hungary','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Iceland','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'India','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Indonesia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Iran','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Iraq','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Ireland','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Israel','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Italy','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Jamaica','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Japan','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Jordan','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Kazakhstan','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Kenya','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Kiribati','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Korea, North','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Korea, South','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Kosovo','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Kuwait','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Kyrgyzstan','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Laos','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Latvia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Lebanon','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Lesotho','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Liberia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Libya','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Liechtenstein','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Lithuania','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Luxembourg','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Macedonia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Madagascar','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Malawi','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Malaysia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Maldives','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Mali','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Malta','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Marshall Islands','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Mauritania','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Mauritius','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Mexico','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Micronesia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Moldova','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Monaco','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Mongolia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Montenegro','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Morocco','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Mozambique','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Myanmar','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Namibia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Nauru','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Nepal','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Netherlands','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'New Zealand','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Nicaragua','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Niger','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Nigeria','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Norway','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Oman','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Pakistan','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Palau','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Palestinian State (proposed)','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Panama','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Papua New Guinea','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Paraguay','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Peru','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Philippines','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Poland','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Portugal','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Qatar','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Romania','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Russia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Rwanda','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'St. Kitts and Nevis','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'St. Lucia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'St. Vincent and the Grenadines','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Samoa','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'San Marino','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'São Tomé and Príncipe','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Saudi Arabia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Senegal','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Serbia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Seychelles','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Sierra Leone','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Singapore','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Slovakia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Slovenia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Solomon Islands','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Somalia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'South Africa','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'South Sudan','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Spain','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Sri Lanka','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Sudan','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Suriname','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Swaziland','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Sweden','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Switzerland','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Syria','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Taiwan','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Tajikistan','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Tanzania','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Thailand','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Togo','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Tonga','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Trinidad and Tobago','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Tunisia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Turkey','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Turkmenistan','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Tuvalu','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Uganda','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Ukraine','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'United Arab Emirates','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'United Kingdom','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'United States','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Uruguay','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Uzbekistan','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Vanuatu','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Vatican City (Holy See)','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Venezuela','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Vietnam','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Western Sahara (proposed state)','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Yemen','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Zambia','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
                ['name' =>'Zimbabwe','created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ],
            ]);
        }
    }
}
