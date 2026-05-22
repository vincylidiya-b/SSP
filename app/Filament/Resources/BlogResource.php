<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->readOnly(),
                Forms\Components\TextInput::make('excerpt')
                    ->maxLength(255)
                    ->required(),
                 Forms\Components\FileUpload::make('image')
                    ->label('Feature Image')
                    ->image()
                    ->directory('file-manager/blog/feature-image')
                    ->required(),
                Forms\Components\Builder::make('description')
                     ->blocks([
                        Block::make('heading')
                            ->schema([
                                TextInput::make('content')
                                    ->label('Heading')
                                    ->required(),
                                Select::make('level')
                                    ->options([
                                        'h1' => 'Heading 1',
                                        'h2' => 'Heading 2',
                                        'h3' => 'Heading 3',
                                        'h4' => 'Heading 4',
                                        'h5' => 'Heading 5',
                                        'h6' => 'Heading 6',
                                    ])
                                    ->required(),
                            ])
                            ->columns(2),
                        Block::make('Rich Editor')
                            ->schema([
                                Forms\Components\RichEditor::make('content')
                                    ->label('Paragraph')
                                    ->fileAttachmentsDirectory('file-manager/blog/content')
                                    ->required(),
                            ]),
                        
                        Block::make('image')
                            ->schema([
                                
                                FileUpload::make('url')
                                    ->label('Image')
                                    ->imageEditor()
                                    ->image()
                                    ->openable()
                                    ->required()
                                    ->directory('file-manager/blog/image'),
                                TextInput::make('alt')
                                    ->label('Alt text')
                                    ->required(),
                            ]),
                        Block::make('Multiple Images')
                            ->schema([
                                FileUpload::make('url')
                                    ->multiple()
                                    ->label('Image')
                                    ->imageEditor()
                                    ->image()
                                    ->openable()
                                    ->preserveFilenames()
                                    ->reorderable()
                                    ->panelLayout('grid')
                                    ->required()
                                    ->directory('file-manager/blog/images')
                                    ->maxFiles(5),
                                TextInput::make('alt')
                                    ->label('Alt text')
                                    ->required(),
                            ]),
                    ])
                    ->columnSpanFull(),
               
                Forms\Components\TextInput::make('author')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug_url')
                    ->icon('heroicon-o-clipboard')
                    ->tooltip('Copy Link')
                    ->limit(20)
                    ->label('Link')
                    ->copyable()
                    ->copyMessage('Link copied'),
                Tables\Columns\TextColumn::make('excerpt')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('author')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}