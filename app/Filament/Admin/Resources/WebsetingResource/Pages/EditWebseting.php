<?php

namespace App\Filament\Admin\Resources\WebsetingResource\Pages;

use App\Filament\Admin\Resources\WebsetingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWebseting extends EditRecord
{
    protected static string $resource = WebsetingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
