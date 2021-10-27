<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $company = [
            ['id' => 1, 'name' => 'Automobiles and Components'],
            ['id' => 2, 'name' => 'Banks'],
            ['id' => 3, 'name' => 'Capital Goods'],
            ['id' => 4, 'name' => 'Commercial and Professional Services'],
            ['id' => 5, 'name' => 'Consumer Durables and Apparel'],
            ['id' => 6, 'name' => 'Consumer Services'],
            ['id' => 7, 'name' => 'Diversified Financials'],
            ['id' => 8, 'name' => 'Energy'],
            ['id' => 9, 'name' => 'Food, Beverage, and Tobacco'],
            ['id' => 10, 'name' => 'Food and Staples Retailing'],
            ['id' => 11, 'name' => 'Health Care Equipment and Services'],
            ['id' => 12, 'name' => 'Household and Personal Products'],
            ['id' => 13, 'name' => 'Insurance'],
            ['id' => 14, 'name' => 'Materials'],
            ['id' => 15, 'name' => 'Media and Entertainment'],
            ['id' => 16, 'name' => 'Pharmaceuticals, Biotechnology, and Life Sciences'],
            ['id' => 17, 'name' => 'Real Estate'],
            ['id' => 18, 'name' => 'Retailing'],
            ['id' => 19, 'name' => 'Semiconductors and Semiconductor Equipment'],
            ['id' => 20, 'name' => 'Software and Services'],
            ['id' => 21, 'name' => 'Technology Hardware and Equipment'],
            ['id' => 22, 'name' => 'Telecommunication Services'],
            ['id' => 23, 'name' => 'Transportation'],
            ['id' => 24, 'name' => 'Utilities'],
        ];

        Company::insert($company);
    }
}
