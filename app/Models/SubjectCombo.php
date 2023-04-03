<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\classes;
use Illuminate\Database\Eloquent\Model\Subject;

class SubjectCombo extends Model
{
    use HasFactory;
    protected $table = "subject_combos";
    protected $primary = "id";
    protected $fillable = [
        'class_id',
        'subject_id'

    ];

    public function classes(){
        return $this->belongsTo(Classes::class);
    }
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
