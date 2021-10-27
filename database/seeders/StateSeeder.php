<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $values = [
            ['id' => 1, 'geo' => 0, 'name' => 'Toll Free Number'],
            ['id' => 2, 'geo' => 1, 'name' => 'Alabama'],
            ['id' => 3, 'geo' => 2, 'name' => 'Alaska'],
            ['id' => 4, 'geo' => 3, 'name' => 'Arizona'],
            ['id' => 5, 'geo' => 4, 'name' => 'Arkansas'],
            ['id' => 6, 'geo' => 5, 'name' => 'California'],
            ['id' => 7, 'geo' => 6, 'name' => 'Colorado'],
            ['id' => 8, 'geo' => 7, 'name' => 'Connecticut'],
            ['id' => 9, 'geo' => 8, 'name' => 'Delaware'],
            ['id' => 10, 'geo' => 9, 'name' => 'Florida'],
            ['id' => 11, 'geo' => 10, 'name' => 'Georgia'],
            ['id' => 12, 'geo' => 11, 'name' => 'Hawaii'],
            ['id' => 13, 'geo' => 12, 'name' => 'Idaho'],
            ['id' => 14, 'geo' => 13, 'name' => 'Illinois'],
            ['id' => 15, 'geo' => 14, 'name' => 'Indiana'],
            ['id' => 16, 'geo' => 15, 'name' => 'Iowa'],
            ['id' => 17, 'geo' => 16, 'name' => 'Kansas'],
            ['id' => 18, 'geo' => 17, 'name' => 'Kentucky'],
            ['id' => 19, 'geo' => 18, 'name' => 'Louisiana'],
            ['id' => 20, 'geo' => 19, 'name' => 'Maine'],
            ['id' => 21, 'geo' => 20, 'name' => 'Maryland'],
            ['id' => 22, 'geo' => 21, 'name' => 'Massachusetts'],
            ['id' => 23, 'geo' => 22, 'name' => 'Michigan'],
            ['id' => 24, 'geo' => 23, 'name' => 'Minnesota'],
            ['id' => 25, 'geo' => 24, 'name' => 'Mississippi'],
            ['id' => 26, 'geo' => 25, 'name' => 'Missouri'],
            ['id' => 27, 'geo' => 26, 'name' => 'Montana'],
            ['id' => 28, 'geo' => 27, 'name' => 'Nebraska'],
            ['id' => 29, 'geo' => 28, 'name' => 'Nevada'],
            ['id' => 30, 'geo' => 29, 'name' => 'New Hampshire'],
            ['id' => 31, 'geo' => 30, 'name' => 'New Jersey'],
            ['id' => 32, 'geo' => 31, 'name' => 'New Mexico'],
            ['id' => 33, 'geo' => 32, 'name' => 'New York'],
            ['id' => 34, 'geo' => 33, 'name' => 'North Carolina'],
            ['id' => 35, 'geo' => 34, 'name' => 'North Dakota'],
            ['id' => 36, 'geo' => 35, 'name' => 'Ohio'],
            ['id' => 37, 'geo' => 36, 'name' => 'Oklahoma'],
            ['id' => 38, 'geo' => 37, 'name' => 'Oregon'],
            ['id' => 49, 'geo' => 38, 'name' => 'Pennsylvania'],
            ['id' => 40, 'geo' => 39, 'name' => 'Rhode Island'],
            ['id' => 41, 'geo' => 40, 'name' => 'South Carolina'],
            ['id' => 42, 'geo' => 41, 'name' => 'South Dakota'],
            ['id' => 43, 'geo' => 42, 'name' => 'Tennessee'],
            ['id' => 44, 'geo' => 43, 'name' => 'Texas'],
            ['id' => 45, 'geo' => 44, 'name' => 'Utah'],
            ['id' => 46, 'geo' => 45, 'name' => 'Vermont'],
            ['id' => 47, 'geo' => 46, 'name' => 'Virginia'],
            ['id' => 48, 'geo' => 47, 'name' => 'Washington'],
            ['id' => 59, 'geo' => 48, 'name' => 'West Virginia'],
            ['id' => 50, 'geo' => 49, 'name' => 'Wisconsin'],
            ['id' => 51, 'geo' => 50, 'name' => 'Wyoming'],
        ];

        State::insert($values);
    }
}
