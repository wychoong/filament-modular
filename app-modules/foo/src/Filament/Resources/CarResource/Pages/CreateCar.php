<?php

namespace Modules\Foo\Filament\Resources\CarResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Foo\Filament\Resources\CarResource;

class CreateCar extends CreateRecord
{
    protected static string $resource = CarResource::class;
}
