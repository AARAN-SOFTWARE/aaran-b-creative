<?php

namespace Aaran\Network\Models;

use Aaran\Network\Database\Factories\TopupFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topup extends Model
{
   use HasFactory;

   protected $guarded = [];

    protected static function newFactory():TopupFactory
    {
        return new TopupFactory();
    }

}
