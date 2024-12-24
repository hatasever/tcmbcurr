<?php

namespace Hatasever\TcmbCurr\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrencyTCMB extends Model
{
    use HasFactory;
    protected $table = 'currency_tcmb';
    protected $guarded = [];
}
