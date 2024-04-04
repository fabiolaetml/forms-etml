<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'companyunit_id','companysector_id', 'employeerole_id', 'termination_date', 'cpf', 'reason_termination','reason_termination_other'];

    public function companyunit(): BelongsTo
    {
        return $this->belongsTo(CompanyUnit::class);
    }

    public function employeerole(): BelongsTo
    {
        return $this->belongsTo(EmployeeRole::class);
    }

    public function companysector(): BelongsTo
    {
        return $this->belongsTo(CompanySector::class);
    }

    public function exitInterviews()
    {
        return $this->hasMany(ExitInterview::class);
    }
}
