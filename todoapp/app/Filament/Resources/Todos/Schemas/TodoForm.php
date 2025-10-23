<?php

namespace App\Filament\Resources\Todos\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TodoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                DatePicker::make('due_date'),
                Toggle::make('completed')
                    ->required(),
                TextInput::make('priority')
                    ->required()
                    ->numeric()
                    ->default(2),
                TextInput::make('user_id')
                    ->numeric(),
            ]);
    }
}
