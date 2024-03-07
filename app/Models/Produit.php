<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use Searchable;

    protected $fillable = [
        'nom', 'description', 'prix', 'quantite'
    ];

    /**
     * Get the index name for the model.
     *
     * @return string
    */
    public function searchableAs()
    {
        return 'produits_index';
    }
}
