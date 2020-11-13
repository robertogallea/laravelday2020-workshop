<?php

namespace Workshop\Domain\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Workshop\Domain\Factories\ItemFactory;

class Item extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return new ItemFactory();
    }
}
