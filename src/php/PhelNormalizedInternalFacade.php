<?php

declare(strict_types=1);

namespace PhelNormalizedInternal;

use Gacela\Framework\AbstractFacade;
use PhelNormalizedInternal\Transfer\NormalizedPhelFunction;

/**
 * @method \PhelNormalizedInternal\PhelNormalizedInternalFactory getFactory()
 */
final class PhelNormalizedInternalFacade extends AbstractFacade
{
    /**
     * @return array<string,NormalizedPhelFunction>
     */
    public function getNormalizedGroupedFunctions(): array
    {
        return $this->getFactory()
            ->createPhelFnNormalizer()
            ->getNormalizedGroupedFunctions();
    }
}
