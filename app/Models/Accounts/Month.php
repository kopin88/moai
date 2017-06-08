<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    protected $fillable = [
      'financial_year_id', 'name', 'title', 'active', 'remark'
    ];

    protected $table = 'months';

    public function financial_year()
    {
      return $this->belongsTo(FinancialYear::class, 'financial_year_id');
    }


    public function in_payrolls()
    {
      return $this->hasMany(InPayroll::class);
    }

    public function out_payrolls()
    {
      return $this->hasMany(OutPayroll::class);
    }

}
