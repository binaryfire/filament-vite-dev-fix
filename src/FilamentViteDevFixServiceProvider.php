<?php

declare(strict_types=1);

namespace Binaryfire\FilamentViteDevFix;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\ServiceProvider;

class FilamentViteDevFixServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the service provider
     */
    public function boot(): void
    {
        if (! app()->isProduction()) {
            $this->fixViteDevStyles();
        }
    }

    /**
     * Add CSS overrides to fix Vite dev styles bug
     *
     * @see https://github.com/filamentphp/filament/issues/16257
     */
    private function fixViteDevStyles(): void
    {
        FilamentAsset::register([
            Css::make('filament-vite-dev-fix', __DIR__ . '/../resources/css/vite-dev-fix.css'),
        ]);
    }
}