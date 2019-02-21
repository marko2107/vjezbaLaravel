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
		"zanr" => "Akcija",
		"godina" => 2001,
		"trajanje" => 90,
		"slika" => "antitrust_2001.jpg",
	),
        array(
		"naslov" => "Firewall",
		"zanr" => "Akcija",
		"godina" => 2006,
		"trajanje" => 90,
		"slika" => "firewall_2006.jpg",
	),
        array(
		"naslov" => "Hackers",
		"zanr" => "Akcija",
		"godina" => 1995,
		"trajanje" => 90,
		"slika" => "hackers_1995.jpg",
	),
        array(
		"naslov" => "Operation Swordfish",
		"zanr" => "Akcija",
		"godina" => 2001,
		"trajanje" => 90,
		"slika" => "operation_swordfish_2001.jpg",
	),
        array(
		"naslov" => "Operation takendown",
		"zanr" => "Akcija",
		"godina" => 2000,
		"trajanje" => 90,
		"slika" => "operation_takedown_2000.jpg",
	),
        array(
		"naslov" => "Pirates of silicon valley.jpg",
		"zanr" => "Akcija",
		"godina" => 1999,
		"trajanje" => 90,
		"slika" => "pirates_of_silicone_valley_1999.jpg",
	),
        array(
		"naslov" => "The social network",
		"zanr" => "Akcija",
		"godina" => 2010,
		"trajanje" => 90,
		"slika" => "the_social_network_2010.jpg",
	),
        array(
		"naslov" => "Tron",
		"zanr" => "Akcija",
		"godina" => 1982,
		"trajanje" => 90,
		"slika" => "tron_1982.jpg",
	),
        array(
		"naslov" => "Tron legacy",
		"zanr" => "Akcija",
		"godina" => 2010,
		"trajanje" => 90,
		"slika" => "tron_legacy_2010.jpg",
	),
        array(
		"naslov" => "War games",
		"zanr" => "Akcija",
		"godina" => 1983,
		"trajanje" => 90,
		"slika" => "war_games_1983.jpg",
	),);
}
