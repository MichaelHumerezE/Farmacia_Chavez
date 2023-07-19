<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Iventario;

class IventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Iventario::create([
            'cantidad' => '10',
            'id_producto' => '1',
            'id_sucursal' => '1',
        ]);
        Iventario::create([
            'cantidad' => '10',
            'id_producto' => '1',
            'id_sucursal' => '2',
        ]);
        Iventario::create([
            'cantidad' => '10',
            'id_producto' => '1',
            'id_sucursal' => '3',
        ]);
        Iventario::create([
            'cantidad' => '10',
            'id_producto' => '1',
            'id_sucursal' => '4',
        ]);
        Iventario::create([
            'cantidad' => '10',
            'id_producto' => '1',
            'id_sucursal' => '5',
        ]);

        Iventario::create([
            'cantidad' => '25',
            'id_producto' => '2',
            'id_sucursal' => '1',
        ]);
        Iventario::create([
            'cantidad' => '10',
            'id_producto' => '2',
            'id_sucursal' => '5',
        ]);
        Iventario::create([
            'cantidad' => '15',
            'id_producto' => '2',
            'id_sucursal' => '3',
        ]);
        Iventario::create([
            'cantidad' => '50',
            'id_producto' => '3',
            'id_sucursal' => '1',
        ]);
        Iventario::create([
            'cantidad' => '25',
            'id_producto' => '4',
            'id_sucursal' => '2',
        ]);
        Iventario::create([
            'cantidad' => '25',
            'id_producto' => '4',
            'id_sucursal' => '5',
        ]);
        /*
        Iventario::create([
            'cantidad' => '10',
            'id_producto' => '5',
            'id_sucursal' => '4',
        ]);
        Iventario::create([
            'cantidad' => '20',
            'id_producto' => '5',
            'id_sucursal' => '3',
        ]);
        Iventario::create([
            'cantidad' => '20',
            'id_producto' => '5',
            'id_sucursal' => '2',
        ]);
        */
        Iventario::create([
            'cantidad' => '5',
            'id_producto' => '6',
            'id_sucursal' => '1',
        ]);
        Iventario::create([
            'cantidad' => '5',
            'id_producto' => '6',
            'id_sucursal' => '2',
        ]);
        Iventario::create([
            'cantidad' => '30',
            'id_producto' => '6',
            'id_sucursal' => '3',
        ]);
        Iventario::create([
            'cantidad' => '10',
            'id_producto' => '6',
            'id_sucursal' => '5',
        ]);
        Iventario::create([
            'cantidad' => '10',
            'id_producto' => '7',
            'id_sucursal' => '1',
        ]);
        Iventario::create([
            'cantidad' => '5',
            'id_producto' => '7',
            'id_sucursal' => '2',
        ]);
        Iventario::create([
            'cantidad' => '15',
            'id_producto' => '7',
            'id_sucursal' => '3',
        ]);
        Iventario::create([
            'cantidad' => '5',
            'id_producto' => '7',
            'id_sucursal' => '4',
        ]);
        Iventario::create([
            'cantidad' => '15',
            'id_producto' => '7',
            'id_sucursal' => '5',
        ]);
        Iventario::create([
            'cantidad' => '50',
            'id_producto' => '8',
            'id_sucursal' => '5',
        ]);
        Iventario::create([
            'cantidad' => '17',
            'id_producto' => '9',
            'id_sucursal' => '3',
        ]);
        Iventario::create([
            'cantidad' => '33',
            'id_producto' => '9',
            'id_sucursal' => '1',
        ]);
        Iventario::create([
            'cantidad' => '3',
            'id_producto' => '10',
            'id_sucursal' => '1',
        ]);
        Iventario::create([
            'cantidad' => '27',
            'id_producto' => '10',
            'id_sucursal' => '4',
        ]);
        Iventario::create([
            'cantidad' => '20',
            'id_producto' => '10',
            'id_sucursal' => '5',
        ]);
    }
}
