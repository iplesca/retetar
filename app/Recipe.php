<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'retete';
    public function menu()
    {
//        return $this->belongsToMany('App\Menu', 'liste_retete', 'id_reteta', 'id_lista');
        return $this->belongsToMany('App\Menu', 'liste_retete', 'id_reteta', 'id_lista')
                    ->using('App\MenuRecipes')
                    ->withPivot(['order', 'finished']);
    }
}
