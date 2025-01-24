<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'kelass','department_id'];

    public function students(): HasMany{
    return $this->hasMany(Student::class);
    }
    public function department(): BelongsTo{
    return $this->belongsto(Department::class);
    }
}
