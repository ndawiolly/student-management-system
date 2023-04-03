<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = "classes";
    protected $primary = "id";
    protected $fillable = [
        'class_name',
        'class_section',
    ];

    // public function subjects(){
    //     return $this->hasMany(Subject::class);
    // }
    // public function subject_combos(){
    //     return $this->hasMany(SubjectCombo::class, 'class_id','id');
    // }
    public function subject_combos(){
        return $this->hasMany(SubjectCombo::class, 'class_id');
    }
}
