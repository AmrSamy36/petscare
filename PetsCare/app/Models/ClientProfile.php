<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientProfile extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $filladble = [
          'first_name',
          'last_name',
          'address',
          'phone_number'

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
