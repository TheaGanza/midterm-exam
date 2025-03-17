<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            ['name' => 'Model', 'description' => 'Provides Data Structure. It interacts with database tables to fetch, save, update, or delete data.'],
            ['name' => 'View', 'description' => 'In charge of UI logic. Presents the UI contents to the user.',],
            ['name' => 'Controller', 'description' => 'Interface betweeen Model and View. Handles logic and response to HTTP request.',],
            ['name' => 'Routes', 'description' => 'Works with HTTP methods to request interaction with the database.',],
            ['name' => 'Middleware', 'description' => 'Intermediary software that filters HTTP requests.',],
            ['name' => 'Blade Templates', 'description' => 'Allows the use PHP features directly to HTML code.',],
            ['name' => 'Migrations', 'description' => 'Defines changes you want to make to your database schema.',],
            ['name' => 'Seeders', 'description' => 'Inserts pre-defined data into database.',],
            ['name' => 'Database', 'description' => 'Collection of structured information.',],
            ['name' => 'Eloquent ORM', 'description' => 'Object-oriented way of handling database records. Represents data as objects',]
        ]); 
    }
}
