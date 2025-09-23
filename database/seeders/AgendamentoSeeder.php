<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Material;
use Carbon\Carbon;

class AgendamentoSeeder extends Seeder
{
    public function run(): void
    {
        $materials = Material::all();

        if ($materials->count() === 0) {
            $this->command->info("Nenhum material encontrado. Rode primeiro o MaterialSeeder!");
            return;
        }

        DB::table('agendamentos')->insert([
            [
                'material_id' => $materials->random()->id,
                'endereco' => 'Rua das Flores, 123',
                'data_coleta' => Carbon::now()->addDays(1),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'material_id' => $materials->random()->id,
                'endereco' => 'Avenida Central, 456',
                'data_coleta' => Carbon::now()->addDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'material_id' => $materials->random()->id,
                'endereco' => 'Praça da Liberdade, 789',
                'data_coleta' => Carbon::now()->addDays(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
