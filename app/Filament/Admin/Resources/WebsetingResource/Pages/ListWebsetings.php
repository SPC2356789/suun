<?php

namespace App\Filament\Admin\Resources\WebsetingResource\Pages;

use App\Filament\Admin\Resources\WebsetingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWebsetings extends ListRecords
{
    protected static string $resource = WebsetingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
