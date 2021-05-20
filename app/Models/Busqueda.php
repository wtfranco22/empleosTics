<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busqueda extends Model
{
    use HasFactory;

    //declaramos el nombre de la tabla
    protected $table="busqueda";

    //como nuestra clave primaria no es solo con nombre "id", la declaramos
    protected $primaryKey='idBusqueda';

    //agregamos el resto de los campos que pertenecen a la tabla
    protected $fillable=['idRubro','empresa','titulo','descripcion'];

    //campo reservado para ver la creacion y modificacion de la tabla, y $hidden para que no sea devuelto en las consultas
    protected $hidden=['created_at','updated_at'];
}
