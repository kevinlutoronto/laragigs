<?php

namespace Database\Seeders;
use App\Models\Listing;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Listing::create(
            [
                'title' => 'Laravel Senior Developer',
                'tag' => 'laravel, javascript',
                'company' => 'Acme Corp',
                'location' => 'Boston, MA',
                'email' => 'email1@gmail.com',
                'website' => 'https://www.acme.com',
                'description' => 'This is a description'
            ]
        );
        Listing::create(
            [
                'title' => 'Full-Stack Engineer',
                'tag' => 'laravel, backend, api',
                'company' => 'Stark Industries',
                'location' => 'New York, NY',
                'email' => 'email2@gmail.com',
                'website' => 'https://www.starkindustries.com',
                'description' => 'This is a description'
            ]
        );
    }
}
