<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $table='invoice';
    protected $fillable = [
        'invoice_number','invoice_total','user_id'];

        public function invoices(){
            return $this->hasMany(invoice::class,'product_id','id');
        }
    }
