<?php

namespace App\Models;

use Filament\Forms\Set;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RealisationCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
        ];
    }

    public function realisations(): BelongsToMany
    {
        return $this->belongsToMany(Realisation::class);
    }

    public static function getForm(): array
    {
        return [
           
            TextInput::make('title')
                ->label('Tytuł')
                ->unique(ignoreRecord: true)
                ->minLength(3)
                ->maxLength(255)
                ->required()
                ->live(debounce: 1000)
                ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

           TextInput::make('slug')
                ->label('Slug')
                ->required()
                ->placeholder('Przyjazny adres url który wygeneruje się automatycznie')
                ->readOnly(),
        ];
    }
}
