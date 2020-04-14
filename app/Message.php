<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'date_sent',
        'reference_no',
        'department',
        'title',
        'message_title',
        'message_body'
    ];
    //
}
