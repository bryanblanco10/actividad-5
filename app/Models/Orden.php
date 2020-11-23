<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $primaryKey='id';

   	protected $table='ordenes';

    protected $fillable = ['name_cliente','address','cell_phone','order_date','deliver_date','subtotal','total','average_time','state'];

    protected $hidden = ['created_at','updated_at'];
}
