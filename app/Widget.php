<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\ModelTraits\HasModelTrait;

class Widget extends Model
{
    //
    use SoftDeletes;
    use HasModelTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['widget_name','slug', 'user_id'];

    protected $dates = ['deleted_at'];

    /**
     * Get the user that owns the widget.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
