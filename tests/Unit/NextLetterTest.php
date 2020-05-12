<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Services\NextLetter;

class NextLetterTest extends TestCase
{
    /** @var Service **/
    protected $instance;

    /**
     * Initialization
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->instance = new NextLetter();
    }

    public function testGetNextLetter()
    {
        $actual = $this->instance->getNextLetter('a');
        $expected = 'b';
        $this->assertSame($expected, $actual);
    }
}
