<?php

namespace Database\Factories;

use App\Models\Capacitacion;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CapacitacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Capacitacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
    
        $usuario = User::select('id')->get();
        //dd($usuario);
        return [
            'user_id' => $this->faker->randomElement($usuario)->id,
            'nombre' => $this->faker->name,
            'institucion' => $this->faker->randomElement($array = array ('A','B','C')), 
            'fecha'=> $this->faker->dateTime,
            'horas'=> $this->faker->time
        ];
    }
}
