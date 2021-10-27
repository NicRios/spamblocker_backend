<?php

namespace Database\Seeders;

use App\Models\Countrystate;
use Illuminate\Database\Seeder;

class CountrystateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $states = [

            ['id' => 1, 'name' => 'Alabama','short_name'=>'AL'],
            ['id' => 2, 'name' => 'Alaska','short_name'=>'AK'],
            ['id' => 3, 'name' => 'Arizona','short_name'=>'AZ'],
            ['id' => 4, 'name' => 'Arkansas','short_name'=>'AR'],
            ['id' => 5, 'name' => 'California','short_name'=>'CA'],
            ['id' => 6, 'name' => 'Colorado','short_name'=>'CO'],
            ['id' => 7, 'name' => 'Connecticut','short_name'=>'CT'],
            ['id' => 8, 'name' => 'Delaware','short_name'=>'DE'],
            ['id' => 9, 'name' => 'Florida','short_name'=>'FL'],
            ['id' => 10, 'name' => 'Georgia','short_name'=>'GA'],
            ['id' => 11, 'name' => 'Hawaii','short_name'=>'HI'],
            ['id' => 12, 'name' => 'Idaho','short_name'=>'ID'],
            ['id' => 13, 'name' => 'Illinois','short_name'=>'IL'],
            ['id' => 14, 'name' => 'Indiana','short_name'=>'IN'],
            ['id' => 15, 'name' => 'Iowa','short_name'=>'IA'],
            ['id' => 16, 'name' => 'Kansas','short_name'=>'KS'],
            ['id' => 17, 'name' => 'Kentucky','short_name'=>'KY'],
            ['id' => 18, 'name' => 'Louisiana','short_name'=>'LA'],
            ['id' => 19, 'name' => 'Maine','short_name'=>'ME'],
            ['id' => 20, 'name' => 'Maryland','short_name'=>'MD'],
            ['id' => 21, 'name' => 'Massachusetts','short_name'=>'MA'],
            ['id' => 22, 'name' => 'Michigan','short_name'=>'MI'],
            ['id' => 23, 'name' => 'Minnesota','short_name'=>'MN'],
            ['id' => 24, 'name' => 'Mississippi','short_name'=>'MS'],
            ['id' => 25, 'name' => 'Missouri','short_name'=>'MO'],
            ['id' => 26, 'name' => 'Montana','short_name'=>'MT'],
            ['id' => 27, 'name' => 'Nebraska','short_name'=>'NE'],
            ['id' => 28, 'name' => 'Nevada','short_name'=>'NV'],
            ['id' => 29, 'name' => 'New Hampshire','short_name'=>'NH'],
            ['id' => 30, 'name' => 'New Jersey','short_name'=>'NJ'],
            ['id' => 31, 'name' => 'New Mexico','short_name'=>'NM'],
            ['id' => 32, 'name' => 'New York','short_name'=>'NY'],
            ['id' => 33, 'name' => 'North Carolina','short_name'=>'NC'],
            ['id' => 34, 'name' => 'North Dakota','short_name'=>'ND'],
            ['id' => 35, 'name' => 'Ohio','short_name'=>'OH'],
            ['id' => 36, 'name' => 'Oklahoma','short_name'=>'OK'],
            ['id' => 37, 'name' => 'Oregon','short_name'=>'OR'],
            ['id' => 38, 'name' => 'Pennsylvania','short_name'=>'PA'],
            ['id' => 39, 'name' => 'Rhode Island','short_name'=>'RI'],
            ['id' => 40, 'name' => 'South Carolina','short_name'=>'SC'],
            ['id' => 41, 'name' => 'South Dakota','short_name'=>'SD'],
            ['id' => 42, 'name' => 'Tennessee','short_name'=>'TN'],
            ['id' => 43, 'name' => 'Texas','short_name'=>'TX'],
            ['id' => 44, 'name' => 'Utah','short_name'=>'UT'],
            ['id' => 45, 'name' => 'Vermont','short_name'=>'VT'],
            ['id' => 46, 'name' => 'Virginia','short_name'=>'VA'],
            ['id' => 47, 'name' => 'Washington','short_name'=>'WA'],
            ['id' => 48, 'name' => 'West Virginia','short_name'=>'WV'],
            ['id' => 49, 'name' => 'Wisconsin','short_name'=>'WI'],
            ['id' => 50, 'name' => 'Wyoming','short_name'=>'WY'],



        ];

        Countrystate::insert($states);
    }
}
