<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Registro;
use App\Models\User;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $usuarios = User::select('id')->get();
        $categorias = Categoria::select('id')->get();
        
        return [
            'fecha'=>$this->faker->dateTime(),
            'user_id'=>$this->faker->randomElement($usuarios)->id,
            'categoria_id'=>$this->faker->randomElement($categorias)->id,
            'valor'=>rand(1,100),
            'observacion'=>$this->faker->paragraph(),
        ];
    }
}
