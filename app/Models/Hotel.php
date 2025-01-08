<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Hotel extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ['created_at', 'updated_at'];
    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
    public function facilities()
    {
        return $this->belongsToMany(Facility::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10);
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('gallery')
            ->useFallbackUrl('/images/placeholder.jpg')
            ->useFallbackPath(public_path('/images/placeholder.jpg'));
    }

}
