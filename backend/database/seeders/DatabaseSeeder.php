<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//use App\Models\Memo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MemoTableSeeder::class,
            UserSeeder::class
        ]);
    }
}
