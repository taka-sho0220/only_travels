<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * モデルと関連しているテーブル
     * 
     * @var string
     */
    protected $table = 'contacts';

    protected $fillable = 
    [
        'name',
        'email',
        'subject',
        'message',
        'created_at'
    ];
}
