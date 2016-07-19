<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriePhoto extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['url', 'categories_id'];

    /**
     * @var array
     */
    protected $table = ['categories_photos'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categories()
    {
        return $this->belongsTo(Categorie::class);
    }
}
