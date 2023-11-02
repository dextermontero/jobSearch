<?php

namespace Database\Seeders;

use App\Models\CompanyList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyListsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companyData = [
            [
                "company_logo" => 'default.png',
                "company_bg" => 'default_cover.png',
                "company_name" => 'Company 1',
                "company_email" => 'company_1@gmail.com',
                "company_description" => 'Company 1',
                "company_phone" => '123456789',
                "company_founded" => '2023-11-09',
                "company_categories" => 'Corporations',
                "company_size" => '1000',
                "company_address" => 'Company 1 QC ',
                "company_website" => 'Company 1',
                "company_facebook" => 'company1@facebook',
                "company_linkedin" => 'company1@linkedin',
                "company_twitter" => 'company1@twitter',
                "company_instagram" => 'company1@instagram',
                "status" => '1',
                "created_at" => now(),
            ],
            [
                "company_logo" => 'default.png',
                "company_bg" => 'default_cover.png',
                "company_name" => 'Company 2',
                "company_email" => 'company_2@gmail.com',
                "company_description" => 'Company 2',
                "company_phone" => '123456789',
                "company_founded" => '2023-11-09',
                "company_categories" => 'Corporations',
                "company_size" => '1000',
                "company_address" => 'Company 2 QC ',
                "company_website" => 'Company 2',
                "company_facebook" => 'company2@facebook',
                "company_linkedin" => 'company2@linkedin',
                "company_twitter" => 'company2@twitter',
                "company_instagram" => 'company2@instagram',
                "status" => '1',
                "created_at" => now(),
            ],
            [
                "company_logo" => 'default.png',
                "company_bg" => 'default_cover.png',
                "company_name" => 'Company 3',
                "company_email" => 'company_3@gmail.com',
                "company_description" => 'Company 3',
                "company_phone" => '123456789',
                "company_founded" => '2023-11-09',
                "company_categories" => 'Corporations',
                "company_size" => '1000',
                "company_address" => 'Company 3 QC ',
                "company_website" => 'Company 3',
                "company_facebook" => 'company3@facebook',
                "company_linkedin" => 'company3@linkedin',
                "company_twitter" => 'company3@twitter',
                "company_instagram" => 'company3@instagram',
                "status" => '1',
                "created_at" => now(),
            ],
            [
                "company_logo" => 'default.png',
                "company_bg" => 'default_cover.png',
                "company_name" => 'Company 4',
                "company_email" => 'company_1@gmail.com',
                "company_description" => 'Company 4',
                "company_phone" => '123456789',
                "company_founded" => '2023-11-09',
                "company_categories" => 'Corporations',
                "company_size" => '1000',
                "company_address" => 'Company 4 QC ',
                "company_website" => 'Company 4',
                "company_facebook" => 'company4@facebook',
                "company_linkedin" => 'company4@linkedin',
                "company_twitter" => 'company4@twitter',
                "company_instagram" => 'company4@instagram',
                "status" => '1',
                "created_at" => now(),
            ],
            [
                "company_logo" => 'default.png',
                "company_bg" => 'default_cover.png',
                "company_name" => 'Company 5',
                "company_email" => 'company_1@gmail.com',
                "company_description" => 'Company 5',
                "company_phone" => '123456789',
                "company_founded" => '2023-11-09',
                "company_categories" => 'Corporations',
                "company_size" => '1000',
                "company_address" => 'Company 5 QC ',
                "company_website" => 'Company 5',
                "company_facebook" => 'company5@facebook',
                "company_linkedin" => 'company5@linkedin',
                "company_twitter" => 'company5@twitter',
                "company_instagram" => 'company5@instagram',
                "status" => '1',
                "created_at" => now(),
            ],

        ];
        CompanyList::insert($companyData);
    }
}
