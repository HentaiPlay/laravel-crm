<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=90; $i++){
            DB::table('employees')->insert([
                'first_name'    => 'f_name '.$i,
                'last_name'     => 'l_name '.$i,
                'company_id'    => rand(1,4),
                'created_at'    => date("Y-m-d H:i:s")
            ]);
        }
    }
}
