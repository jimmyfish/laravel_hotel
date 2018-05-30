<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'room_id', 'inputed_by', 'phone', 'nik',
    ];

    /**
     * One-To-One between Customer and Room
     */
    public function room()
    {
        return $this->hasOne(Room::class);
    }
}
