<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $edad
 * @property $sanguineo
 * @property $ocupacion
 * @property $telefono
 * @property $fecha_nacimiento
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{

    protected $table = "invitados";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'estatus',
        'num_invitados_confirm',
        'num_invitados_perm',
        'mesa',
        'telefono',
        'num_invitados_perm_n',
        'num_invitados_confirm_n',
    ];

}
