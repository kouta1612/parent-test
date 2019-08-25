<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public static function getParents()
    {
        return static::where('parent_id', 0)->get();
    }

    public function parent()
    {
        return $this->belongsTo('App\Address', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Address', 'parent_id');
    }

    public function hasChild()
    {
        return $this->hasMany('App\Address', 'parent_id')->exists();
    }
}
