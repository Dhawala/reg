<?php

namespace Database\Seeders;

use App\Models\DegreeClass;
use Illuminate\Database\Seeder;
use \DB;

class DegreeClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('degree_classes')->insert([
            ['name'=>'Not Applicable'],
            ['name'=>'First-Class Honours'],
            ['name'=>'Upper Second-Class Honours'],
            ['name'=>'Lower Second-Class Honours'],
            ['name'=>'Third-Class Honours'],
        ]);
    }
}
