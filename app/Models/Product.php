<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{

    protected $appends = [
      'returndate', 'image'
    ];

    protected $fillable = [
        'title','user_id','day_count','is_borrowed','description','borrower_id','status_id','return_date','main_image','category_id'
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function b_user()
    {
        return $this->belongsTo('App\Models\User','borrower_id');
    }

    public function scopeNotBorrowed($query)
    {
        return $query->where('status_id',config('custom.status.not_borrowed'));
    }

    public function getReturnDateAttribute()
    {
        return Carbon::parse($this->borrow_date)->addDay($this->day_count)->toDateString();
    }

    public function scopeIsborrowed($query)
    {
        return $query->where('status_id', config('custom.status.borrowed'));
    }

    public static function lastadded()
    {
        return self::NotBorrowed()->orderBy('id','desc')->take('4')->get();
    }

    public function getImageAttribute()
    {
        return $this->main_image == null ? 'http://sigmalambdabeta.com/wp-content/plugins/special-recent-posts/images/no-thumb.png' : $this->main_image;
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

}
