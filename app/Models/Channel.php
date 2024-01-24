<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $primaryKey = 'ChannelID';
    public $fillable = ['ChannelName', 'Description', 'SubscribersCount', 'URL'];
    use HasFactory;
}
