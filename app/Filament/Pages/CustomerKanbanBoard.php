<?php

namespace App\Filament\Pages;

use App\Enums\CustomerStatus;
use App\Models\Customer;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Mokhosh\FilamentKanban\Pages\KanbanBoard;

class CustomerKanbanBoard extends KanbanBoard
{
    protected static string $model = Customer::class;
    protected static string $statusEnum = CustomerStatus::class;


    protected function getEditModalFormSchema(null|int $recordId): array
    {
        return [
            TextInput::make('title'),
            TextInput::make('phone'),
            Select::make('status')
            ->options(CustomerStatus::class),
            MarkdownEditor::make('note'),
        ];
    }
}
