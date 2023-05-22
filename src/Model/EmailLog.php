<?php

namespace waqar\emaillog\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EmailLog extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

}
