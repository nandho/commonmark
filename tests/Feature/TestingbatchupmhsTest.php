<?php

namespace Tests\Feature;

use Tests\TestCase;

class TestingbatchupmhsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    //testing to get all id in table pmb
    public function getPmbIds(): array
    {
        $response = $this->get('http://localhost:8000/api/pmb'); // Ensure your API endpoint is correct

        // Ensure response status is 200 OK
        $response->assertStatus(200);

        // Get the response data as an array
        $data = $response->json('data.data'); // Access the nested 'data' key

        // Extract the IDs
        $ids = array_column($data, 'id');
        var_dump($ids);

        // Return the IDs
        return $ids;
    }

    public function testingbatchupmhs(): void
    {
        // Retrieve IDs
        $ids = $this->getPmbIds();

        // Prepare data for batch acceptance
        var_dump($ids);

        foreach ($ids as $id) {
            # code...
            $data = ['data' => ['id' => $id]];
        }

        // Make a POST request to batch accept the entries
        $response = $this->postJson('http://localhost:8000/api/mahasiswa', $data); // Ensure your API endpoint is correct


        // Assert: Check response status and structure
        $response->assertStatus(201);



        // Additional assertions can be added here to check the database state
    }
}
