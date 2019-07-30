<?php
namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MenuRecipes extends Pivot
{

    protected $dates = [
        'finished'
    ];

    public $incrementing = true;
}
