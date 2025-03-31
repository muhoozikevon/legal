<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

	public function invoice_iteam()
    {
        return $this->hasMany(\App\Model\InvoiceItem::class,'invoice_id','id');
    }

     public function invoice_client()
    {
        return $this->hasOne(\App\Model\AdvocateClient::class,'id','client_id');
    }
   
}
