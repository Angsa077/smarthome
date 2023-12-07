<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
        
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'lamp_id', 'status'
    ];
    
    /**
     * Method lamp
     *
     * @return void
     */
    public function lamp()
    {
        return $this->belongsTo(Lamp::class);
    }
}
