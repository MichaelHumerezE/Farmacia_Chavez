<?php

namespace Database\Seeders;

use App\Models\producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        producto::create([
            'name' => 'Aciclovir 0.05 Crema X 5Gr',
            'descripcion' => '',
            'stock' => '50',
            'precioUnitario' => '17.50',
            'imagen' => 'Aciclovir_0.05_Crema_X_5Gr.jpg',
            'idcategoria' => '3',
            'idmarca' => '4'
        ]);
        producto::create([
            'name' => 'Clobetasol 0.05 Crema X 25Gr',
            'descripcion' => '',
            'stock' => '50',
            'precioUnitario' => '18',
            'imagen' => 'Clobetasol_0.05_Crema_X_25Gr.jpg',
            'idcategoria' => '3',
            'idmarca' => '4'
        ]);
        producto::create([
            'name' => 'Hidrocortisona 0.1 Generico Crema X 15Gr',
            'descripcion' => '',
            'stock' => '50',
            'precioUnitario' => '18.36',
            'imagen' => 'Hidrocortisona_1_Generico_Crema_X_15Gr.jpg',
            'idcategoria' => '3',
            'idmarca' => '5'
        ]);

        producto::create([
            'name' => 'Topicrem Crema X 10Gr',
            'descripcion' => '',
            'stock' => '50',
            'precioUnitario' => '29.48',
            'imagen' => 'Topicrem_Crema_X_10Gr.jpg',
            'idcategoria' => '3',
            'idmarca' => '6'
        ]);

        producto::create([
            'name' => 'Virusan Aciclovir 0.05 Crema Dermica X 15Gr',
            'descripcion' => '',
            'stock' => '0',
            'precioUnitario' => '42.85',
            'imagen' => 'Virusan_Aciclovir_0.05_Crema_Dermica_X_15Gr.jpg',
            'idcategoria' => '3',
            'idmarca' => '7'
        ]);

        producto::create([
            'name' => 'Ketoconazol 0.02 Crema Genericox 20Gr',
            'descripcion' => '',
            'stock' => '50',
            'precioUnitario' => '18',
            'imagen' => 'Ketoconazol_0.02_Crema_Genericox_20Gr.jpg',
            'idcategoria' => '3',
            'idmarca' => '8'
        ]);

        producto::create([
            'name' => 'Aciclovir Sandoz Care 50 mg/g Crema, 2 g',
            'descripcion' => '',
            'stock' => '50',
            'precioUnitario' => '28.8',
            'imagen' => 'Aciclovir_Sandoz_Care_50mg_g_Crema_2g.jpg',
            'idcategoria' => '3',
            'idmarca' => '9'
        ]);

        producto::create([
            'name' => 'Viruderm 50 mg/g Pomada, 2 g',
            'descripcion' => '',
            'stock' => '50',
            'precioUnitario' => '32',
            'imagen' => 'Viruderm-Pomada-510x510.jpg',
            'idcategoria' => '3',
            'idmarca' => '10'
        ]);

        producto::create([
            'name' => 'Zovicrem Labial 50 mg/g Crema, 2 g',
            'descripcion' => 'Tratamiento eficaz de los síntomas del herpes Labial (picor, escozor, hormigueo…).',
            'stock' => '50',
            'precioUnitario' => '33.36',
            'imagen' => 'Zovicrem-labial-crema-2-gr-665331-510x510.jpg',
            'idcategoria' => '3',
            'idmarca' => '11'
        ]);

        producto::create([
            'name' => 'Viraxon Aciclovir 0.05 Crema X 5Gr',
            'descripcion' => '',
            'stock' => '50',
            'precioUnitario' => '25.30',
            'imagen' => 'Viraxon_Aciclovir_0.05_Crema_X_5Gr.jpg',
            'idcategoria' => '3',
            'idmarca' => '5'
        ]);
    }
}
