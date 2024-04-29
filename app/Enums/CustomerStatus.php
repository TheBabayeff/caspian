<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Mokhosh\FilamentKanban\Concerns\IsKanbanStatus;

enum CustomerStatus: string implements HasColor, HasIcon, HasLabel
{
    use IsKanbanStatus;

    case New = 'new';

    case Processing = 'processing';

    case Waiting = 'waiting';
    case Paid = 'paid';
    case Finished = 'finished';


    public static function kanbanCases(): array
    {
        return [
            static::New,
            static::Processing,
            static::Waiting,
            static::Paid,
            static::Finished,
        ];
    }
    public function getLabel(): string
    {
        return match ($this) {
            self::New => 'New',
            self::Processing => 'Processing',
            self::Waiting => 'Waiting',
            self::Paid => 'Paid',
            self::Finished => 'Finished',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::New => 'info',
            self::Processing => 'warning',
            self::Waiting => 'danger',
            self::Paid => 'success',
            self::Finished => 'success',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::New => 'heroicon-m-sparkles',
            self::Processing => 'heroicon-m-x-circle',
            self::Waiting => 'heroicon-m-x-circle',
            self::Paid => 'heroicon-m-check-badge',
            self::Finished => 'heroicon-m-check-badge',

        };
    }
}
