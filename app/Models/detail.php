<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{

    use HasFactory;
    protected $table='details';
    protected $fillable = [
        'invoice_id','product_id','quantity','discount','total'];

        public function invoices(){
            return $this->hasMany(details::class,'invoice_id','id');
        }
}
