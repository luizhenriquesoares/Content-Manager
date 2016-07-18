<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'slug', 'call', 'contents', 'coverphoto' ,'categorie_id'];

    /**
     * @var array
     */
    protected $table = ['contents'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentsPhotos()
    {
        return $this->hasMany(ContentPhoto::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categories()
    {
        return $this->hasOne(Categorie::class);
    }
}
