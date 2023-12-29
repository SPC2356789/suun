<?php

namespace App\Filament\Admin\Resources\Post;

use App\Filament\Admin\Resources\Post\ArticleResource\Pages;
use App\Filament\Admin\Resources\Post\ArticleResource\RelationManagers;
use App\Forms\Components\ColorPicker;
use App\Forms\Components\TinyMCE;
use Filament\Tables\Columns\Layout\Panel;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\trix;
use Filament\Forms\Components\ViewField;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Assets\Js;
use Filament\Tables\Columns\Layout\Stack;
//切換

class ArticleResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationLabel = '文章';
    protected static ?string $navigationIcon = 'gmdi-post-add-o';
    protected static ?int $navigationSort = 4;
    public static function form(Form $form): Form
    {
        FilamentAsset::register([
            Js::make('jquery', 'https://code.jquery.com/jquery-3.6.4.min.js'),
        ]);
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->label('標題'),
//                Forms\Components\TextInput::make('subtitle')
//                    ->label('副標題')
//                    ->nullable(),
                Forms\Components\TextInput::make('orderby')
                    ->label('排序')
                    ->nullable(),
                Forms\Components\Toggle::make('status')
                    ->onColor('success')
                    ->offColor('danger'),

                Forms\Components\FileUpload::make('image_path')
                    ->label('圖片上傳')
                    ->storeFileNamesIn('original_image_names')
                    ->imageEditor(),
                TinyMCE::make('content')
//                    ->required()
                    ->label('內容'),
            ])
//            ->statePath('data')
            ->columns(1); // 設置為兩列;
    }


    public static function table(Table $table): Table
    {
        FilamentAsset::register([
            Js::make('jquery', 'https://code.jquery.com/jquery-3.6.4.min.js'),
        ]);
        return $table
            ->columns([
                Split::make([
                    Tables\Columns\TextColumn::make('title')
                        ->label('標題')
                        ->searchable(),
                    Tables\Columns\ImageColumn::make('image_path')
                        ->label('圖片'),
                    Tables\Columns\TextColumn::make('orderby')
                        ->label('排序'),
                ]),
                Panel::make([
                    Stack::make([
                        TextColumn::make('content')->html()
                            ->label('內容'),
                    ]),
                ])->collapsible(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
