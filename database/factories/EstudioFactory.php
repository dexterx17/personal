<?php

namespace Database\Factories;

use App\Models\Estudio;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estudio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $usuario = User::select('id')->get();
        //dd($usuario[0]);
        return [
            'user_id' => $this->faker->randomElement($usuario)->id,
            'nivel' =>$this->faker->randomElement($array = array ('Alto','Medio','Bajo')), 
            'institucion' => $this->faker->randomElement($array = array ('A','B','C')), 
            'fecha_egresamiento'=> $this->faker->dateTime,
            'titulo'=> $this->faker->randomElement($array = array ('Sistema','Elctronica','Industrial')), 
        ];
    }
}
