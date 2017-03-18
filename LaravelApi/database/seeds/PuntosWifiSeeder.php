<?php

use Illuminate\Database\Seeder;
use App\Wifi;

class PuntosWifiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$row = 1;
		if (($handle = fopen("punts_wifi.csv", "r")) !== FALSE) {
			$columnes = fgetcsv($handle, 1000, ",");
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $row++;
		        $wifi = new Wifi();
		        $wifi->codigoCapa = $data[0];
		        $wifi->CapaGenerica = $data[1];
		        $wifi->nombreCapa = $data[2];
		        $wifi->equip = $data[3];
		        $wifi->distrito = $data[4];
		        $wifi->barrio = $data[5];
		        $wifi->direccion = $data[6];
		        $wifi->save();

		    }
		    fclose($handle);
		}
    }
}

