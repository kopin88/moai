<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Model;

class FinancialYear extends Model
{
    protected $fillable = ['name', 'active', 'remark'];

    protected $table = 'financial_years';

    public function mhoth()
    {
      return $this->hasMany(Month::class);
    }
}
