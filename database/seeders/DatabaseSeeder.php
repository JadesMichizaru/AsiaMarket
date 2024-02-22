<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Modules\Shop\database\seeders\ShopDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        if ($this->command->confirm('Do you want to refresh migration before sending, it will clear all old data?')) {
            $this->command->call('migrate:refresh');
            $this->command->info('Data clear, start from blank DB');
        }


        User::factory()->create();
        $this->command->info('sample user seeded.');

        if ($this->command->confirm('Do you want to seed some sample product?')) {

            $this->call(ShopDatabaseSeeder::class);
        }
    }
}
