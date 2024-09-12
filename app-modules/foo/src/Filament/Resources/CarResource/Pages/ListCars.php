<?php

namespace Modules\Foo\Filament\Resources\CarResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Modules\Foo\Filament\Resources\CarResource;

class ListCars extends ListRecords
{
    protected static string $resource = CarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
