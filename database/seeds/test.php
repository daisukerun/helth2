<?php

use Illuminate\Database\Seeder;

class test extends Seeder
{
    public function run()
    {
        \DB::table('helth2')->insert(
            [
                'id' => '1',
                'name'    => '書類管理',
                'zentai'  => '10',
                'tairyokujikann1'=>'2',
                'tairyokujikann2' => '1'

             ]);
    }
}
