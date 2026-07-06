<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('نام دسته')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->label('آدرس (Slug)')
                    ->required()
                    ->unique(ignoreRecord: true),

                Select::make('parent_id')
                    ->label('دسته والد')
                    ->relationship('parent', 'name')
                    ->searchable()
                    ->preload(),

                FileUpload::make('image')
                    ->label('تصویر دسته')
                    ->image()
                    ->directory('categories'),

                Textarea::make('description')
                    ->label('توضیحات')
                    ->rows(4),

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