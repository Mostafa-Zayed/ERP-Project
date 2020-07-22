<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function tags()
    {
        return $this->hasManyThrough(Tag::class,ProductTag::class,product_id,tage_id);
    }
}
