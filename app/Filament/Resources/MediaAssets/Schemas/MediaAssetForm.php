<?php

namespace App\Filament\Resources\MediaAssets\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MediaAssetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->default(null),
                \Filament\Forms\Components\FileUpload::make('file_path')
                    ->directory('media')
                    ->required(),
            ]);
    }
}
