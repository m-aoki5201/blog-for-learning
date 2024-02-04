<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function getPeginateByLimit(int $limit_count = 5){
        // return $this->orderBy('updated_at', 'DESC')->take($limit_count)->get();
        // return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
}
