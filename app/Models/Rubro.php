<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    use HasFactory;
    
    //declaramos el nombre de la tabla
    protected $table="rubro";

    //como nuestra clave primaria no es solo con nombre "id", la declaramos
    protected $primaryKey='idRubro';

    //agregamos el resto de los campos que pertenecen a la tabla
    protected $fillable=['descripcion'];

    //campo reservado para ver la creacion y modificacion de la tabla, y $hidden para que no sea devuelto en las consultas
    protected $hidden=['created_at','updated_at'];

    //cada objeto Rubro tiene una coleccion de objeto Busqueda, vamos a buscar su coleccion de esta manera
    public function busquedas(){
        return Busqueda::where('idRubro', $this->idRubro)->get();
        //return $this->hasMany(Busqueda::class, 'foreign_key', 'local_key');
    }
}
