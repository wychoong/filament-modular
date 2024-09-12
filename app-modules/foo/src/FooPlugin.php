<?php

namespace Modules\Foo;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FooPlugin implements Plugin
{
    public function getId(): string
    {
        return 'foo';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->discoverResources(__DIR__.'/Filament/Resources', 'Modules\\Foo\\Filament\\Resources');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
