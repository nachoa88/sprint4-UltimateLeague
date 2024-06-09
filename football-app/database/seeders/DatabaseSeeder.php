<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\LeagueSeeder;
use Database\Seeders\TeamSeeder;
use Database\Seeders\GameSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'TestUser',
            'email' => 'test@mail.com',
            'password' => '123456789',
        ]);

        $this->call([
            LeagueSeeder::class,
            TeamSeeder::class,
            GameSeeder::class,
        ]);
    }
}
