<?php

declare(strict_types=1);

namespace PhelNormalizedInternal;

use PhelNormalizedInternal\Transfer\NormalizedPhelFunction;

interface PhelNormalizedInternalFacadeInterface
{
    /**
     * @return array<string,list<NormalizedPhelFunction>>
     */
    public function getNormalizedGroupedFunctions(): array;
}
