<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExitInterview extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'question1',
        'comment1',
        'question2',
        'comment2',
        'question3',
        'comment3',
        'question4',
        'comment4',
        'question5',
        'comment5',
        'question6',
        'comment6',
        'question7',
        'comment7',
        'question8',
        'comment8',
        'question9',
        'comment9',
        'question10',
        'comment10',
        'question11',
        'comment11',
        'question12',
        'comment12',
        'question13',
        'comment13',
        'question14',
        'comment14',
        'question15',
        'comment15',
        'question16',
        'comment16',

    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

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

    
}

