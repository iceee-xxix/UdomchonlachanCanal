<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralElectricityRequestReplies extends Model
{
    use HasFactory;

    protected $fillable = ['ger_form_id', 'users_id', 'reply_text', 'reply_date'];

    public function gerForm()
    {
        return $this->belongsTo(GeneralElectricityRequestForm::class, 'ger_form_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
