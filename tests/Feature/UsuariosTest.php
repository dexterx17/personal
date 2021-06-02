<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsuariosTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_usuarios()
    {
        $response = $this->get('/api/usuarios');

        $response->assertStatus(200);
    }

    public function test_add_usuario(){
        $data = [
            'name' => 'Jaime',
            'username' => 'dex2',
            'email'=> 'sistemass@santana.ec',
            'password' =>'12345'
        ];

        $response = $this->post('/api/usuarios',$data)
                ->dump()
                ->assertJson(['status'=>true])
                ->assertStatus(200);
    
        $this->assertDatabaseHas('users',[
            'email' => $data['email']
        ]);
    }
}
