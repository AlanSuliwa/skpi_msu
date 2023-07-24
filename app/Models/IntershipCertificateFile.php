<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntershipCertificateFile extends Model
{
    use HasFactory;

    protected $guarded = [];

    const STATUS_NOT_VALIDATE = "Belum Divalidasi";
    const STATUS_VALIDATE = "Divalidasi";
}
