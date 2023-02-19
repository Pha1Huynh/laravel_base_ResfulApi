<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class employeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            ['name'=> "Huynh tan Phat", 'email' => 'huynhtanphatleo@gmail', 'phone' => '123'],
           [ 'name'=> "Nguyen Tan Phuoc", 'email' => 'NTP@gmail', 'phone' => '1215'],
        ];
        foreach($employees as $row) {
            DB::table('employees')->insert($row);
        }
    }
}
