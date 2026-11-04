<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\IconSetsBootstrap\Providers;

use Simtabi\Laranail\Package\Tools\Package;
use Simtabi\Laranail\Ichava\Services\IconRegistry;
use Simtabi\Laranail\Ichava\Support\ServiceProvider;
use Simtabi\Laranail\Package\Tools\Exceptions\InvalidPath;
use Simtabi\Laranail\Package\Tools\Exceptions\InvalidPackage;
use Simtabi\Laranail\Ichava\IconSetsBootstrap\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsBootstrap\View\Components\IconComponent;

/**
 * Registers the Bootstrap Icons set with the Ichava registry on boot.
 */
class IconsServiceProvider extends ServiceProvider
{
    /**
     * @throws InvalidPath
     * @throws InvalidPackage
     */
    public function configurePackage(Package $package): void
    {
        $package
            ->setName(IconsConstants::getVendorPackage())
            ->setPathFrom(source: $this, levelsUp: 2);
    }

    public function bootingPackage(): void
    {
        $this->loadBladeComponent(componentClass: IconComponent::class, packageName: 'icon-sets-bootstrap');

        $this->app->make(IconRegistry::class)->fromDirectory(
            $this->package->basePath('resources/assets/svg'),
            self::class,
        );
    }
}
