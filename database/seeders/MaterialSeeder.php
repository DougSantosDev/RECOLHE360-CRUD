<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('materials')->insert([
            ['nome' => 'Papel', 'descricao' => 'Papéis recicláveis'],
            ['nome' => 'Plástico', 'descricao' => 'Garrafas PET e outros'],
            ['nome' => 'Vidro', 'descricao' => 'Garrafas, potes e cacos'],
            ['nome' => 'Metal', 'descricao' => 'Latas e sucata'],
        ]);
    }
}
