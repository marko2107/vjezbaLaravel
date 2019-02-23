<?php

use Illuminate\Database\Seeder;

class ZanrTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zanrs')->delete();
        DB::table('zanrs')->insert($this->zanr);
    }
    private $zanr = array(
	array(
		"zanr" => "Akcija",
		
	),array(
		"zanr" => "Komedija",
		
            ),);
}
