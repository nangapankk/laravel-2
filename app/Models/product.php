<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table='product';
    protected $fillable = [
        'name','description','category','buy','sell','stock','supplier_id','image_url'];

    public function supplier(){
        return $this->belongsTo(supplier::class,'supplier_id','id');
    }
}
