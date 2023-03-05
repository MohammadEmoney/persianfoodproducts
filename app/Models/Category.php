<?php

namespace App\Models;

use App\Traits\LanguageTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use HasFactory, LanguageTrait, NodeTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'names',
        'is_active'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'names' => 'json',
        'is_active' => 'boolean',
    ];

    // /**
    //  * Get the user's first name.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Casts\Attribute
    //  */
    // protected function getNameAttribute($value)
    // {
    //     dd($value);
    //     return $this->name;
    //     // $lang = config('app.locale');
    //     // $field = 'name';
    //     // $pluralField = $field . 's';
    //     // switch ($lang) {
    //     //     case 'fa':
    //     //         return $this->$pluralField?->fa;
    //     //         break;
    //     //     case 'it':
    //     //         return $this->$pluralField?->it;
    //     //         break;

    //     //     default:
    //     //         $this->name;
    //     //         break;
    //     // }
    // }

    /**
     * @return void
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
