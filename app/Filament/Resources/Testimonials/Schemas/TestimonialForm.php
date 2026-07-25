<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('doctor_name')
                    ->required(),
                TextInput::make('practice_name')
                    ->default(null),
                TextInput::make('location')
                    ->default(null),
                TextInput::make('outcome')
                    ->default(null),
                \Filament\Forms\Components\FileUpload::make('video_path')
                    ->acceptedFileTypes(['video/mp4', 'video/webm', 'video/ogg'])
                    ->directory('testimonials')
                    ->maxSize(51200)
                    ->default(null),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
