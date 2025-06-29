<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta_title',
        'meta_description',
        'title',
        'slug',
        'thumbnail',
        'description',
        'content',
        'published_at',
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
            'published_at' => 'datetime',
        ];
    }


    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

   public function getPublishedDate()
{
    return Carbon::parse($this->published_at)
        ->locale('pl')
        ->translatedFormat('d F Y');
}

    public function getMetaTitle(): string
    {
        if ($this->meta_title) {
            return $this->meta_title;
        } else {
            return str_replace(['"', "'"], '', $this->title) . ' - ' . config('app.name');
        }
    }

    public function getMetaDescription(): string
    {
        if ($this->meta_desc) {
            return $this->meta_desc;
        } else {
            return substr(strip_tags($this->description), 0, 150);
        }
    }
}
