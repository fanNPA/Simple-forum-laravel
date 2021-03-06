<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // The database table used by the model.
    protected $table = 'articles';
    // The attributes that are mass assignable.
    protected $fillable = [
    	'title',
    	'content'
    ];
    /**
     * The tag that belong to the article.
     */
    public function tag()
    {
        return $this->belongsToMany('App\Tag');
    }
}
