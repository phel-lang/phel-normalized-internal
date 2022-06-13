<?php

declare(strict_types=1);

namespace PhelNormalizedInternalTest;

use Gacela\Framework\Gacela;
use PhelNormalizedInternal\PhelNormalizedInternalFacade;
use PHPUnit\Framework\TestCase;

final class PhelNormalizedInternalFacadeTest extends TestCase
{
    public function test_number_of_(): void
    {
        Gacela::bootstrap(__DIR__ . '/../../.');

        $facade = new PhelNormalizedInternalFacade();
        $actual = $facade->getNormalizedGroupedFunctions();

        self::assertCount(206, $actual);
    }
}
