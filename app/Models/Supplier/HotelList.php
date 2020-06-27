<?php

namespace App\Models\Supplier;

use Illuminate\Database\Eloquent\Model;

class HotelList extends Model
{
    protected $table = 'supplier_hotel_list';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hotel_code', 'hotel_name', 'hotel_city', 'hotel_country',
        'status', 'hotel_property_type', 'hotel_star_rating', 'hotel_email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];
}
