<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpanel extends Model
{
    protected $fillable = [

            'PurchaseOrderNo',
            'PODate',
            'No',
            'itemDescription',
            'Make',
            'Quantity',
            'Rate',
            'Gross',
            'Tax',
            'NetAmount',
            'RTax',
            'Type',
            'ChalanNo',
            'ChalanDate',
            'ReceivedOn',
            'ReceivedBy',
            'FinancialYear',
            'CurrentStatus',
            'ItemLocation',
            'EntryDate'
       
        ];

         

public $timestamps=false; 
}

