<?php

namespace App\Models;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;

class TicketReply extends Model
{
    protected $fillable = [
        'ticket_id',
        'user_id',
        'content'
    ];

    public function ticket (){
        return $this->belongsTo(Ticket::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}   
