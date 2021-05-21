<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'auctions';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'title', 'sub_title', 'bid_cost', 'price', 'image', 'auction_start_date', 'auction_start_time'];

    
}
