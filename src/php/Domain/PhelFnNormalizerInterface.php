<?php

declare(strict_types=1);

namespace PhelNormalizedInternal\Domain;

use PhelNormalizedInternal\Transfer\NormalizedPhelFunction;

interface PhelFnNormalizerInterface
{
    /**
     * @return array<string,NormalizedPhelFunction>
     */
    public function getNormalizedGroupedFunctions(): array;
}
