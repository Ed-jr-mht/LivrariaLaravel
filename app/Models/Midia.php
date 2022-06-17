<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Midia extends Model
{
    use HasFactory;

    public function livro(){
        return $this -> BelongsTo(Livro::class);
    }
}
