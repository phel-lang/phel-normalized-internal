<?php

declare(strict_types=1);

namespace PhelDoc\PhelNormalizedInternalFunctions\Domain;

use Phel\Lang\Collections\Map\PersistentMapInterface;

interface PhelFnLoaderInterface
{
    /**
     * @return array<string,PersistentMapInterface>
     */
    public function getNormalizedPhelFunctions(): array;
}
