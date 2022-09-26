<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Student;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function setup() : void
    {
        parent::setup();
        $this->seed();
    }
    
    public function test_example()
    {
        $st = Student::all();

        var_dump($st);

        $this->assertDatabaseHas('students',
        [
            'email' => "test@mail.ru"
        ]);        
    }
}