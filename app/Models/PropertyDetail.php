<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'property_details'; 

    // Define inverse relationship with Property
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}

