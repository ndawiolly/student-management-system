<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Subject extends Model
{
    use HasFactory;
    protected $table = "subjects";
    protected $primary = "id";
    protected $fillable = [
        'subject_name',
        'subject_code',

    ];

    public function subject_combos(){
        return $this->hasOne(SubjectCombo::class, 'id', 'subject_id');
    }
//     public function class(){
//         return $this->belongsTo(Classes::class);
//     }
}
