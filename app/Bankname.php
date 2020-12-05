<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Bankname extends Model
{
	 use Searchable;
    


    public function searchableAs()
    {
        return 'name';
    }
}
