<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('site_title')
                    ->required()
                    ->default('Deekod — Your chairs should be full.'),
                Textarea::make('seo_description')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('og_image')
                    ->image()
                    ->maxSize(51200),
                FileUpload::make('favicon')
                    ->image()
                    ->maxSize(51200),
                TextInput::make('calendly_link')
                    ->required()
                    ->default('https://calendly.com/YOUR-LINK'),
            ]);
    }
}
