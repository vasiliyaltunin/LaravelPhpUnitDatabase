<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Student;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function setup() : void
    {
        $this->setup();
    }

    public function test_example()
    {
        $st = Student::all();

        var_dump($st);

        $this->assertTrue(true);
    }
}