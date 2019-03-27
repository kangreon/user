<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersRESTTest extends TestCase
{
    /**
     * Users API test
     *
     * @return void
     */
    public function testUsersAPI()
    {
        $data = [
            'name' => '23454735453568',
            'email' => '32463222@3454',
            'birthday' => '1993-07-26',
            'gender' => '321534234565',
        ];

        $response = $this->json('POST', '/api/users', $data)
            ->assertStatus(200)
            ->assertJson($data)
            ->decodeResponseJson();

        $id = $response['id'];

        $data['name'] .= '32456725442';

        $this->json('PUT', '/api/users/' . $id, $data)
            ->assertStatus(200)
            ->assertJson($data);

        $this->json('GET', '/api/users/' . $id)
            ->assertStatus(200)
            ->assertJson($data);

        $this->json('GET', '/api/users')
            ->assertStatus(200)
            ->assertJsonFragment($data);

        $this->json('DELETE', '/api/users/' . $id)
            ->assertStatus(202);

        $this->json('GET', '/api/users/' . $id)
            ->assertStatus(404);
    }
}
