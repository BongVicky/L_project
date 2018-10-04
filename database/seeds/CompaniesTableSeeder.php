<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'filename' => '/images/15352074151765423.jpg',
            'name' => 'ALLWEB Co., Ltd.',
            'Description' => 'Our operational teams currently comprise 35 developers, supervised by experienced project managers. The language we use for our day-to-day work and in most of our documents is English, but Project Management and Customer Relationship is either done in Khmer, English or French.

                              We are specialized in software development as well as IT infrastructure management and support. We provide custom software solutions that fit your business with a wide range of technology. Most of the components we’ve built for more than 10 years implement complex business logic independently from deployment.

                              All members are selected carefully to be able to handle all assigned tasks. ALLWEB selects only certified IT professional skilled person to be in our team based in Europe and Asia. Our members are coming from the best European, American and Australian Universities, Private companies and other high technology requiring quality excellence.',
            'address' => 'Kim Hap, Mao Tse Toung Blvd, Sangkat Tuol Svay Prey 2,Khan Chamkarmon, Phnom Penh – CAMBODIA.',
            'phone' => '+855 23 221 320',
            'email' => 'info@allweb.com.kh',
            'website' => 'www.allweb.com.kh',
            'f_link' => 'https://www.facebook.com/allweb.co.ltd/',
            'linkedin_link' => 'https://www.linkedin.com/company/allweb-co-ltd/',
        ]);
    }
}
