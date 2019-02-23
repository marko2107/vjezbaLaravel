<?php

use Illuminate\Database\Seeder;

class FilmoviTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filmovis')->delete();
        DB::table('filmovis')->insert($this->film);
    }
    
    private $film = array(
	array(
		"naslov" => "Antitrust",
		"zanr_id" => 1,
		"godina" => 2001,
		"trajanje" => 90,
		"slika" => "antitrust_2001.jpg",
	),
        array(
		"naslov" => "Firewall",
		"zanr_id" => 2,
		"godina" => 2006,
		"trajanje" => 90,
		"slika" => "firewall_2006.jpg",
	),
        array(
		"naslov" => "Hackers",
		"zanr_id" => 1,
		"godina" => 1995,
		"trajanje" => 90,
		"slika" => "hackers_1995.jpg",
	),
        array(
		"naslov" => "Operation Swordfish",
		"zanr_id" => 2,
		"godina" => 2001,
		"trajanje" => 90,
		"slika" => "operation_swordfish_2001.jpg",
	),
        array(
		"naslov" => "Operation takendown",
		"zanr_id" => 1,
		"godina" => 2000,
		"trajanje" => 90,
		"slika" => "operation_takedown_2000.jpg",
	),
        array(
		"naslov" => "Pirates of silicon valley.jpg",
		"zanr_id" => 2,
		"godina" => 1999,
		"trajanje" => 90,
		"slika" => "pirates_of_silicone_valley_1999.jpg",
	),
        array(
		"naslov" => "The social network",
		"zanr_id" => 1,
		"godina" => 2010,
		"trajanje" => 90,
		"slika" => "the_social_network_2010.jpg",
	),
        array(
		"naslov" => "Tron",
		"zanr_id" => 1,
		"godina" => 1982,
		"trajanje" => 90,
		"slika" => "tron_1982.jpg",
	),
        array(
		"naslov" => "Tron legacy",
		"zanr_id" => 1,
		"godina" => 2010,
		"trajanje" => 90,
		"slika" => "tron_legacy_2010.jpg",
	),
        array(
		"naslov" => "War games",
		"zanr_id" => 1,
		"godina" => 1983,
		"trajanje" => 90,
		"slika" => "war_games_1983.jpg",
	),);
}
