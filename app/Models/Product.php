<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Image\Manipulations;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'names',
        'slug',
        'content',
        'contents',
        'excerpt',
        'excerpts',
        'lang',
        'category_id',
        'is_visible',
        'is_featured',
        'views',
        'extra',
        'user_id',
        'scientific_name'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'names' => 'json',
        'contents' => 'json',
        'excerpts' => 'json',
        'extra' => 'json',
        'is_visible' => 'boolean',
        'is_featured' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class);
    }

    public function scopeIsVisible($query)
    {
        $query->where('is_visible', true);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // public function registerMediaConversions(Media $media = null)
    // {
    //     $this->addMediaCollection('SpecialImage')
    //          ->useFallbackPath(public_path('/front/assets/img/placeholder.png'));
    //     $this->addMediaConversion('thumb')
    //          ->crop(Manipulations::CROP_CENTER, 400, 333)
    //          ->performOnCollections('SpecialImage');
    //     $this->addMediaConversion('70_70')
    //          ->crop(Manipulations::CROP_CENTER, 70, 70)
    //          ->performOnCollections('SpecialImage');
    // }
}
