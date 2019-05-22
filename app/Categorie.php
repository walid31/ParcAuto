<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
	  protected $primaryKey = 'id_categorie';

    protected $fillable=['id_categorie','name_categorie'];

    protected $guarded = [];

    public function modelles()
    {
        return $this->hasMany(Modelle::class);
    }
}
