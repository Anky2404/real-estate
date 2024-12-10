<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';

    //Define relationship 
    public function details()
    {
        return $this->hasOne(PropertyDetail::class, 'property_id');
    }

    //Get Property with their details
    public static function getPropertiesWithDetails()
    {
        return self::with('details')->get();
    }

    
}
