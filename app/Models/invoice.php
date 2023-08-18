<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $table='invoice';
    protected $fillable = [
        'invoice_number','invoice_date','invoice_total','user_id'];
// details adl nama relasi utk model ini. bebas ja ngaranya tu pdhl..aman
//invoice _id tu foreign key dari tabel invoice, id tu PK tabel invoice
        public function details(){
            return $this->hasMany(detail::class,'invoice_id','id');
        }
    }
