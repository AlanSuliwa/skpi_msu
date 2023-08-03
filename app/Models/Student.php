<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Religion
    const RELIGION_ISLAM = "Islam";
    const RELIGION_PROTESTAN = "Protestan";
    const RELIGION_KATOLIK = "Katolik";
    const RELIGION_HINDU = "Hindu";
    const RELIGION_BUDDHA = "Buddha";
    const RELIGION_KHONGHUCU = "Khonghucu";

    const RELIGION_CHOICE = [
        self::RELIGION_ISLAM => self::RELIGION_ISLAM,
        self::RELIGION_PROTESTAN => self::RELIGION_PROTESTAN,
        self::RELIGION_KATOLIK => self::RELIGION_KATOLIK,
        self::RELIGION_HINDU => self::RELIGION_HINDU,
        self::RELIGION_BUDDHA => self::RELIGION_BUDDHA,
        self::RELIGION_KHONGHUCU => self::RELIGION_KHONGHUCU,
    ];

    const GENDER_MAN = "Laki-laki";
    const GENDER_WOMAN = "Perempuan";

    const GENDER_CHOICE = [
        self::GENDER_MAN => self::GENDER_MAN,
        self::GENDER_WOMAN => self::GENDER_WOMAN
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
