<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Empleados extends Model implements AuthenticatableContract
{
   use Authenticatable;

   protected $table = 'RPEMPLEA';
   protected $connection = 'sqlsrv_emplea';
   protected $primaryKey = 'EMPLEADO';
}
