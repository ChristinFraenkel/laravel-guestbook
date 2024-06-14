<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestBookEntry extends Model
{
    use HasFactory;
    protected string $username = '';
    protected ?string $email = null;
    protected string $subtitle = '';
    protected string $body = '';
    protected $fillable = [
        'username',
        'email',
        'subtitle',
        'body'
    ];
}
