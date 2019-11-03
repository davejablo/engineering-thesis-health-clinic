<?php

use App\DoctorSpecialization;
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
        $this->call(RolesTableSeeder::class);
        $this->call(DoctorSpecializationSeeder::class);

        // $this->call(UsersTableSeeder::class);
        //        php artisan db:seed
    }
}
