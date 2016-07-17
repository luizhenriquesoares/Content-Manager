<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentPhoto extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['url', 'content_id'];

    /**
     * @var array
     */
    protected $table = ['contents_photos'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contents()
    {
        return $this->belongsTo(Content::class);
    }
}
