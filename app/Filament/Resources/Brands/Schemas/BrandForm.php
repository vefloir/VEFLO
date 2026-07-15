<?php

namespace App\Filament\Resources\Brands\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BrandForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('نام برند')
                    ->required(),

                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                FileUpload::make('logo')
                    ->label('لوگو')
                    ->image()
                    ->directory('brands'),

                TextInput::make('country')
                    ->label('کشور'),

                TextInput::make('website')
                    ->label('وب‌سایت')
                    ->url(),

                Textarea::make('description')
                    ->label('توضیحات'),

                TextInput::make('sort_order')
                    ->label('ترتیب نمایش')
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->label('فعال')
                    ->default(true),
            ]);
    }
}