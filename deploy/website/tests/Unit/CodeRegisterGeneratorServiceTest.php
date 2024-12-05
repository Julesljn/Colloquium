<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\CodeRegisterGeneratorService;

class CodeRegisterGeneratorServiceTest extends TestCase
{
    /** @test */
    public function it_generates_a_six_digit_code()
    {
        $generator = new CodeRegisterGeneratorService();
        $code = $generator->generate();

        $this->assertIsInt($code);

        $this->assertGreaterThanOrEqual(100000, $code);
        $this->assertLessThanOrEqual(999999, $code);
    }
}