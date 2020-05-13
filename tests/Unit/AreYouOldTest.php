<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Services\AreYouOld;

class AreYouOldTest extends TestCase
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
        $this->instance = new AreYouOld();
    }

    /**
     * @dataProvider dataGetDescription
     */
    public function testGetDescription($age, $expected)
    {
        $actual = $this->instance->getDescription($age);
        $this->assertSame($expected, $actual);
    }

    public function dataGetDescription()
    {
        return [
            // data set #0
            [3, 'You are just a baby ;)'],
            // data set #1
            [7, 'You are a child.'],
            // data set #2
            [17, 'You are a teenager.'],
            // data set #3
            [25, 'You are a young adult.'],
            // data set #4
            [35, 'You are an adult.'],
            // data set #5
            [55, 'You are a middle-aged person.'],
            // data set #6
            [75, 'You are a senior.'],
            // data set #7
            [98, 'You are very old..'],
        ];
    }
}
