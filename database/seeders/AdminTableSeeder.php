<?php
namespace Database\Seeders;
use App\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        \App\Models\Admin::factory()->count(1)->create();
    }
}