<?php

declare(strict_types=1);

namespace PhelNormalizedInternal;

use Gacela\Framework\AbstractFactory;
use Phel\Run\RunFacadeInterface;
use PhelNormalizedInternal\Domain\PhelFnNormalizer;
use PhelNormalizedInternal\Domain\PhelFnNormalizerInterface;
use PhelNormalizedInternal\Infrastructure\PhelFnLoader;
use PhelNormalizedInternal\Infrastructure\PhelFnLoaderInterface;

/**
 * @method PhelNormalizedInternalConfig getConfig()
 */
final class PhelNormalizedInternalFactory extends AbstractFactory
{
    public function createPhelFnNormalizer(): PhelFnNormalizerInterface
    {
        return new PhelFnNormalizer(
            $this->createPhelFnLoader()
        );
    }

    private function createPhelFnLoader(): PhelFnLoaderInterface
    {
        return new PhelFnLoader(
            $this->getRunFacade(),
            $this->getConfig()->getAppRootDir()
        );
    }

    private function getRunFacade(): RunFacadeInterface
    {
        return $this->getProvidedDependency(PhelNormalizedInternalDependencyProvider::FACADE_PHEL_RUN);
    }
}
