<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class grade extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'test_id', 'student_id', 'english', 'math', 'science',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
