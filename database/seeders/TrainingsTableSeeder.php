<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrainingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->insert([
            'title' => 'Training Laravel 7 Days @ KPTM',
            'description' => 'Training Laravel 7 Days @ KPTM is ongoing',
            'trainer' => 'Tarmizi Sanusi'
        ]);
    }
}
