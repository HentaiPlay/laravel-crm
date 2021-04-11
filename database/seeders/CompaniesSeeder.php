<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name'      => 'samsung',
                'email'     => 'samsung@gmail.com',
                'phone'     => '88007006060',
                'website'   => 'www.samsung.com',
                'logo'      => 'samsung.jpg',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'name'      => 'apple',
                'email'     => 'apple@gmail.com',
                'phone'     => '89009009090',
                'website'   => 'www.apple.com',
                'logo'      => 'apple.png',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'name'      => 'nokia',
                'email'     => 'nokia@gmail.com',
                'phone'     => '88005005050',
                'website'   => 'www.nokia.com',
                'logo'      => 'nokia.jpeg',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'name'      => 'htc',
                'email'     => 'htc@gmail.com',
                'phone'     => '87007007760',
                'website'   => 'www.htc.com',
                'logo'      => 'htc.jpg',
                'created_at'    => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
