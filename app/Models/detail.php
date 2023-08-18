<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{

    use HasFactory;
    protected $table = 'details';
    protected $fillable =
    [
        'invoice_id', 'product_id', 'quantity', 'discount', 'total'
    ];

    public function invoices()
    {
        return $this->belongsTo(invoice::class, 'invoice_id', 'id');
    }

    public function products()
    {

        return $this->belongsTo(product::class, 'product_id', 'id');
    }
}
