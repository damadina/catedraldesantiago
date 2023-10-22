<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatedralInfo extends Model
{
    use HasFactory;
    protected $fillable = ['id','respuesta','titulo','orden','catedral_id','autor','slug','seoDescription'];
    /* public function getRouteKeyName()
    {
        return 'slug';
    }
 */
    public function elemento()
    {
        return $this->belongsTo(Catedral::class);
    }
    public function reviews() {
        return $this->hasMany(InfosReview::class,'infos_id');
    }
}
