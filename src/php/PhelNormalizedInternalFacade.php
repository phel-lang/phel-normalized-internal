<?php

declare(strict_types=1);

namespace PhelNormalizedInternal;

use Gacela\Framework\AbstractFacade;
use PhelNormalizedInternal\Transfer\NormalizedPhelFunction;

/**
 * @method PhelNormalizedInternalFactory getFactory()
 */
final class PhelNormalizedInternalFacade extends AbstractFacade implements PhelNormalizedInternalFacadeInterface
{
    /**
     * @return array<string,list<NormalizedPhelFunction>>
     */
    public function getNormalizedGroupedFunctions(): array
    {
        return $this->getFactory()
            ->createPhelFnNormalizer()
            ->getNormalizedGroupedFunctions();
    }
}
