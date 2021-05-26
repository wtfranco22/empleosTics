<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    //declaramos el nombre de la tabla
    protected $table = "inscripcion";

    //como nuestra clave primaria no es solo con nombre "id", la declaramos
    protected $primaryKey = 'idInscripcion';

    //agregamos el resto de los campos que pertenecen a la tabla
    protected $fillable = ['idBusqueda', 'fecha', 'apellido', 'nombre'];

    //campo reservado para ver la creacion y modificacion de la tabla, y $hidden para que no sea devuelto en las consultas
    protected $hidden = ['created_at', 'updated_at'];

    //cada objeto Inscripcion hace referencia a un objeto Busqueda, lo retornamos de este modo
    public function objBusqueda()
    {
        return Busqueda::where('idBusqueda', $this->idBusqueda)->get();
        //return $this->belongsTo(Busqueda::class, 'foreign_key', 'local_key');
    }
}
