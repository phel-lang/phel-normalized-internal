<?php

declare(strict_types=1);

namespace PhelDoc\PhelNormalizedInternalFunctions\Domain;

interface PhelFnNormalizerInterface
{
    /**
     * @return array<string,array{fnName:string,doc:string,fnSignature:string,desc:string}>
     */
    public function getNormalizedGroupedPhelFns(): array;
}
