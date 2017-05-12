<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestPrint extends Model
{

    protected $table = 'requests';

     protected $fillable = [
        'owner_id', 'status', 'open_date', 'due_date', 'description', 'quantity', 'colored', 'stapled', 'paper_size', 'paper_type', 'file', 'printer_id', 'closed_date', 'closed_user_id', 'refused_reason', 'satisfaction_grade',
    ];

}
