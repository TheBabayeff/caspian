<?php

namespace App\Filament\Resources\RequestCallResource\Pages;

use App\Filament\Resources\RequestCallResource;
use Filament\Actions;
use Filament\Notifications\Actions\Action;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;


class CreateRequestCall extends CreateRecord
{
    protected static string $resource = RequestCallResource::class;


    protected function afterCreate(): void
    {
        $calls = $this->record;

        Notification::make()
            ->title('Yeni Müştəri')
            ->icon('heroicon-o-shopping-bag')
            ->body("**{$calls->name} {$calls->phone}**")
            ->actions([
                Action::make('View')
                    ->url(RequestCallResource::getUrl('edit', ['record' => $calls])),
            ])
            ->sendToDatabase(auth()->user());
    }
}
