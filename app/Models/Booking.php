<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

        public function scopeFilter($query,array $filters){

        if($filters['search']??false){
            $query->where('customer_name','like','%'.request('search').'%')
            ->orWhere('address','like','%'.request('search').'%')->orWhere('phone','like','%'.request('search').'%')
            ->orWhere('email','like','%'.request('search').'%')->orWhere('resort_name','like','%'.request('search').'%');
        }
    }
}
