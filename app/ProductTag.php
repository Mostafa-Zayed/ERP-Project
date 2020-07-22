<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    //
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class,'tag_id');
    }
}
