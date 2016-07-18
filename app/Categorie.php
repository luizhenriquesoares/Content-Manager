<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorie
 * @package App
 */
class Categorie extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title','coverphoto'];

    /**
     * @var string
     */
    protected $table = 'categories';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoriesPhotos()
    {
        return $this->belongsTo(CategoriePhoto::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
