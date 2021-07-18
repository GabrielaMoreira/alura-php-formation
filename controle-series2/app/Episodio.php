<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    protected $table = 'episodios';
    protected $fillable = ['numero'];

    public function temporada()
    {
        return$this->belongsTo(Temporada::class);
    }
}
