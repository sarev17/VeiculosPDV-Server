<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Venda;
class PagamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        date_default_timezone_set ("America/Sao_Paulo");
        $vendas = Venda::get();
        
        $id=array();
        $cliente=array();
        $cpf=array();
        $veiculo=array();
        $user_id=array();
        
        foreach($vendas as $v){
            array_push($id,$v['id']);
            array_push($cliente,$v['cliente']);
            array_push($cpf,$v['cpf']);
            array_push($veiculo,$v['placa']);
            array_push($user_id,$v['user_id']);
        }
        
        
        return [
        'venda_id'=> $this->faker->randomElement($id),
        'user_id'=> $this->faker->randomElement($user_id),
        'cliente'=>$this->faker->randomElement($cliente),
        'cpf'=>$this->faker->randomElement($cpf),
        'veiculo'=>$this->faker->randomElement($veiculo),
        'referencia'=>$this->faker->randomElement(array('Parcela 1','Parcela 2','Parcela 3','Parcela 4')),
        'total'=>$this->faker->NumberBetween(300,1000),
        'updated_at'=> $this->faker->date('Y-m-d H:i:s'),
        'created_at'=> $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
