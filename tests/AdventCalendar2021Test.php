<?php

declare(strict_types=1);

namespace NaokiTsuchiya\AdventCalendar2021;

use PHPUnit\Framework\TestCase;

class AdventCalendar2021Test extends TestCase
{
    /** @var AdventCalendar2021 */
    protected $adventCalendar2021;

    protected function setUp(): void
    {
        $this->adventCalendar2021 = new AdventCalendar2021();
    }

    public function testIsInstanceOfAdventCalendar2021(): void
    {
        $actual = $this->adventCalendar2021;
        $this->assertInstanceOf(AdventCalendar2021::class, $actual);
    }
}
