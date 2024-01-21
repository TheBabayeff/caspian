<?php

namespace App\Filament\Resources\RequestCallResource\Pages;

use App\Filament\Resources\RequestCallResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRequestCalls extends ListRecords
{
    protected static string $resource = RequestCallResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
