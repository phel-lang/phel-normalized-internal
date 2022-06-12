<?php

declare(strict_types=1);

namespace PhelDoc\PhelNormalizedInternalFunctions;

use Gacela\Framework\AbstractFactory;
use Phel\Run\RunFacadeInterface;
use PhelDoc\PhelNormalizedInternalFunctions\Domain\ApiMarkdownGenerator;
use PhelDoc\PhelNormalizedInternalFunctions\Domain\ApiSearchGenerator;
use PhelDoc\PhelNormalizedInternalFunctions\Domain\PhelFnLoaderInterface;
use PhelDoc\PhelNormalizedInternalFunctions\Domain\PhelFnNormalizer;
use PhelDoc\PhelNormalizedInternalFunctions\Domain\PhelFnNormalizerInterface;
use PhelDoc\PhelNormalizedInternalFunctions\Infrastructure\ApiMarkdownFile;
use PhelDoc\PhelNormalizedInternalFunctions\Infrastructure\ApiSearchFile;
use PhelDoc\PhelNormalizedInternalFunctions\Infrastructure\PhelFnLoader;

final class Factory extends AbstractFactory
{
    public function createApiMarkdownFile(): ApiMarkdownFile
    {
        return new ApiMarkdownFile(
            $this->createApiMarkdownGenerator(),
            $this->getConfig()->getAppRootDir(),
        );
    }

    private function createApiMarkdownGenerator(): ApiMarkdownGenerator
    {
        return new ApiMarkdownGenerator(
            $this->createPhelFnNormalizer()
        );
    }

    public function createApiSearchFile(): ApiSearchFile
    {
        return new ApiSearchFile(
            $this->createPhelFnNormalizer(),
            $this->createApiSearchGenerator(),
            $this->getConfig()->getAppRootDir()
        );
    }

    private function createPhelFnNormalizer(): PhelFnNormalizerInterface
    {
        return new PhelFnNormalizer($this->createPhelFnLoader());
    }

    private function createPhelFnLoader(): PhelFnLoaderInterface
    {
        return new PhelFnLoader(
            $this->getRunFacade(),
            $this->getConfig()->getAppRootDir()
        );
    }

    private function createApiSearchGenerator(): ApiSearchGenerator
    {
        return new ApiSearchGenerator();
    }

    private function getRunFacade(): RunFacadeInterface
    {
        return $this->getProvidedDependency(DependencyProvider::FACADE_PHEL_RUN);
    }
}
