<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catedral extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','slug','resumen','historia','status','categoria','mensaje','prefijoH1','orden','visitante','urlPortada','seoDescription','likes'];


    const BORRADOR =  1;
    const REVISION = 2;
    const PUBLICADO = 3;


    const FACHADAS = 1;
    const CAPILLAS = 2;
    const OTROS = 3;
    const PORTICO = 4;
    const MUSEO = 5;
    const HOME = 6;
    const MONUMENTOHOME = 20;
    const MONUMENTO = 21;


    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function fotos() {
        return $this->hasMany(CatedralFoto::class)->orderby('orden');
    }
    public function fotoPagina() {
        return $this->hasMany(CatedralFoto::class)->where('orden',1);
    }

    public function planos() {
        return $this->hasMany(CatedralPlano::class)->orderby('orden');
    }
    public function videos() {
        return $this->hasMany(CatedralVideo::class)->orderby('orden');
    }
    public function questions() {
        return $this->hasMany(CatedralQuestion::class)->orderby('orden');
    }

    public function comentarios() {
        return $this->hasMany(CatedralReview::class);
    }
    public function infos() {
        return $this->hasMany(CatedralInfo::class)->where('orden','<',99)->orderby('orden');
    }
    public function horarios() {
        return $this->hasMany(CatedralInfo::class)->where('orden','=',4);
    }
    public function misasCatedral() {
        return $this->hasMany(CatedralInfo::class)->where('orden','=',15);
    }
    public function misasSantiago() {
        return $this->hasMany(CatedralInfo::class)->where('orden','=',17);
    }
    public function calendarioLiturgico() {
        return $this->hasMany(CatedralInfo::class)->where('orden','=',19);
    }
    public function entradasVisitas() {
        return $this->hasMany(CatedralInfo::class)->where('orden','=',8);
    }

    public function funcionamientoBotafumeiro() {
        return $this->hasMany(CatedralInfo::class)->where('orden','=',9);
    }
    public function reports() {
        return $this->hasMany(CatedralInfo::class)->where('orden','>',99)
        ->where('orden','<',400)
        ->orderby('orden');
    }
    public function opinion() {
        return $this->hasMany(CatedralInfo::class)->where('orden','>',399)->orderby('orden');
    }

    public function infosandreports() {
        return $this->hasMany(CatedralInfo::class)->orderby('orden');
    }


    public function getCategorianameAttribute()
    {
        $name = "";
        switch ($this->categoria) {
            case 1:
                $name = "Fachadas";
                break;
            case 2:
                $name = "Capillas del interior";
                break;
            case 3:
                $name = "Espacios";
                break;
            case 4:
                $name = "Pórtico de la Gloria";
                break;
            case 5:
                $name = "Museo de la Catedral";
                break;
            case 6:
                $name ="Catedral de Santiago";
                break;
        }
        return $name;
    }
}
