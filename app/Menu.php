<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $casts = [
        'active' => 'boolean'
    ];
    protected $table = 'liste';

    public function recipes()
    {
        return $this->belongsToMany('App\Recipe', 'liste_retete', 'id_lista', 'id_reteta')
                    ->using('App\MenuRecipes')
                    ->withPivot(['order', 'finished']);
    }
}
