<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
   // protected $primaryKey='id';

   	protected $table='clientes';

    protected $fillable = ['type_identification','identification','names','surnames','address','cell_phone','email','birth_date','biografia','activo'];

    protected $hidden = ['created_at','updated_at'];
}
