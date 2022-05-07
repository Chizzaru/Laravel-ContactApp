<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Contact;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        
        Company::factory()->count(10)->create();
        Contact::factory()->count(50)->create();
    }
}