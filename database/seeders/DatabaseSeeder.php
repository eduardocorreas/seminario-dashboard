<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $services =[
            [
                "name"=>"Equipe social",
                "period"=> 30,
                "max_participants"=> 3,
                "type"=>"service",
            ],
            [
                "name"=>"Equipe de Benfeitores Obras das Vocações",
                "period"=> 365,
                "max_participants"=> 2,
                "type"=>"service",
            ],
            [
                "name"=>"Hospedeiro e farmacêutico",
                "period"=> 30,
                "max_participants"=> 1,
                "type"=>"service",
            ],
            [
                "name"=>"Roupeiro",
                "period"=> 30,
                "max_participants"=> 1,
                "type"=>"service",
            ],
            [
                "name"=>"Sacristão e sineiro",
                "period"=> 30,
                "max_participants"=> 1,
                "type"=>"exclusive",
            ],
            [
                "name"=>"Equipe de esportes",
                "period"=> 30,
                "max_participants"=> 2,
                "type"=>"service",
            ],
            [
                "name"=>"Motorista",
                "period"=> 30,
                "max_participants"=> 1,
                "type"=>"service",
            ],
            [
                "name"=>"Despenseiro de alimentos",
                "period"=> 365,
                "max_participants"=> 1,
                "type"=>"service",
            ],
            [
                "name"=>"Despenseiro da limpeza",
                "period"=> 183,
                "max_participants"=> 1,
                "type"=>"service",
            ],
            [
                "name"=>"Recepção e sala de atendimento",
                "period"=> 30,
                "max_participants"=> 2,
                "type"=>"function",
            ],
            [
                "name"=>"Refeitório e copa",
                "period"=> 30,
                "max_participants"=> 2,
                "type"=>"function",
            ],
            [
                "name"=>"Capela",
                "period"=> 30,
                "max_participants"=> 3,
                "type"=>"function",
            ],
            [
                "name"=>"Corredores",
                "period"=> 30,
                "max_participants"=> 2,
                "type"=>"function",
            ],
            [
                "name"=>"Auditório",
                "period"=> 30,
                "max_participants"=> 1,
                "type"=>"function",
            ],
            [
                "name"=>"Sala de TV",
                "period"=> 30,
                "max_participants"=> 1,
                "type"=>"function",
            ],
            [
                "name"=>"Sala de reuniões e sala de estudos",
                "period"=> 30,
                "max_participants"=> 2,
                "type"=>"function",
            ],
            [
                "name"=>"Área externa",
                "period"=> 30,
                "max_participants"=> 1,
                "type"=>"function",
            ],
            [
                "name"=>"Banheiro A e B",
                "period"=> 30,
                "max_participants"=> 4,
                "type"=>"function",
            ],
            [
                "name"=>"Área São João Paulo II, Corredor externo e Cozinha",
                "period"=> 30,
                "max_participants"=> 2,
                "type"=>"function",
            ],
            [
                "name"=>"Jardim",
                "period"=> 183,
                "max_participants"=> 2,
                "type"=>"function",
            ],
            [
                "name"=>"Garçom",
                "period"=> 30,
                "max_participants"=> 4,
                "type"=>"function",
            ],
            [
                "name"=>"Liturgia",
                "period"=> 30,
                "max_participants"=> 3,
                "type"=>"function",
            ],
            [
                "name"=>"Café",
                "period"=> 30,
                "max_participants"=> 2,
                "type"=>"function",
            ],
        ];
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
