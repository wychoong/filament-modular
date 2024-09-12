<?php

namespace Modules\Foo\Filament\Resources\CarResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Foo\Filament\Resources\CarResource;

class EditCar extends EditRecord
{
    protected static string $resource = CarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
