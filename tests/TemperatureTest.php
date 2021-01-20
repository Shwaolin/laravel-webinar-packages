<?php

namespace Shwaolin\LaravelWebinarPackages\Tests;

use PHPUnit\Framework\TestCase;
use Shwaolin\LaravelWebinarPackages\Temperature;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $temperature = new Temperature(5);
        $this->assertSame(41.0, $temperature->toFahrenheit());
    }
}
