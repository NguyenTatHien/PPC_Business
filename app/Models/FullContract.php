<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FullContract extends Model
{
    use HasFactory;
    protected $table = 'full_contract';
    protected $fillable = [
        'Full_Contract_Code',
        'Customer_Name',
        'Year_Of_Birth',
        'SSN',
        'Customer_Address',
        'Mobile',
        'Property_ID',
        'Date_Of_Contract',
        'Price',
        'Deposit',
        'Remain',
        'Status',
    ];
}
